<?php
namespace App\Models;

use App\Core\Model;

class Student extends Model {
    
    // FECTH STUDENTS ASS AN ASSOCO
    public function getAllStudents() {

        //$sql="select students.id,students.name,students.email,students.age,courses.name as course, from students join levels on students.level=levels WHERE students.id=?";

        $sql = "SELECT students.id, students.name, students.email, students.age, levels.level, courses.name as course 
        FROM students 
        JOIN courses ON students.course_id = courses.id
        JOIN levels ON students.level_id = levels.id";



        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }



    public function getStudentById($id) {

        //$sql="select students.id,students.name,students.email,students.age,courses.name as course, from students join levels on students.level=levels WHERE students.id=?";
        $sql = "SELECT students.id, students.name, students.email, students.age, students.course_id, students.level_id,levels.level, courses.name as course 
        FROM students 
        JOIN courses ON students.course_id = courses.id
        JOIN levels ON students.level_id = levels.id
        WHERE students.id=?";

        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function addStudent($data) {
        // die(json_encode($data));
        $stmt = $this->db->prepare("INSERT INTO students (name, age, email,course_id, level_id, password) VALUES (?, ?, ?,?,?,?)");
        $stmt->bind_param("sisiis", $data['name'], $data['age'], $data['email'],$data['course_id'],$data['level_id'], $data['password'] );
        return $stmt->execute();
    }

    public function updateStudent($id, $data) {
        $stmt = $this->db->prepare("UPDATE students SET name = ?, age = ?, email = ? ,course_id=?, level_id= ? WHERE id = ?");
        $stmt->bind_param("sisiii", $data['name'], $data['age'], $data['email'],$data['course_id'],$data['level_id'],$id);
        return $stmt->execute();
    }

    public function deleteStudent($id) {
        $stmt = $this->db->prepare("DELETE FROM students WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }



    function getStudentByEmail($email){

        $sql = "SELECT students.id, students.name, students.email, students.password
        FROM students 
        WHERE students.email=?";

        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();

    }
}

<?php
namespace App\Models;

use App\Core\Model;

class course extends Model {
    
    // FECTH CourseS ASS AN ASSOCO
    public function getAllCourses() {
        $result = $this->db->query("SELECT * FROM courses");
        return $result->fetch_all(MYSQLI_ASSOC);
    }


    public function getCourseById($id) {
        $stmt = $this->db->prepare("SELECT * FROM courses WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function addCourse($data) {
        $stmt = $this->db->prepare("INSERT INTO courses (name, unit) VALUES (?, ?)");
        $stmt->bind_param("si", $data['name'], $data['unit']);
        return $stmt->execute();
    }

    public function updateCourse($id, $data) {
        $stmt = $this->db->prepare("UPDATE courses SET name = ?, unit = ? WHERE id = ?");
        $stmt->bind_param("sii", $data['name'], $data['unit'], $id);
        return $stmt->execute();
    }

    public function deleteCourse($id) {
        $stmt = $this->db->prepare("DELETE FROM courses WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}

?>
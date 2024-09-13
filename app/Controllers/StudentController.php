<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\course;
use App\Models\Student;
use App\Models\Level;


class StudentController 
{
  private $studentModel;

  private $course;
  private $level;
    public function __construct()
    {
        $this->studentModel=new Student();
        $this->course=new course();
        $this->level=new Level();
    }

    /**
     * Displays all students.
     */
    public function index()
    {
        $students = $this->studentModel->getAllStudents();
        $level="JSS1";
        View::render('students/index', ['students' => $students,'level'=>$level]);
    }

    /**
     * Displays the form to create a new student.
     */
    public function create()
    {
        $courses = $this->course->getAllCourses();
        $levels = $this->level->getAllLevels();
        View::render('students/create', ['courses'=>$courses, 'levels'=>$levels]);
    }

    /**
     * Stores a new student in the database.
     */
    public function store()
    {
        $data = [
            'name' => $_POST['name'],
            'age' => $_POST['age'],
            'email' => $_POST['email'],
            'course_id'=>$_POST['course_id'],
            'level_id' => $_POST['level_id'],
            'password' => password_hash($_POST['password'], PASSWORD_BCRYPT)
        ];
       // die(json_encode($data));
        $this->studentModel->addStudent($data);
        header('Location:/hifi_management/students');
    }

    /**
     * Displays the form to edit a student.
     */
    public function edit()
    {
        $id = $_GET['id'];
        $courses = $this->course->getAllCourses();
        $levels = $this->level->getAllLevels();

        //die($id);
        $student = $this->studentModel->getStudentById($id);
        View::render('students/edit', ['student' => $student,'courses'=>$courses, 'levels'=>$levels]);
    }

    /**
     * Updates a student in the database.
     */

    public function update()
    {
        $id = $_POST['id'];
        $data = [
            'name' => $_POST['name'],
            'age' => $_POST['age'],
            'email' => $_POST['email'],
            'course_id'=>$_POST['course_id'],
            'level_id' => $_POST['level_id']
        ];


   // die(json_encode($data));
        $this->studentModel->updateStudent($id, $data);
        header('Location: /hifi_management/students');
    }

    /**
     * Deletes a student from the database.
     */
    public function delete()
    {
        $id = $_POST['id'];
        $this->studentModel->deleteStudent($id);
        header('Location: /hifi_management/students');
    }
    
}

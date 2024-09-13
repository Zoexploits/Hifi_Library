<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\Course;

class CourseController 
{
  private $courseModel;

    public function __construct()
    {
        $this->courseModel=new Course();
    }

    /**
     * Displays all courses.
     */
    public function courseIndex()
    {
        $courses = $this->courseModel->getAllCourses();
        View::render('courses/CourseIndex', ['courses' => $courses]);
    }

    /**
     * Displays the form to create a new student.
     */
    public function createCourse()
    {
        View::render('courses/createCourse');
    }

    /**
     * Stores a new student in the database.
     */
    public function storeCourse()
    {
        $data = [
            'name' => $_POST['name'],
            'unit' => $_POST['unit'],
        ];
        
        $this->courseModel->addCourse($data);
        header('Location://courses');
    }

    /**
     * Displays the form to edit a student.
     */
    public function editCourse()
    {
        $id = $_GET['id'];

        //die($id);
        $course = $this->courseModel->getCourseById($id);
        View::render('courses/editCourse', ['course' => $course]);
    }

    /**
     * Updates a student in the database.
     */

    public function updateCourse()
    {
        $id = $_POST['id'];

        $data = [
            'name' => $_POST['name'],
            'unit' => $_POST['unit'],
        ];

        $this->courseModel->updateCourse($id, $data);
        header('Location: /hifi_management/courses');
    }

    /**
     * Deletes a student from the database.
     */
    public function deleteCourse()
    {
        $id = $_POST['id'];
        $this->courseModel->deleteCourse($id);
        header('Location: /hifi_management/courses');
    }
}



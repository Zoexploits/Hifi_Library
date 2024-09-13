<?php  
namespace App\Controllers;
session_start();
use App\Models\Student;
use App\Core\View;


class AuthController{

    private $studentModel;
    public function __construct()
    {
        $this->studentModel=new Student();

    }



    public function loginStudent()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // If result, that is if student exist
        $student = $this-> studentModel->getStudentByEmail($email);
       // die(json_encode($student));

        if(empty($student)){
            $_SESSION['errorMessage'] = "Invalid credentials";
           return View::render('auth/login', ['email' => $email,'password'=>$password]);
        }
        

        if(password_verify($password,$student['password'])){

            unset($student['password']);
            $_SESSION['username'] = $student['name'];
           return View::render('dashboard', ['successMessage' => "Login successfull"]);

        }else{

            $_SESSION['errorMessage'] = "Invalid credentials";
            return View::render('auth/login', ['email' => $email,'password'=>$password]);
        }

    }


    function getLoginForm(){

        View::render('auth/login');
    }
}







?>
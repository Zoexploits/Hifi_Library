<?php
namespace App\Controllers;

use App\Core\View;

class HomeController{


    public function index(){
        $message="Welcome To School Management System";

      return  View::render('home',['message'=>$message]);
    }




    public function getLevels(){
    

    return  View::render('level');
  }

}

//1. create a view (page)
//1. create a controller with actions (page)
//1. create a route [path=>[controller, action]]
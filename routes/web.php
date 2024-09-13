<?php

use App\Controllers\AuthController;
use App\Controllers\CourseController;
use App\Controllers\LevelsController;

use App\Controllers\HomeController;
use App\Controllers\StudentController;
use App\Core\Router;



Router::get('/home', [HomeController::class, 'index']);
Router::get('/levels', [HomeController::class, 'getLevels']);

//student controller
Router::get('/students', [StudentController::class, 'index']);
Router::get('/students/signup', [StudentController::class, 'create']);
Router::post('/students/store', [StudentController::class, 'store']);
Router::get('/students/edit', [StudentController::class, 'edit']);
Router::put('/students/update', [StudentController::class, 'update']);
Router::delete('/students/delete', [StudentController::class, 'delete']);

//Courses controller
Router::get('/courses', [CourseController::class, 'courseIndex']);
Router::get('/courses/create', [CourseController::class, 'createCourse']);
Router::post('/courses/store', [CourseController::class, 'storeCourse']);
Router::get('/courses/edit', [CourseController::class, 'editCourse']);
Router::put('/courses/update', [CourseController::class, 'updateCourse']);
Router::delete('/courses/delete', [CourseController::class, 'deleteCourse']);

//Levels
Router::get('/levels', [LevelsController::class, 'levelIndex']);
Router::get('/levels/add', [LevelsController::class, 'addLevel']);
Router::post('/levels/store', [LevelsController::class, 'storeLevel']);
Router::get('/levels/edit', [LevelsController::class, 'editLevel']);
Router::put('/levels/update', [LevelsController::class, 'updateLevel']);
Router::delete('/levels/delete', [LevelsController::class, 'deleteLevel']);

Router::get('/auth/login-form', [AuthController::class, 'getLoginForm']);
Router::post('/auth/login', [AuthController::class, 'loginStudent']);



<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\Level;

class LevelsController 
{
  private $levelModel;

    public function __construct()
    {
        $this->levelModel=new Level();
    }

    /**
     * Displays all courses.
     */
    public function levelIndex()
    {
        $levels = $this->levelModel->getAllLevels();
        View::render('levels/levelsIndex', ['levels' => $levels]);
    }

    /**
     * Displays the form to create a new student.
     */
    public function addLevel()
    {
        View::render('levels/addLevel');
    }

    /**
     * Stores a new student in the database.
     */
    public function storeLevel()
    {
        $data = [
            'level' => $_POST['level']
        ];
        
        $this->levelModel->addLevel($data);
        header('Location:/hifi_management/levels');
    }

    /**
     * Displays the form to edit a student.
     */
    public function editLevel()
    {
        $id = $_GET['id'];

        //die($id);
        $levels = $this->levelModel->getLevelById($id);
        View::render('levels/editLevel', ['level' => $levels]);
    }

    /**
     * Updates a student in the database.
     */

    public function updateLevel()
    {
        $id = $_POST['id'];
        $data = [
            'level' => $_POST['level']
        ];

        $this->levelModel->updateLevel($id, $data);
        header('Location: /hifi_management/levels');
    }

    /**
     * Deletes a student from the database.
     */
    public function deleteLevel()
    {
        $id = $_POST['id'];
        $this->levelModel->deleteLevel($id);
        header('Location: /hifi_management/levels');
    }
}

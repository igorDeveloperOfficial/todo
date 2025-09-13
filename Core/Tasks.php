<?php

namespace Core;

class Tasks
{
    protected $user;
    protected $currentDate;
    protected $form;
    public function __construct($user){
        $this->user = $user;
        $this->form = new \Core\Form();
        $this->currentDate = date('Y-m-d');
    }

    public function addTask($task,$finishDate){
        if($this->form->formValidation($task)){
            $db = \Core\App::resolve(Database::class);

            $finishDate = $_POST["finish_date"];
            $db->query("INSERT INTO todo (task,user_id,finished,date_created,finish_task) VALUES (:task,:user_id,:finished,:date_created,:finish_task)",[
                ':task' => $task,
                ':user_id' => $this->user['id'],
                ':finished' => 0,
                ':date_created' => $this->currentDate,
                ':finish_task' => $finishDate

            ]);
            return true;
        }
        return false;
    }

    public function getTasks(){
        $db = \Core\App::resolve(Database::class);

        return  $db->query("SELECT * FROM todo WHERE user_id =:user_id ORDER BY date_created DESC ",[
            ':user_id' => $this->user['id']
        ])->findAll();

    }

}
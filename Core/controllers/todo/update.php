<?php
use Core\App;
use Core\Database;


$db = App::resolve(Database::class);

$result = $db->query("UPDATE todo SET task = :task WHERE id = :id",[
    "id" => $_POST['task_id'],
    'task'=>$_POST['task']
]);

if (!$result) {
   throw new Exception("Error updating task");
}
redirect('/');
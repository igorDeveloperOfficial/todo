<?php

use Core\Database;
use Core\App;

$db = App::resolve(Database::class);
$date = date("Y-m-d");
 $result = $db->query("UPDATE todo SET finished = 1,finish_task = :date WHERE id = :id",[
    "id" => $_POST['id'],
     "date" => $date
]);

 show($result);
 redirect('/');


<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$result = $db->query("DELETE FROM todo WHERE id = :id",[
    "id" => $_GET['id']
]);

redirect("/");
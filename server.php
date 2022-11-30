<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: X-Requested-With");

$stringa_Convertita_Todo = file_get_contents('data.json');
$todo_List = json_decode($stringa_Convertita_Todo, true);

if (isset($_POST["newTask"])) {
    $newTask = $_POST["newTask"];
    $todo_List[] = [
        "text" => $newTask,
        "done" => true
    ];
    file_put_contents('data.json', json_encode($todo_List));
}

header('Content-Type: application/json');
echo json_encode($todo_List, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
<?php

require_once(__DIR__ . '/functions.php');

$database = file_get_contents(__DIR__ . '/todolist.json');
$todo_list = json_decode($database, true);

//check inputs from user and recall add function
if (isset($_POST['add'])) {
    $todo_list = addTodo($todo_list, $_POST);
}

//check inputs from user and recall remove function
if (isset($_POST['delete'])) {
    $todo_list  = deleteTodo($todo_list, $_POST['delete']);
}

//check inputs from user and recall edit function
if (isset($_POST['edit'])) {
    $todo_list  = editTodo($todo_list, $_POST['edit']);
}

header('Content-Type: application/json');
$result = json_encode($todo_list, true);
echo $result;

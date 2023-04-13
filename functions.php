<?php

//add new item to json list via php
function addTodo($todo_list, $params)
{
    $todo = [
        'text' => $params['newTodo'],
        'done' => false
    ];

    $todo_list[] = $todo;

    //save on json file
    file_put_contents(__DIR__ . '/todolist.json', json_encode($todo_list));

    return $todo_list;
}

//delete item to json list via php
function deleteTodo($todo_list, $index)
{

    unset($todo_list[$index]);

    //save on json file
    file_put_contents(__DIR__ . '/todolist.json', json_encode($todo_list));

    return $todo_list;
}

//edit item to json list via php
function editTodo($todo_list, $params)
{
    $index = $params['edit'];
    $todo_list[$index] = [
        'text' => $params['text'],
        'done' =>  false
    ];

    //save on json file
    file_put_contents(__DIR__ . '/todolist.json', json_encode($todo_list));

    return $todo_list;
}

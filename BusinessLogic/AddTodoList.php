<?php

function addTodoList(string $list)
{
    global $todolist;

    $number = sizeof($todolist) + 1;

    $todolist[$number] = $list;
}

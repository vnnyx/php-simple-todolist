<?php

require_once "../BusinessLogic/DeleteTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../Model/TodoList.php";

addTodoList("Belajar PHP Dasar");
addTodoList("Belajar PHP OOP");
addTodoList("Belajar PHP DATABASE");
showTodoList();
var_dump(deleteTodoList(3));
showTodoList();

<?php

require_once "../BusinessLogic/AddTodoList.php";
require_once "../Model/TodoList.php";


addTodoList("Belajar PHP");
addTodoList("Belajar GOLANG");

var_dump($todolist);

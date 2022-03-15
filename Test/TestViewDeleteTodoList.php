<?php

require_once "../View/ViewDeleteTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Belajar PHP");
addTodoList("Belajar GOLANG");

viewDeleteTodoList();
showTodoList();


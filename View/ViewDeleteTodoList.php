<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/DeleteTodoList.php";
require_once __DIR__ . "/../View/ViewShowTodoList.php";

function viewDeleteTodoList()
{
    echo "HAPUS TODO" . PHP_EOL;
    $pilihan = input("Nomor");

    if ($pilihan == "x"){
        echo "Batal melakukan hapus todo" . PHP_EOL;
        viewShowTodoList();
    }else{
        $success = deleteTodoList($pilihan);

        if ($success){
            echo "Sukses menghapus todo nomor $pilihan" . PHP_EOL;
        }else{
            echo "Gagal menghapus todo nomor $pilihan" . PHP_EOL;
        }
    }



}
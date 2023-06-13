<?php

header('Content-Type: application/json');


$todoList = file_get_contents("dati.json");
$todoListDati = json_decode($todoList, true);


if( isset($_POST['newTask']) ) {

    $todoListDati[] = [
        'name' => $_POST['newTask'],
        'status' => false
    ];
    file_put_contents("dati.json", json_encode($todoListDati) );

} else if ( isset($_POST['checkList']) ) {

    $index = $_POST['checkList'];

    $todoListDati[$index]['status'] = !$todoListDati[$index]['status'];

    file_put_contents("dati.json", json_encode($todoListDati) );

} else if ( isset($_POST['deleteTask'] )) {

    $index = $_POST['deleteTask'];

    array_splice( $todoListDati, $index, 1 );

    file_put_contents("dati.json", json_encode($todoListDati) );
}


$todoList = json_encode($todoListDati);
echo $todoList;

?>
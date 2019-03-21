<?php

include_once("db_conx.php");

if(isset($_POST['title']) && isset($_POST['desc']) && isset($_FILES['url'])){

    $query = "INSERT INTO products (";
    $query .= "title, description, url";
    $query .= ") VALUES(";
    $query .= "'{$_POST['title']}', '{$_POST['desc']}', '{$_FILES['url']['name']}'";
    $query .= ")";

    $result = mysqli_query($db_conx, $query);

    move_uploaded_file($_FILES['url']['tmp_name'],"uploads/".$_FILES['url']['name']);

}else{
    echo 'Parameter missing!';
}
<?php
// print_r($_POST);
include('conn.php');
$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];


    $updatequery =  "update usersb3 set name = '$name', age = '$age', gender = '$gender' WHERE id = '$id'";

    $result = mysqli_query($conn, $updatequery);
    if(!$result){
        die("query failed");
    } 
    header('location:http://localhost:82/2210B3/crud/allusers.php');

?> 
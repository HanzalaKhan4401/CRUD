<?php
include('conn.php');
$user_id = $_GET['id'];

$delete = "delete from usersb3 where id = '$user_id'";

$result1 = mysqli_query($conn,$delete);

if(!$result1){
    die("Query Failed");
}

header('location:http://localhost:82/2210B3/crud/delete.php')
?>
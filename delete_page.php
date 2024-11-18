<?php
include 'dbcon.php';
include 'header.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "delete from `students` where `id` = '$id'";
    $result = mysqli_query($connnection, $query);

    if(!$result){
        die("Query Failed" .mysqli_error());
    }else{
        header('location:index.php?delete_message=You have deleted the student successfully.');
    }

}
?>
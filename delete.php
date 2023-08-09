<?php
include'db_conn.php';
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    if(!empty($id)){
        $sql = "delete from users_table where id= $id";
        mysqli_query($conn,$sql);
        header('location:allusers.php');
    }else{
        header('location:allusers.php');
    }
    }else{
        header('location:allusers.php');

    }


?>
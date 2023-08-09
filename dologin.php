<?php
include_once 'db_conn.php';
session_start();
if(isset($_POST['email']) && isset($_POST['password'])){

    $email = $_POST['email'];
    $password = $_POST['password'];
    if(empty($email)||empty($password)){
        header('location:signin.php?please fill email and password');
        exit();
    }else{
        $sql = "select * from users_table where email = '$email'";
        $result = mysqli_query($conn,$sql);

        if (mysqli_num_rows($result)>0){
            header('location:signin.php?error=user does not exist');
        }else{
$row = mysqli_fetch_assoc($result);

if($row['email']===$email && $row['password']===$password){
    $_SESSION['email']=$row['email'];
    $_SESSION['id']=$row['id'];
    header('location:index.php');

}else{
    header('location:dologin.php?error=credentials not matched');

}
        }
    }
    }else{

        header('location:dologin.php');
    }
?>
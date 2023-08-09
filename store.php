<?php
include_once 'db_conn.php';
if(isset($_POST['submit'])){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    if ($email =='' || $password == ''){
        header('location:signup.php?error=please fill email and password');
exit();
    }else{
        $sql = "select * FROM users_table where email = '$email'";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)>0){
            header('location:store.php?error=user already exist');
            exit();
        }else{
            $insert = "insert into users_table (name, email, phone, password) values('$name', '$email', '$phone', '$password')";
            mysqli_query($conn,$insert);
            header('location:signin.php');
        }
    }
}else{
    header('location:signup.php');
    exit();
} 

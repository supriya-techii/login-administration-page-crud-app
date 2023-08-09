<?php
include_once 'db_conn.php';
session_start();
if(isset($_POST['email']) && isset($_POST['password'])){

 echo   $email = $_POST['email'];
 echo    $password = $_POST['password'];

    if(empty($email)||empty($password)){
        header('location:signin.php?please fill email and password');
        exit();
    }else{
       echo $sql = "select * from users_table where email = '$email'";
        $result = mysqli_query($conn,$sql);
        print_r($result);
     
        if (mysqli_num_rows($result)<1){
            header('location:signin.php?error=user does not exist');
        }else{
$row = mysqli_fetch_assoc($result);
print_r($row);

// echo $password;
// die();
if($row['email']==$email && $row['password']==$password){

  echo   $_SESSION['email']=$row['email'];
    echo $_SESSION['id']=$row['id'];
    // die();
    header('location:index.php');

}else{
    header('location:signin.php?error=credentials not matched');

}
        }
    }
    }else{

        header('location:signin.php?hjhj=jk');
    }
?>
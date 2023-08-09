<?php
include_once'db_conn.php';
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
echo $update = "update users_table set name='$name', email='$email', phone=$phone where id=$id";
$result = mysqli_query($conn,$update);
header('location:allusers.php');
}else{
    header('location:edituser.php');
 }
?>
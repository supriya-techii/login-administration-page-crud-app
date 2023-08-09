<?php

$servername = 'localhost';

$username = 'root';

$password = '';

$db_name = 'login_system';

$conn = mysqli_connect($servername, $username, $password, $db_name);

if(!$conn){
    echo "connection failed";
}else{
    echo "connection";
}
?>
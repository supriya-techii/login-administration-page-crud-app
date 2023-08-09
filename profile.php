<?php
include_once 'db_conn.php';
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['email'])){
$id = $_SESSION['id'];
 $sql = "select * from users_table where id ='$id'";
$result= mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
// print_r($result);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER PROFILE</title>
    <style>
        .main-container {
            background-color: aliceblue;
            box-shadow: 7px 7px #afadad;
            width: 70vw;
            margin-top: 10%;
            padding: 2%;
        }

        h1{
            background-color: black;
            color: white;
            margin:0 3%;
            height: 7vh;
        }

        p{
            padding-left: 3%;
            text-align: left;
        }
    </style>
</head>

<body>
    <center>
        <div class="main-container">
            <h1>User profile</h1>
            <p>Name <?php echo $row['name']?></p>
            <p>Email <?php echo $row['email']?></p>
            <p>Phone <?php echo $row['phone']?></p>
            
<p><a href="editprofile.php">Edit</a></p>
      
        </div>
    </center>
      
</body>
     
</html>
<?php
} 
?>
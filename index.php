<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['email'])){
   

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <center>
    
            <h1>Hello, <?php echo $_SESSION['email']; ?></h1>
<a href="logout.php" ><button>logout</button></a>
<a href="profile.php"><button >profile</button></a>
<a href="allusers.php"><button>all users</button></a>

    </center>
</body>

</html>

<?php
}else{
header('location:signin.php');
}
?>
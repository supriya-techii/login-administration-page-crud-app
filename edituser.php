<?php
include_once'db_conn.php';
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['email'])){
    echo $id= $_GET['id'];
    $sql = "SELECT * from users_table where id = ".$_GET['id'];
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    <html>
<head>
<title>
    Registration
</title>
<style>
                    body{
            background-color: rgb(122, 219, 219);

        }
        .main-container {
            height: 70vh;
            width: 80vw;
            background-color: rgb(66, 150, 150);
            border-radius: 2%;
        }

        h1 {
            padding: 3%;
            font-family: sans-serif;
            color: rgb(58, 58, 59);
        }

        input {
    margin: 0.2rem;
    border: none;
    height: 8vh;
    width: 60vw;
    background-color: #00fff3;
}

</style>
</head>
<body>
    <center>
    <div class="main-container">
    <div class="edit_user">

<form action="updateusers.php" method="post">
    <h1>Edit User</h1>
    <input type="hidden" name="id" value="<?php echo $row['id']?>" placeholder="Enter id" />
    <input type="text" name="name" value="<?php echo $row['name']?>" placeholder="Enter full name" />

    <input type="email" name="email" value="<?php echo $row['email']?>" placeholder="Enter email address" />

    <input type="text" name="phone" value="<?php echo $row['phone']?>" placeholder="Enter phone number" />


    <input type="submit" name="submit" value="submit"/>
    <div>
    </div>
    </center>
</body>

        </html>
        <?php
}else{
    header('location:signin.php');

}




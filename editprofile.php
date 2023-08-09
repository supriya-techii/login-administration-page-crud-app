<?php
include_once 'db_conn.php';
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
    $sql = "select * from users_table where id=" . $_SESSION['id'];
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    <html>

    <head>
        <title>Registration</title>
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

        input {
    margin: 0.1rem;
    border: none;
    height: 8vh;
    width: 60vw;
    background-color: #00fff3;
}


        </style>
    </head>
    <center></body>
    <form action="updateprofile.php" method="post" class="main-container">
        <h1>Update profile</h1>
        <div class="">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" placeholder="Enter full name" /></br>
            <input type="text" name="name" value="<?php echo $row['name']; ?>" placeholder="Enter full name" /></br></br>
        </div>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" placeholder="Enter email" /></br></br>
        <?php
        if (isset($_GET['error'])) {

            echo $_GET['error'];
        }
        ?>

        <input type="text" name="phone" value="<?php echo $row['phone']; ?>" placeholder="Enter phone number" /></br></br>
        <input type="submit" name="submit" value="submit" id="" /></br></br>

        </body></center>

    </html>
    <?php
} else {
    header('location:signin.php');
}
?>
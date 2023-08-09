<?php
include_once'db_conn.php';
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['email'])){
    $id=$_GET['id'];
    $sql = "select * from users_table where email='".$_SESSION['email']."'";
    $sql = "select * from users_table where id=$id";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <style>

                .container{
                    background-color: gray;
                    height: 25%;
                padding:1%;
                }

button{
            color:#7679990;
            font-size:large;
            background-color:#1ecd8b;
            border: none;
            border-radius: 10%;
            height:15%
        }

        p{
         font-family:sans-serif;
        }

                </style>
                </head>
                <body>
                   <center> <div class="container">
                        <p><button>User Profile</button></p>
                        <h1></h1>
                        <p class="">Name: <?php echo $row['name']?></p>
                        <p class="">Email: <?php echo $row['email']?></p>
                        <p class="">Phone: <?php echo $row['phone']?></p>
                    
</div></center>
</body>
</html>
<?php
}else{
    header('location:signin.php');
}
?>


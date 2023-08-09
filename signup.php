<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration page</title>
    <link rel="stylesheet" href="signup.css">
</head>

<body>
    <center>
        <div class="main-container">
        <form action="store.php" method="post">

            <h1>REGISTRATION</h1>
<?php
            if(isset($_GET['error'])){
echo$_GET['error'];
            }

            ?>
            <div class="registration-form">
                    <input type="text" placeholder="Enter full name" name="name"><br>
                    <input type="text" placeholder="Enter email" name="email">
                    <br>
                    <input type="text" placeholder="Phone number" name="phone">
                    <br>
                    <input type="password" placeholder="Enter Password" name="password"><br>
                    <button type="submit"  value="submit" class="button" name="submit">Login</button>

                </form>
            </div>
        </div>
    </center>
</body>

</html>
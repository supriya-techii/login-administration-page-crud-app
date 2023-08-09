<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in page</title>
    <style>
                body{
            background-color: rgb(122, 219, 219);

        }
            .main-container {
            height: 80vh;
            width: 65vw;
            background-color: rgb(66, 150, 150);
            border-radius: 2%;
        }

        h1 {
            padding: 3%;
            font-family: sans-serif;
            color: rgb(58, 58, 59);
            text-align: center;
        }
        
        p{
            text-align: left;
            padding-left: 3.5%;
            font-size: 120%;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        input {
            margin: 0.1rem;
            border: none;
            height: 8vh;
            width: 60vw;
        }

        button {
            margin-top: 2%;
            border: none;
            height: 8vh;
            font-size: 1em;
            width: auto;
            background-color: rgb(45, 214, 158);
            color: black;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri,
        }

        ::placeholder {
            color: black;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 120%;
        }

        .button:hover{
            background-color: rgb(16, 192, 133);
        }



    </style>
</head>
<body>
   <center> <div class="main-container">
<h1>LOGIN</h1>
<P>Email</P>
<div class="registration-form">
<form action="dologinnew.php" method="post">
        <input type="text" id="email" placeholder="Enter your Email" name="email">
        <P>Password</P>
        <input type="password" placeholder="Enter your Password" name="password">
        
        <button type="submit"  name="submit">Registration</button>
    </form>
</div>
    </div>
</center>
</body>
</html>
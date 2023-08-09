<?php
include_once'db_conn.php';
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['email'])){
    $sql = "select * from users_table where id!=".$_SESSION['id'];
    $result= mysqli_query($conn,$sql);

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dash board</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding-left: 1%;
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        
        }

        thead {
            height: 10vh;
        }

        table {
            height: 70vh;
            width: 90vw;
            margin: 8px;

        }

        a{
            text-decoration: none;
            color:black;
            font-size:large;
            background-color:#d30af7 ;
            margin: 8px;
            width: 10px;
        }


        input {
    margin: 0.2rem;
    border: none;
    height: 6vh;
    width: 6vw;
    background-color: #1169ed;
}
 
    </style>
</head>

<body>
    <center><table>
        <thead>
            <tr>
                <th>SR No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>

                </tr>
                </thead>

            <?php
$i=0;
while($row=mysqli_fetch_assoc($result)){
?>
<tr>
        <td><?php echo ++$i  ?></td>
     <!--   <td><?php echo $row['id'];  ?></td>  -->
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['phone'];?></td>
<td></center>
<a href = "edituser.php?id=<?php echo $row['id']; ?>">Edit</a>

<a href="showuser.php?id=<?php echo $row['id']; ?>">Show</a>
<form action="delete.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
    <input type="submit" id="delete" name="submit" value="Delete">
</form>
</td>
</tr>
<?php
}
?>
    <a href="index.php">BACK</a>

    <?php
}else{
header('location:signin.php');
}
    ?>
</body>

</html>
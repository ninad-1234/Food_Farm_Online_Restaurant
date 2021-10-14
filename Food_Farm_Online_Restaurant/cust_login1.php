<?php
session_start();
?>

<?php

$username=filter_input(INPUT_POST,'uname');
$password=filter_input(INPUT_POST,'psw');
$_SESSION["uname"] = $username;
$_SESSION["psw"] =$password ;


$conn=new mysqli('localhost','root','','hotel');

$result=mysqli_query($conn,"select * from  cust_login where username='$username' and password='$password'");
$row=mysqli_fetch_array($result);
if($row==FALSE)
{
    echo "not exist";
    ?>
    <a href="login.html">retry </a>
    
    <?php
}
else
{?>

   <?php
    header('Location:finalhome.php');
    ?>

    <?php
}
?>


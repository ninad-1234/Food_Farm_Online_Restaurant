<?php
session_start();
?>

<?php
$username= $_SESSION["uname"] ;
$password= $_SESSION["psw"];
?>

<?php

$dish=filter_input(INPUT_POST,'dish');

$conn=new mysqli('localhost','root','','hotel');

$flag=0;

$result1=mysqli_query($conn,"SELECT * from basket where username='$username'");

while($rows=mysqli_fetch_assoc($result1))
{
    $check=$rows['dish'];
    if($check==$dish)
    {
        $flag=1;
    break;
    }
}
if($flag==0)
{

$result=mysqli_query($conn,"INSERT INTO basket(username,dish) VALUES('$username','$dish')");
}


header('Location:finalhome.php');





?>
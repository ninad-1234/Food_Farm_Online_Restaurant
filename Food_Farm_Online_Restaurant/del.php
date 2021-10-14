<?php
session_start();
?>

<?php
$username= $_SESSION["uname"] ;
$password= $_SESSION["psw"];
?>

<?php
$conn=new mysqli('localhost','root','','hotel');

$deld=filter_input(INPUT_POST,'dish');

$resultd=mysqli_query($conn,"DELETE  from basket where dish='$deld' and username= '$username'");

header('Location:view_basket.php');

?>
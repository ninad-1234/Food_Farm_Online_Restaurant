<?php
session_start();
$conn=new mysqli('localhost','root','','hotel');
?>

<?php
$username= $_SESSION["uname"] ;
$password= $_SESSION["psw"];
$mail=mysqli_query($conn,"SELECT email from cust_login where username='$username'");
$mail_data=mysqli_fetch_assoc($mail);
$email=$mail_data['email'];
$_SESSION['email']=$email;
?>

<?php
$cnt= $_POST['fqty'];
$i=0;


$result=mysqli_query($conn,"SELECT DISTINCT dish from basket where username='$username'");
?>
<html>


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JavaScript scratch card Example</title>


	<!-- Demo CSS -->
	<link rel="stylesheet" href="scratch-card-javascript-html5/css/demo.css">
    <style>
        .card{
         width: 300px;
         height: 60px;
         position: relative;
         box-shadow: 1px 2px 6px rgba(0, 0, 0, 0.2);
        margin: 10px auto;
        }    
        
      .base, #scratch {
        cursor: default;
        height: 60px;
        width: 300px;
          position: absolute;
          top: 0;
          left: 0;
          cursor: grabbing;
      }
      .base {
        line-height: 60px;
        text-align: center;
      }
      #scratch {
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0); 
        -webkit-touch-callout: none;
        -webkit-user-select: none;
      }
    </style>
    
</head>

<body>
<div id="tit" style=" background-color: black;font-size: 36px;height:60px; ">
<b  style="color: yellow; margin-left:2px; ">Food</b> 
<b style="color: #41f804; padding-left:0px;">Farm</b>
<b style="margin-left:350px; color:white;">Your&nbsp;&nbsp;&nbsp;Bill</b>
</div>
<div style="background: rgba(255, 255, 0, 0.527); margin-left:90px;margin-right:90px;">
<table style="margin-top:30px;   margin-left:350px; width:50%;font-weight: 900; ">
<tr style="font-size:25px; color:rgba(255, 0, 0, 0.89); font-weight: 900; padding-left:5px;">

<td>Dish</td>
<td>Cost</td>
<td></td>
<td>Quantity</td>
<td>Total</td>

</tr>

<?php

$f_b=0;
$c=0;
while($rows=mysqli_fetch_assoc($result))
{
    ?>
    <tr style="height:60px;">
    <?php
    
    $dish=$rows['dish'];
    $_SESSION['dish'.$c]=$dish;
    $result1=mysqli_query($conn,"SELECT * FROM dish_pic where dish_name='$dish'");
    $rows1=mysqli_fetch_array($result1);
    ?>
    <td>
    <?php echo $rows1['dish_name']."   ";?></td>
   <td> <b>&#8377;<?php echo $rows1['price']."  ";?></b></td>
    <?php
    $sr='qty'.$i;
    
    $adde=$_POST[$sr];
    $_SESSION['qty'.$c]=$adde;
    $_SESSION['prc'.$c]=$rows1['price'];
    ?>
    <td>&#10006;</td>
    <td style="padding-left:20px;"><?php echo $adde."<br>";?></td>
    <td><b>&#8377;<?php  $amt=$adde*$rows1['price']; echo $amt;  ?></b></td>
    <?php
    $i=$i+1;
    $f_b=$f_b+$amt;
    ?>
</tr>
    <?php
    $c=$c+1;
}
$_SESSION['cnt']=$c;
for($i=0;$i<$c;$i++)
{
  //  echo "hiii session var".$_SESSION['dish'.$i].".<br>";
    //echo "qty session".$_SESSION['qty'.$i]."<br>";
}
?>
</table>
<div style="padding-top:40px; margin-left:750px; padding-bottom:30px;
font-size:37px; font-weight: 900; "  >
<?php  $_SESSION["amt"]= $f_b ;?>
Amount to pay :- &nbsp; &nbsp;  <b>&#8377;</b><?php echo $f_b; ?>&nbsp; &nbsp;Only
<button type="button" 
onclick="location.href='Payment.php'" 
 style="background-color: rgba(190, 32, 21, 0.767); color:white; width:230px; height:50px; 
 font-size:21px; font-weight:bold; margin-top:20px; ">Pay Now</button>

<button type="button" 
onclick="location.href='view_basket.php'" 
 style="background-color: rgba(190, 32, 21, 0.767); color:white; width:230px; height:50px; 
 font-size:21px; font-weight:bold; margin-top:20px; ">Cancel</button>
</div>
</div>

<main>
 <article>
 <b>Scratch Card</b>
    <div class="card" style="margin-top:10px;">
      <?php  $dis=rand(1,10);
      $_SESSION['dis']=$dis;  ?>
      
    <div class="base">Coupon Code:<?php echo $dis;?> % discount</div>
    <canvas id="scratch" width="300" height="60"></canvas>
    </div>

    </article>
</main>


<!-- scratch-card-with-canvas JS -->
<script src="scratch-card-javascript-html5/js/scratch-card.js"></script>

</body>
</html>

<?php





require 'phpmailer/PHPMailerAutoload.php';
$mail =new PHPMailer;
$mail ->isSMTP();

$mail ->Host='smtp.gmail.com';
$mail ->Port=587;
$mail ->SMTPAuth=true;
$mail ->SmTPSecure= 'tls';

$mail ->Username= 'foodfarm2412@gmail.com';
$mail ->Password= 'Foodfarm@1234';

$mail ->setFrom('foodfarm2412@gmail.com','FoodFarm');
$mail ->addAddress($email);
$mail ->addReplyTo('foodfarm2412@gmail.com');

$mail ->isHTML(true);
$mail ->Subject= 'Order Placed';
$mail ->Body=
"<h1>Thanks for Chossing us as your Food partner</h1>".
"<br>".
"<h3>You will definitely enjoy our food <b>$username</b></h3>".
"<br>".
"<h3>Your amout to paid is :- </h3>"."<h3>&#8377;<b>$f_b</b>* excluding 2% CGST </h3>".
"<h3>Special discount only for you</h3>"."<b>$dis %</b>".
"<br>".
"<h3><b>For any query contact 7066196933</b></h3>"


;








if(!$mail ->send()){

    echo " not sent";    
}
else{
  //  echo "sent";
}





?>
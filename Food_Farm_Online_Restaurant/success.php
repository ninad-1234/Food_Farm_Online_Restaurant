<?php
session_start();
$email=$_SESSION['email'];
?>
<style>
    .payment
    {
        display: block;
        position: absolute;
        animation: linear infinite alternate;
        animation-name: run;
        animation-duration: 8s;
    }

    @-webkit-keyframes run {
        0% {
        left: 0;
        transform: translateX(0);
        }
        100% {
        left: 100%;
        transform: translateX(-100%);
        }
    }
    .btn 
    {
        background-color: brown;
        color: white;
        padding: 12px;
        margin:  560px;
        border: none;
        width: 150px;
        border-radius: 3px;
        cursor: pointer;
        font-size: 17px;
    }
</style>
<body style="background: lightgreen;">

<div id="tit" style=" background-color: black;font-size: 36px;height:60px; ">
<b  style="color: yellow; margin-left:2px; ">Food</b> 
<b style="color: #41f804; padding-left:0px;">Farm</b>
<b style="margin-left:350px; color:white;">Thank &nbsp;&nbsp;You</b>
</div>

<div class="payment" style="background-color: yellow; color: brown; margin: 200px; width: 500px; height:200px;">
    <?php
    if(isset($_POST['submitted']))
    {
        echo '<h1 style="padding:85px;">Payment Successfull!!!<//h1>';
    }
    ?>
</div>
<form method="post" action="invoice.php">
    <input type="hidden" name="address" value="<?php echo $_POST['address'] ?>">
    <input type="hidden" name="utensils" value="<?php echo $_POST['utensils'] ?>">
    <input type="submit" class="btn" value="Generate Invoice" name="submit">
</form>
</body>
<?php

$amount=$_SESSION["amt"]*(1-0.01*($_SESSION['dis']));
$username=$_SESSION['f_name'];

?>

<?php





require 'phpmailer/PHPMailerAutoload.php';
$mail =new PHPMailer;
$mail ->isSMTP();

$mail ->Host='smtp.gmail.com';
$mail ->Port=587;
$mail ->SMTPAuth=true;
$mail ->SmTPSecure= 'tls';

$mail ->Username= 'foodfarm2412@gmail.com';
$mail ->Password= 'iwpres1#';

$mail ->setFrom('foodfarm2412@gmail.com','FoodFarm');
$mail ->addAddress($email);
$mail ->addReplyTo('foodfarm2412@gmail.com');

$mail ->isHTML(true);
$mail ->Subject= 'Payment success';
$mail ->Body=
"<h1>Thanks for Chossing us as your Food partner</h1>".
"<br>".
"<h3>You will definitely enjoy our food <b>$username</b></h3>".
"<br>".
"<h3>Aount paid successfully:  </h3>"."<h3>&#8377;<b>$amount</b></h3>".
"<br>".
"<h3><b>For any query contact 7066196933</b></h3>".

"<h3>Visit again !! <b>we are waiting</b></h3>"


;








if(!$mail ->send()){

    echo " not sent";    
}
else{
   // echo "sent";
}





?>
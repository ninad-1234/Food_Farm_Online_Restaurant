<?php
$email=filter_input(INPUT_POST,'email');
$query=filter_input(INPUT_POST,'query');
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
$mail ->Subject= 'Your query';
$mail ->Body=
"<h1>We will work on your query</h1>".
"<br>".
"<h3>This is your query:-"."<h3><b>$query</b></h3>".
"<br>".
"<h3><b>For any query contact 7066196933</b></h3>";



if(!$mail ->send()){

    echo " not sent";    
}
else{
    echo "sent";
}

    header('Location:before_login_home.php');
    


?>
<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JavaScript scratch card Example</title>


	<!-- Demo CSS -->
	<link rel="stylesheet" href="css/demo.css">
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
<main>
 <article>
    <div class="card">
      <?php  $dis=rand(1,10);
      $_SESSION['dis']=$dis;  ?>
    <div class="base">Coupon Code:<?php echo $dis;?> % discount</div>
    <canvas id="scratch" width="300" height="60"></canvas>
    </div>

    </article>
</main>


<!-- scratch-card-with-canvas JS -->
<script src="js/scratch-card.js"></script>
     
 </body>
</html>
<?php
  session_start();
  $username= $_SESSION["uname"] ;
?>

<?php  

$conn=new mysqli('localhost','root','','hotel');

$result=mysqli_query($conn,"SELECT *  from cust_login where username='$username'");
$rows=mysqli_fetch_assoc($result);

//echo $rows['f_name'];

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="pstyle.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  
}

* {
  box-sizing: border-box;
}

.col2,
.col3 {
  padding: 0 18px;
} 

.background {
  background-color: #f2f2f2;
  padding: 0px 20px 15px 20px;
  border-radius: 3px;
}

input[type=text] {
  width: 600px;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

input[type=password] {
  width: 600px;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

input[type=email] {
  width: 600px;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

.month 
{
  width: 180px;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

.year
{
  width: 180px;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.cards {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

</style>

<script>
    function checkForm(form)
    {
      if(form.password.value.length != 3) 
      {
          alert("Error: CVV must contain three digits!");
          form.password.focus();
          return false;
      }
      if(form.ccnum.value.length != 19) 
      {
          alert("Error: Card Number must contain 16 digits separated by space!");
          form.password.focus();
          return false;
      }
    }
</script>
</head>
<body>
<div id="tit" style=" background-color: black;font-size: 36px;height:60px; ">
<b  style="color: yellow; margin-left:2px; ">Food</b> 
<b style="color: #41f804; padding-left:0px;">Farm</b>
<b style="margin-left:350px; color:white;">Payment&nbsp;&nbsp;&nbsp;Portal</b>
</div>
<div class="row">
  <div class="col3">
    <div class="background">
      <form action="success.php" method="post" class="payment-form" style="width: 700px; margin-top:10px;" onSubmit = "return checkForm(this)">
        <div class="row">
          <div class="col2">
            <?php $_SESSION['f_name']= $rows['f_name'];
            $_SESSION['l_name']=$rows['l_name'];
            $_SESSION['email']=$rows['email'];
            ?>
            <h3>Billing Details</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name:- &nbsp;&nbsp;&nbsp;&nbsp;    <?php   echo $rows['f_name']."  ".$rows['l_name'];  ?></label>
            <br>
            <label for="email"><i class="fa fa-envelope"></i> Email:-&nbsp;&nbsp;&nbsp;&nbsp;   <?php  echo $rows['email'] ?></label>
            <br>
            <label for="adr"><i class="fa fa-address-card-o"></i> Delivery Location</label>
            
            <textArea id="adr" rows="4" cols="80" name="address" placeholder="Your Address" required></textArea>
          </div>

          <div class="col2">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="cards">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-credit-card" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-credit-card-alt" style="color:orange;"></i>
            </div>
            <table>
              <tr>
                <td><label><input type="radio" name="ccard" value="Credit"/>Credit</label></td><td></td>
                <td><label><input type="radio" name="ccard" value="Debit"/>Debit</label></td>
              </tr>
            </table>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="ABC XYZ EFG" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111 2222 3333 4444" required>
            <table>
              <tr>
                <td><label for="ctype">Card Types</label></td>
              </tr>
              <tr>
                <td><label><input type="radio" name="ctype" value="VISA"/>VISA</label></td><td></td>
                <td><label><input type="radio" name="ctype" value="Master Card"/>Master Card</label></td><td></td>
                <td><label><input type="radio" name="ctype" value="RuPay"/>RuPay</label></td>
              </tr>
            </table><br>
            <?php $_SESSION["sub_amt"]=$_SESSION["amt"]; ?>
            <?php  $_SESSION["amt"]=$_SESSION["amt"]*(1.02);  ?>
            <label for="amt">Amount (*included 2% GST and discount <?php echo $_SESSION['dis']; ?> %) :- &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &#8377;  <?php  echo  $_SESSION["amt"]*(1-0.01*($_SESSION['dis'])); ?></label>
            <table>
              <tr>
              <td><label for="month">Month of Expiry</label>
              <select class="month" id="month" name="month">
              <option value="01">01</option>
              <option value="02">02</option>
              <option value="03">03</option>
              <option value="04">04</option>
              <option value="05">05</option>
              <option value="06">06</option>
              <option value="07">07</option>
              <option value="08">08</option>
              <option value="09">09</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select></td>
            <td> / </td>
            <td>
            <label for="year">Year of Expiry</label>
            <select class="year" id="year" name="year">
              <option value="2020">2020</option>
              <option value="2021">2021</option>
              <option value="2022">2022</option>
              <option value="2023">2023</option>
              <option value="2024">2024</option>
              <option value="2025">2025</option>
              <option value="2026">2026</option>
              <option value="2027">2027</option>
              <option value="2028">2028</option>
              <option value="2029">2029</option>
              <option value="2030">2030</option>
              <option value="2031">2031</option>
            </select>
            </td></tr></table>
            <label for="cvv">CVV</label>
            <input type="password" id="password" name="password" placeholder="xxx" required>
            <label for="utensils">**Do you want to make use of reusable utensils**
            <input type="radio" name="utensils" value="Yes">Yes
            <input type="radio" name="utensils" value="No">No</label>
          </div>        
        </div>
        <input type="submit" name="submitted" value="Continue payment" class="btn">
      </form>
    </div>
  </div>
</div>

</body>
</html>

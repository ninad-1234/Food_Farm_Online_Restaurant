<?php
session_start();
?>

<?php
$username= $_SESSION["uname"] ;
$password= $_SESSION["psw"];
?>

<?php

$conn=new mysqli('localhost','root','','hotel');

$result=mysqli_query($conn,"SELECT DISTINCT dish from basket where username='$username'");

//while($rows=mysqli_fetch_assoc($result))
//{
  //  echo $rows['dish']."<br>";
//}

$cnt=0;
?>
<html>
    
        <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <style>

      /* -- quantity box -- */

.quantity {
 display: inline-block; }

.quantity .input-text.qty {
 width: 35px;
 height: 39px;
 padding: 0 5px;
 text-align: center;
 background-color: transparent;
 border: 1px solid #efefef;
 font-size:15px;
 font-weight:bold;
}

.quantity.buttons_added {
 text-align: left;
 position: relative;
 white-space: nowrap;
 vertical-align: top; }

.quantity.buttons_added input {
 display: inline-block;
 margin: 0;
 vertical-align: top;
 box-shadow: none;
}

.quantity.buttons_added .minus,
.quantity.buttons_added .plus {
 padding: 7px 10px 8px;
 height: 41px;
 background-color: #ffffff;
 border: 1px solid #efefef;
 font-size:15px;
 font-weight:bold;

 cursor:pointer;}

.quantity.buttons_added .minus {
 border-right: 0; }

.quantity.buttons_added .plus {
 border-left: 0; }

.quantity.buttons_added .minus:hover,
.quantity.buttons_added .plus:hover {
 background: #eeeeee; }

.quantity input::-webkit-outer-spin-button,
.quantity input::-webkit-inner-spin-button {
 -webkit-appearance: none;
 -moz-appearance: none;
 margin: 0; }
 
 .quantity.buttons_added .minus:focus,
.quantity.buttons_added .plus:focus {
 outline: none; }


    </style>
    <script>

      function wcqib_refresh_quantity_increments() {
          jQuery("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").each(function(a, b) {
              var c = jQuery(b);
              c.addClass("buttons_added"), c.children().first().before('<input type="button" value="-" class="minus" />'), c.children().last().after('<input type="button" value="+" class="plus" />')
          })
      }
      String.prototype.getDecimals || (String.prototype.getDecimals = function() {
          var a = this,
              b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
          return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0
      }), jQuery(document).ready(function() {
          wcqib_refresh_quantity_increments()
      }), jQuery(document).on("updated_wc_div", function() {
          wcqib_refresh_quantity_increments()
      }), jQuery(document).on("click", ".plus, .minus", function() {
          var a = jQuery(this).closest(".quantity").find(".qty"),
              b = parseFloat(a.val()),
              c = parseFloat(a.attr("max")),
              d = parseFloat(a.attr("min")),
              e = a.attr("step");
          b && "" !== b && "NaN" !== b || (b = 0), "" !== c && "NaN" !== c || (c = ""), "" !== d && "NaN" !== d || (d = 0), "any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e) || (e = 1), jQuery(this).is(".plus") ? c && b >= c ? a.val(c) : a.val((b + parseFloat(e)).toFixed(e.getDecimals())) : d && b <= d ? a.val(d) : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())), a.trigger("change")
      });
      </script>

      <script>

      function del_it(dish,no)
      {
          alert(dish+no);
        document.getElementById("dish"+no).value=dish;
      }


function add(cnt)
{
    var v= document.getElementById("quantity"+cnt).value;
    document.getElementById("qty"+cnt).value=parseInt(v)+1;
}

function sub(cnt)
{
    var v= document.getElementById("quantity"+cnt).value;
    document.getElementById("qty"+cnt).value=parseInt(v)-1;
}

</script>

</head>
<body style="background-color: rgba(150, 73, 18, 0.664);">   


<div id="tit" style=" background-color: black;font-size: 36px; ">
<b  style="color: yellow; margin-left:2px; ">Food</b> 
<b style="color: #41f804; padding-left:0px;">Farm</b>
<b style="margin-left:350px; color:white;">Your&nbsp;&nbsp;&nbsp;Cart</b>

</div>
<table style="margin-top:20px;  background: rgba(255, 255, 0, 0.527); width:100%; ">
<tr style="font-size:25px; color:rgba(255, 0, 0, 0.89); font-weight: 900; padding-left:5px;">
<td>
Dish Name
</td>
<td>
Price
</td>
<td>
<b style="margin-left:45px;">View Dish</b>
</td>
<td>
Quantity
</td>
<td>
</td>
</tr>
    <?php
while($rows=mysqli_fetch_assoc($result))
{
    //echo "cnt value is ".$cnt;
    ?>
    <form method="post" action="del.php" id="form<?php echo $cnt; ?>">
    <tr style="font-size:20px; " >
        <?php
        
    $dish=$rows['dish'];
    
    $result1=mysqli_query($conn,"SELECT * FROM dish_pic where dish_name='$dish' ");

    $rows1=mysqli_fetch_array($result1)
    
        ?>
    <td > 
        <?php echo $rows1['dish_name']; ?>
    </td>
    <td> 
       <b>&#8377; <?php echo $rows1['price']; ?></b>
    </td>
    <td> 
    <img src="data:image/jpeg;base64,<?php echo base64_encode( $rows1['img1'] ); ?>" style="padding:8px; width:200px; height:150px;">
    </td>
    <td>
    <div class="quantity buttons_added">
    <input type="button" value="-" class="minus" onclick="sub('<?php echo $cnt ?>')">
  <input type="number" step="1" min="1" max="" name="quantity<?php echo $cnt; ?>" id="quantity<?php echo $cnt; ?>" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
 
  <input type="button" value="+" class="plus" onclick="add('<?php echo $cnt ?>')"></div>
  
</td>
<td>

   
  <button type="submit" style="font-size:24px"  name="sub1" onclick="del_it('<?php echo $dish; ?>','<?php echo $cnt; ?>')"> <i class="fa fa-trash-o"></i></button>
  <input type="hidden" name="dish" id="dish<?php echo $cnt; ?>" />

</td>
</tr>
</form>
    
    <?php $cnt=$cnt+1;  ?>
  
    

    
<?php
}
?>
 
 </table>
<form method="post" action="view_order.php" id="view">
    <?php 
    $fcnt=$cnt;
    for($i=0;$i<$cnt;$i++)
    {
       // echo $cnt;
       ?> 
    <input type="hidden" step="1" min="1" max="" name="qty<?php echo $i;?>" id="qty<?php echo $i;?>">
    <?php
    }
    ?>
    <script>
        function f_cnt()
        {
           
        document.getElementById("fqty").value=<?php echo $fcnt; ?>;
        }
        </script>
        <div style="background: rgba(255, 255, 0, 0.527); padding-top:40px; padding-bottom:20px;">
    <input type="hidden"  name="fqty" id="fqty">
 <input type="submit" step="1" min="1" max=""  value="Confirm Order" onmouseover="f_cnt()" style="background-color: rgba(190, 32, 21, 0.767); color:white; width:230px; height:50px; 
 font-size:21px; font-weight:bold; margin-left:150px;">

<button type="button" 
onclick="location.href='finalhome.php'" 
 style="background-color: rgba(190, 32, 21, 0.767); color:white; width:230px; height:50px; 
 font-size:21px; font-weight:bold; margin-left:150px;">Add More dishes</button>
</div>
</form>


    




</body>
</html>

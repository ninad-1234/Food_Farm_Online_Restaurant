
<!DOCTYPE html>
<html>
<head>
  <script>
    function loadform(x) 
    {
        if(x=='1')
        {
            document.getElementById('help-page').style.visibility='visible';
        }
        else if(x=='2')
        {
            document.getElementById('help-page').style.visibility='hidden';
        }
    }
</script>


  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="styles2.css">
  <link rel="stylesheet" href="styles3.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <style>
* 
{
    box-sizing: border-box
}
body
{
    font-family: Verdana, sans-serif; 
    background-color: rgba(150, 73, 18, 0.664);
}
/* .mySlides 
{
  display: none
} */
img 
{
  vertical-align: middle;
}

/* Slideshow container */
.slideshow-container 
{
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next 
{
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 1 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover 
{
  background-color: rgba(0,0,0,0.8);
}

/* The dots/bullets/indicators */
.dot 
{
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover 
{
  background-color: #717171;
}


.slideshow-container .btn {
  position: absolute;
  top: 90%;
  left: 45%;
  background-color: rgba(190, 32, 21, 0.767);
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 8px;
  text-align: center;
}

.zoom {
  transition: transform .2s;
  margin: 0 auto;
  background: white;
}

.zoom:hover {
  -ms-transform: scale(1.1); 
  -webkit-transform: scale(1.1);
  transform: scale(1.1); 
}

.items
{
  background: rgba(255, 255, 0, 0.527);
}

.form-popup {
  display: none;
  position: fixed;
  bottom: 175px;
  right: 195px;
  border: none;
  z-index: 9;
  background-color: rgba(150, 73, 18, 0.664);
  height: 290px;
}

.form-container {
  max-width: 300px;
  padding: 10px;
  color: white;
}

.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}





/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}



</style>
</head>
<body>

<!-- For Navbar -->

<div class = "navbar">
<a href = "login.html">Login</a>
  <a href = "#contact">Contact</a>

  <a href = "">Team</a>

  <a href="login.html">View Cart</a>


  <a href = "">Menu Card</a>

  <div class="dropdown">
    <button class="dropbtn">View Dishes
    </button>
    <div class="dropdown-content">
      <table>
        <tr>
          <td><a href="#indian">Indian</a></td>
          <td><a href="#italian">Italian</a></td>
          <td><a href="#mexican">Mexican</a></td>
          </tr>
        <tr>
          <td><a href="#mughlai">Mughlai</a></td>
          <td><a href="#continental">Continental</a></td>
          <td><a href="#healthy">Extraordinary Dishes</a></td>
        </tr>     
      </table>
    </div>
  </div> 
  <a href = "before_login_home.php">Home</a>
  <h1><b  style="color: yellow; margin-left:2px;">Food</b> <b style="color: #41f804; padding-left:0px;">Farm</b></h1>

</div>
<br><br><br><h1 align="center">Welcome </h1><br>
<h2 style="margin-left:730px;padding-bottom:10px; color:white;"> see your favourite dishes</h2>



<!-- For SlideBar -->
<div class="slideshow-container">

<div class="mySlides fade">
<img src="food_pics/vada-pav.jpg"style="width:1000px; height: 500px;">
 <button class="btn" onclick="location.href = 'login.html';">Order Now</button>
</div>

<div class="mySlides fade">
<img src="food_pics/south indian lemon rice.jpeg"style="width:1000px; height: 500px;">
  <button class="btn" onclick="location.href = 'login.html';">Order Now</button>
</div>

<div class="mySlides fade">
<img src="food_pics/Eggplant(Baingan Bharta).jpg"style="width:1000px; height: 500px;">
  <button class="btn" onclick="location.href = 'login.html';">Order Now</button>
</div>

<div class="mySlides fade">
<img src="food_pics/mutter paneer.jpg"style="width:1000px; height: 500px;">
  <button class="btn" onclick="location.href = 'login.html';" >Order Now</button>
</div>

<div class="mySlides fade">
<img src="food_pics/fish curry(masor tenga).jpg"style="width:1000px; height: 500px;">
  <button class="btn" onclick="location.href = 'login.html';">Order Now</button>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) 
{
  showSlides(slideIndex += n);
}

function currentSlide(n) 
{
  showSlides(slideIndex = n);
}

function showSlides(n) 
{
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) 
  {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<br><br>
<!-- For Items -->
<div class="items" id="indian">
  <br>
  <center><h1 style="color: rgba(255, 0, 0, 0.74);">Indian Cuisine</h1></center><br><br>
<table>
  <tr>
    <td></td><td></td><td></td>
    <form action="login.html">
        
      <td class="zoom" style="text-align: center;"><img src="food_pics/vada-pav.jpg" alt="" style="width: 450px; height: 250px;">
        <br><b>Vada Pav</b>
        <br>&#8377;150<br>
        <button type="submit" class="dish"  value="Submit" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;" onclick="alert('login first') " >Add to Bowl</button></td><td></td><td></td><td></td><td></td>
</form>

        <td class="zoom" style="text-align: center;"><img src="food_pics/south indian lemon rice.jpeg" alt="" style="width: 450px; height: 250px;">
        <br><b>South Indian Lemon Rice</b>
        <br>&#8377;120<br>
        <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>

        <td class="zoom" style="text-align: center;"><img src="food_pics/Lentil Dal.jpeg" alt="" style="width: 450px; height: 250px;">
        <br><b>Lentil Dal</b>
        <br>&#8377;125<br>
        <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 490px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
    </tr> 
    <tr>
      <td></td><td></td><td></td>
    <td class="zoom" style="text-align: center;"><img src="food_pics/Eggplant(Baingan Bharta).jpg" alt="" style="width: 500px; height: 300px;">
      <br><b>Eggplant(Baingan Bharta)</b>
      <br>&#8377;80<br>
      <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
    <td class="zoom" style="text-align: center;"><img src="food_pics/palak paneer.jpg" alt="" style="width: 500px; height: 300px;">
      <br><b>Palak paneer</b>
      <br>&#8377;250<br>
      <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
    <td class="zoom" style="text-align: center;"><img src="food_pics/mutter paneer.jpg" alt="" style="width: 490px; height: 300px;">
      <br><b>Mutter paneer</b>
      <br>&#8377;250<br>
      <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 490px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
  </tr>
  <tr>
    <td></td><td></td><td></td>
    <td class="zoom" style="text-align: center;"><img src="food_pics/fish curry(masor tenga).jpg" alt="" style="width: 500px; height: 300px;">
      <br><b>Fish Curry (Masor Tenga)</b>
      <br>&#8377;250<br>
      <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
    <td class="zoom" style="text-align: center;"><img src="food_pics/butter chicken.jpg" alt="" style="width: 500px; height: 300px;">
      <br><b>Butter Chicken</b>
      <br>&#8377;400<br>
      <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
    <td class="zoom" style="text-align: center;"><img src="food_pics/kheer.jpg" alt="" style="width: 490px; height: 300px;">
      <br><b>Kheer</b>
      <br>&#8377;150<br>
      <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 490px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
  </tr>
</table>
</div>

<div class="items" id="italian">
<br>
  <center><h1 style="color: rgba(0, 119, 255, 0.795);">Italian Cuisine</h1></center><br>
<table>
  <tr>
    <td></td><td></td><td></td>
      <td class="zoom" style="text-align: center;"><img src="food_pics/Caprese Salad with Pesto Sauce.jpg" alt="" style="width: 500px; height: 300px;">
        <br><b>Caprese Salad with Pesto Sauce</b>
        <br>&#8377;150<br>
        <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
      <td class="zoom" style="text-align: center;"><img src="food_pics/Bruschetta.jpg" alt="" style="width: 500px; height: 300px;">
        <br><b>Bruschetta</b>
        <br>&#8377;120<br>
        <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
      <td class="zoom" style="text-align: center;"><img src="food_pics/Lasagne.jpg" alt="" style="width: 490px; height: 300px;">
        <br><b>Lasagne</b>
        <br>&#8377;125<br>
        <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 490px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
    </tr> 
    <tr>
      <td></td><td></td><td></td>
    <td class="zoom" style="text-align: center;"><img src="food_pics/Margherita Pizza.jpg" alt="" style="width: 500px; height: 300px;">
      <br><b>Margherita Pizza</b>
      <br>&#8377;80<br>
      <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
    <td class="zoom" style="text-align: center;"><img src="food_pics/Pasta Carbonara.jpg" alt="" style="width: 500px; height: 300px;">
      <br><b>Pasta Carbonara</b>
      <br>&#8377;250<br>
      <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
    <td class="zoom" style="text-align: center;"><img src="food_pics/Pasta Con Pomodoro E Basilico.jpg" alt="" style="width: 490px; height: 300px;">
      <br><b>Pasta Con Pomodoro E Basilico</b>
      <br>&#8377;250<br>
      <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 490px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
  </tr>
  <tr>
    <td></td><td></td><td></td>
    <td class="zoom" style="text-align: center;"><img src="food_pics/Mushroom Risotto.jpg" alt="" style="width: 500px; height: 300px;">
      <br><b>Mushroom Risotto</b>
      <br>&#8377;250<br>
      <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
    <td class="zoom" style="text-align: center;"><img src="food_pics/tiramisu-the-pick-me-up-cake.jpg" alt="" style="width: 500px; height: 300px;">
      <br><b>Tiramisu-the Pick Me Up Cake</b>
      <br>&#8377;400<br>
      <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
    <td class="zoom" style="text-align: center;"><img src="food_pics/Pistachio Panna Cotta.jpg" alt="" style="width: 490px; height: 300px;">
      <br><b>Pistachio Panna Cotta</b>
      <br>&#8377;150<br>
      <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 490px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
  </tr>
</table>
</div>




<div class="items" id="mexican">
  <br>
    <center><h1 style="color: rgba(62, 161, 16, 0.87);">Mexican Cuisine</h1></center><br>
  <table>
    <tr>
      <td></td><td></td><td></td>
        <td class="zoom" style="text-align: center;"><img src="food_pics/Guacamole.jpg" alt="" style="width: 500px; height: 300px;">
          <br><b>Guacamole</b>
          <br>&#8377;150<br>
          <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
        <td class="zoom" style="text-align: center;"><img src="food_pics/Enchiladas.jpg" alt="" style="width: 500px; height: 300px;">
          <br><b>Enchiladas</b>
          <br>&#8377;120<br>
          <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
        <td class="zoom" style="text-align: center;"><img src="food_pics/Do-It-Yourself Tacos.jpg" alt="" style="width: 490px; height: 300px;">
          <br><b>Do-It-Yourself Tacos</b>
          <br>&#8377;125<br>
          <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 490px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
      </tr> 
      <tr>
        <td></td><td></td><td></td>
      <td class="zoom" style="text-align: center;"><img src="food_pics/Burritos with Minced Meat Filling.jpg" alt="" style="width: 500px; height: 300px;">
        <br><b>Burritos with Minced Meat Filling</b>
        <br>&#8377;80<br>
        <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
      <td class="zoom" style="text-align: center;"><img src="food_pics/Chicken Quesadillas.jpg" alt="" style="width: 500px; height: 300px;">
        <br><b>Chicken Quesadillas</b>
        <br>&#8377;250<br>
        <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
      <td class="zoom" style="text-align: center;"><img src="food_pics/Guilt-Free Chilli.jpg" alt="" style="width: 490px; height: 300px;">
        <br><b>Guilt-Free Chilli</b>
        <br>&#8377;250<br>
        <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 490px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
    </tr>
    <tr>
      <td></td><td></td><td></td>
      <td class="zoom" style="text-align: center;"><img src="food_pics/Tomato Salsa.jpg" alt="" style="width: 500px; height: 300px;">
        <br><b>Tomato Salsa</b>
        <br>&#8377;250<br>
        <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
      <td class="zoom" style="text-align: center;"><img src="food_pics/Chilli Con Carne.jpg" alt="" style="width: 500px; height: 300px;">
        <br><b>Chilli Con Carne</b>
        <br>&#8377;400<br>
        <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
      <td class="zoom" style="text-align: center;"><img src="food_pics/Mexican Yogurt Dip.jpg" alt="" style="width: 490px; height: 300px;">
        <br><b>Mexican Yogurt Dip</b>
        <br>&#8377;150<br>
        <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 490px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
    </tr>
  </table>
</div>
<div id="diliv">
<img src="food_pics/delivery.jpg " style="width:900px; height:350px; margin-left:300px;padding:20px;">
</div>

  <div class="items" id="mughlai">
    <br>
      <center><h1 style="color: rgba(255, 0, 0, 0.89);">Mughlai Cuisine</h1></center><br>
    <table>
      <tr>
        <td></td><td></td><td></td>
          <td class="zoom" style="text-align: center;"><img src="food_pics/Mughlai Pulav.jpg" alt="" style="width: 500px; height: 300px;">
            <br><b>Mughlai Pulav</b>
            <br>&#8377;150<br>
            <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
          <td class="zoom" style="text-align: center;"><img src="food_pics/Mughlai Paratha.jpg" alt="" style="width: 500px; height: 300px;">
            <br><b>Mughlai Paratha</b>
            <br>&#8377;120<br>
            <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
          <td class="zoom" style="text-align: center;"><img src="food_pics/Akbari Daal.jpg" alt="" style="width: 490px; height: 300px;">
            <br><b>Akbari Daal</b>
            <br>&#8377;125<br>
            <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 490px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
        </tr> 
        <tr>
          <td></td><td></td><td></td>
        <td class="zoom" style="text-align: center;"><img src="food_pics/Mutton Kadai.jpg" alt="" style="width: 500px; height: 300px;">
          <br><b>Mutton Kadai</b>
          <br>&#8377;80<br>
          <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
        <td class="zoom" style="text-align: center;"><img src="food_pics/Mutton Seekh Kebab.jpg" alt="" style="width: 500px; height: 300px;">
          <br><b>Mutton Seekh Kebab</b>
          <br>&#8377;250<br>
          <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
        <td class="zoom" style="text-align: center;"><img src="food_pics/Rogan Josh.jpg" alt="" style="width: 490px; height: 300px;">
          <br><b>Rogan Josh</b>
          <br>&#8377;250<br>
          <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 490px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
      </tr>
      <tr>
        <td></td><td></td><td></td>
        <td class="zoom" style="text-align: center;"><img src="food_pics/Nargisi Kofta.jpg" alt="" style="width: 500px; height: 300px;">
          <br><b>Nargisi Kofta</b>
          <br>&#8377;250<br>
          <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
        <td class="zoom" style="text-align: center;"><img src="food_pics/Nihari Gosht.jpg" alt="" style="width: 500px; height: 300px;">
          <br><b>Nihari Gosht</b>
          <br>&#8377;400<br>
          <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
        <td class="zoom" style="text-align: center;"><img src="food_pics/Shahi Tukda.jpg" alt="" style="width: 490px; height: 300px;">
          <br><b>Shahi Tukda</b>
          <br>&#8377;150<br>
          <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 490px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
      </tr>
    </table>
    </div>

<div class="items" id="continental">
  <br>
    <center><h1 style="color: rgba(0, 119, 255, 0.795);">Continental Dishes</h1></center><br>
  <table>
    <tr>
      <td></td><td></td><td></td>
        <td class="zoom" style="text-align: center;"><img src="food_pics/Sticky Toffee Pudding.jpg" alt="" style="width: 500px; height: 300px;">
          <br><b>Sticky Toffee Pudding</b>
          <br>&#8377;150<br>
          <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
        <td class="zoom" style="text-align: center;"><img src="food_pics/Prawn Pie.jpg" alt="" style="width: 500px; height: 300px;">
          <br><b>Prawn Pie</b>
          <br>&#8377;120<br>
          <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
        <td class="zoom" style="text-align: center;"><img src="food_pics/Mushroom Stew.jpg" alt="" style="width: 490px; height: 300px;">
          <br><b>Mushroom Stew</b>
          <br>&#8377;125<br>
          <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 490px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
      </tr> 
      <tr>
        <td></td><td></td><td></td>
      <td class="zoom" style="text-align: center;"><img src="food_pics/Bacon Wrapped Dates.jpg" alt="" style="width: 500px; height: 300px;">
        <br><b>Bacon Wrapped Dates</b>
        <br>&#8377;80<br>
        <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
      <td class="zoom" style="text-align: center;"><img src="food_pics/Baked Mushrooms And Capsicum.jpg" alt="" style="width: 500px; height: 300px;">
        <br><b>Baked Mushrooms And Capsicum</b>
        <br>&#8377;250<br>
        <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
      <td class="zoom" style="text-align: center;"><img src="food_pics/Sausage Pepper Burger.jpg" alt="" style="width: 490px; height: 300px;">
        <br><b>Sausage Pepper Burger</b>
        <br>&#8377;250<br>
        <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 490px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
    </tr>
    <tr>
      <td></td><td></td><td></td>
      <td class="zoom" style="text-align: center;"><img src="food_pics/Chicken Salad.jpg" alt="" style="width: 500px; height: 300px;">
        <br><b>Chicken Salad</b>
        <br>&#8377;250<br>
        <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
      <td class="zoom" style="text-align: center;"><img src="food_pics/Chicken Pie.jpg" alt="" style="width: 500px; height: 300px;">
        <br><b>Chicken Pie</b>
        <br>&#8377;400<br>
        <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
      <td class="zoom" style="text-align: center;"><img src="food_pics/Date and Walnut Pie.jpg" alt="" style="width: 490px; height: 300px;">
        <br><b>Date and Walnut Pie</b>
        <br>&#8377;150<br>
        <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 490px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
    </tr>
  </table>
  </div>

  <div class="items" id="healthy">
    <br>
      <center><h1 style="color: rgba(62, 161, 16, 0.87);">Extraordinary and Healthy Dishes</h1></center><br>
    <table>
      <tr>
        <td></td><td></td><td></td>
          <td class="zoom" style="text-align: center;"><img src="food_pics/Valli Little_s Cajun ocean trout with pineapple salad.jpg" alt="" style="width: 500px; height: 300px;">
            <br><b>Valli Little's Cajun ocean trout with pineapple salad</b>
            <br>&#8377;150<br>
            <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
          <td class="zoom" style="text-align: center;"><img src="food_pics/Prawn and spinach angel hair pasta with prawn oil.jpg" alt="" style="width: 500px; height: 300px;">
            <br><b>Prawn and spinach angel hair pasta with prawn oil</b>
            <br>&#8377;120<br>
            <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
          <td class="zoom" style="text-align: center;"><img src="food_pics/Leek, almond and bruised tomato galette.jpg" alt="" style="width: 490px; height: 300px;">
            <br><b>Leek, almond and bruised tomato galette</b>
            <br>&#8377;125<br>
            <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 490px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
        </tr> 
        <tr>
          <td></td><td></td><td></td>
        <td class="zoom" style="text-align: center;"><img src="food_pics/Thai red fish curry with noodles.jpg" alt="" style="width: 500px; height: 300px;">
          <br><b>Thai red fish curry with noodles</b>
          <br>&#8377;80<br>
          <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
        <td class="zoom" style="text-align: center;"><img src="food_pics/Taleggio sourdough salad with simple salsa verde.jpg" alt="" style="width: 500px; height: 300px;">
          <br><b>Taleggio sourdough salad with simple salsa verde</b>
          <br>&#8377;250<br>
          <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
        <td class="zoom" style="text-align: center;"><img src="food_pics/Sesame butter radishes with lemon.jpg" alt="" style="width: 490px; height: 300px;">
          <br><b>Sesame butter radishes with lemon</b>
          <br>&#8377;250<br>
          <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 490px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
      </tr>
      <tr>
        <td></td><td></td><td></td>
        <td class="zoom" style="text-align: center;"><img src="food_pics/Quick chicken roast.jpg" alt="" style="width: 500px; height: 300px;">
          <br><b>Quick chicken roast</b>
          <br>&#8377;250<br>
          <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
        <td class="zoom" style="text-align: center;"><img src="food_pics/Prawn and spinach angel hair pasta with prawn oil.jpg" alt="" style="width: 500px; height: 300px;">
          <br><b>Prawn and spinach angel hair pasta with prawn oil</b>
          <br>&#8377;400<br>
          <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 500px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
        <td class="zoom" style="text-align: center;"><img src="food_pics/Raw pad Thai.jpg" alt="" style="width: 490px; height: 300px;">
          <br><b>Raw pad Thai</b>
          <br>&#8377;150<br>
          <input type="button" class="dish" value="Add to bowl" style="background: green; color: white; width: 490px; height: 30px; font-size: 15px;"></td><td></td><td></td><td></td><td></td>
      </tr>
    </table>
  </div>

<!-- For Testimonials -->
<div class="testimonials">
    <div class="inner">
        <h1>Testimonials</h1>
        <div class="border"></div>
           <div class="row">
             <div class="col">
                <div class="testimonial">
                  <img src="food_pics/p1.jpg" alt="">
                  <div class="name">Steven Bell</div>
                  <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <br>
                  <p>I personally order twice or thrice a week in order to taste all the dishes. In addition to Indian cuisine, they also serve a unique, healthy food options featuring fusion cuisines.</p>
                </div>
            </div>
            <div class="col">
              <div class="testimonial">
                <img src="food_pics/p2.jpg" alt="">
                <div class="name">Jenny Baily</div>
                <div class="star">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <br>
                <p>They provide healthy and delicious food. Their delivery services are also quick. They also provide us with some of the options which I have not seen in any other websites.</p>
              </div>
             </div>  
             <div class="col">
              <div class="testimonial">
                <img src="food_pics/p3.jpg" alt="">
                <div class="name">Bob Watson</div>
                <div class="star">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <br>
                <p>The dishes are quite unique and extraordinary. They provide a versatile menu. The delivery services are quite fast. I personally did not face any difficulty while ordering food.</p>
              </div>
            </div>
        </div>
    </div>
</div>
<div class="cnt" style="margin-left:650px; padding-top:10px;padding-bottom:10px;">
<b>Number of website visiter</b>
<a href="https://www.hitwebcounter.com" target="_blank">
    <img src="https://hitwebcounter.com/counter/counter.php?page=7691663&style=0005&nbdigits=5&type=page&initCount=0" title="Total Website Hits" Alt="Web Hits"   border="0" /></a>  
</div>
<div class="contact" id="contact">
  <table>
    <tr>
      <td></td>
      <td></td><td></td><td></td><td></td><td></td>
      <td style="color: yellow;" class="tit">Food</td>
      <td></td>
      <td style="color: #41f804;" class="tit">Farm</td>
      <td style="padding-left: 750px;">About Us</td>
      <td class="help" id="help"style="padding-left: 50px;"><button class="open-button" onclick="openForm()"style="background-color: inherit;color:white; border:none;
       cursor:pointer;">Need help ?</button></td>

<div class="form-popup" id="myForm">
        <form action="query.php" class="form-container" method="post">
          <h1>Get help</h1>
      
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>
      <br>
      <br>

          <label for="help"><b>query</b></label>
          <textarea placeholder="Enter query" name="query" required>
            </textarea>
      <br>
      <br>
          <button type="submit" class="btn">submit</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
      </div>
       <script>
        function openForm() {
          document.getElementById("myForm").style.display = "block";
        }
        
        function closeForm() {
          document.getElementById("myForm").style.display = "none";
        }
        </script>


      <td style="padding-left: 50px;">Contact us</td>
    </tr>
    </table>
    <table style="margin-left: 930px;">
      <tr>
          <td>Branches</td>
          <td style="padding-left: 48px;">Sign-up</td>
      </tr>
    </table>  
    <br>  
  <hr>
  <br>
  <table>
    <tr>
      <td style="padding-right: 25px; padding-left: 10px;"><img src="food_pics/facebook.png" style="width: 30px; height: 30px;"></td>
      <td style="padding-right: 25px;"><img src="food_pics/twitter.JPG" style="width: 30px; height: 30px;"></td>
      <td style="padding-right: 25px;"><img src="food_pics/insta.JPG" style="width: 30px; height: 30px;"></td>
      <td style="padding-left: 615px;">Privacy Policy</td>
      <td style="padding-left: 25px;">Terms</td>
      <td style="padding-left: 20px;">Pricing</td>
      <td style="padding-left: 20px;">Copyright 2020 &#169; All Rights Reserved</td>
   </tr> 
  </table>    
</div>
</body>
</html> 

<html>
    <head>
        <title>SignUp</title>
        <link rel="stylesheet" href="style.css">
        <script>
            function checkForm(form)
            {
                if(form.uname.value == "") {
                    alert("Error: Username cannot be blank!");
                    form.uname.focus();
                    return false;
                }
                re = /^\w+$/;
                if(!re.test(form.uname.value)) {
                    alert("Error: Username must contain only letters, numbers and underscores!");
                    form.uname.focus();
                    return false;
                }

                if(form.password.value != "" && form.password.value == form.recon_password.value) {
                    if(form.password.value.length < 8) {
                    alert("Error: Password must contain at least eight characters!");
                    form.password.focus();
                    return false;
                    }
                    if(form.password.value == form.uname.value) {
                    alert("Error: Password must be different from Username!");
                    form.password.focus();
                    return false;
                    }
                    re = /[0-9]/;
                    if(!re.test(form.password.value)) {
                    alert("Error: password must contain at least one number (0-9)!");
                    form.password.focus();
                    return false;
                    }
                    re = /[a-z]/;
                    if(!re.test(form.password.value)) {
                    alert("Error: password must contain at least one lowercase letter (a-z)!");
                    form.password.focus();
                    return false;
                    }
                    re = /[A-Z]/;
                    if(!re.test(form.password.value)) {
                    alert("Error: password must contain at least one uppercase letter (A-Z)!");
                    form.password.focus();
                    return false;
                    }
                } 
                else {
                    alert("Error: Passwords do not match!");
                    form.password.focus();
                    return false;
                }

               
                return true;
            }       
        </script>
        <style>

body
{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background-position: center;
}

.sign-up-form
{
    width: 700px;
    box-shadow: 0 0 3px 0 rgba(0,0,0,0.3);
    background: #e9d30ad3;
    padding: 20px;
    margin: 8% auto 0;
    margin-top:30px;
}


            </style>
    </head>
    <body style="background-image: url(food.jpg); background-size: cover;">
    <h1 style="margin-top: 0px; font-size: 30px; position:fixed; margin-left:450px;
    text-shadow: 2px 2px black;"><b  style="color: yellow; margin-left:2px;">Food</b> <b style="color: #41f804; padding-left:0px;">Farm</b></h1>
                <center>
                 <form method="post" class="sign-up-form" onSubmit = "return checkForm(this)" action="#">
                     <br>
                    <h1>SignUp!!!</h1><br>
                    <table>
                        <tr>
                            <td><input type="hidden" name="submitted" value="true"/></td>
                        </tr>
                        <tr>
                            <td><label for="fname" >First Name</label></td><td></td>
                            <td><input type="text" name="fname_std" id="fname_std" placeholder="Enter your first name" size="70" style="height: 30px;" required/></td>
                        </tr><tr></tr><tr></tr><tr></tr><tr></tr>
                        <tr>
                            <td><label for="lname" >Last Name</label></td><td></td>
                            <td><input type="text" name="lname_std" id="lname_std" placeholder="Enter your last  name" size="70" style="height: 30px;" required/></td>
                        </tr><tr></tr><tr></tr><tr></tr><tr></tr>
                        <tr>
                            <td><label for="E-mail">E-Mail</label></td><td></td>
                            <td><input type="email"  name="email" id="email" placeholder="Enter your email id" size="70" style="height: 30px;" required/></td>
                        </tr><tr></tr><tr></tr><tr></tr><tr></tr>
                        <tr>
                            <td><label for="name" >Mobile No.</label></td><td></td>
                            <td><input type="text" name="phone" id="phone" placeholder="Enter your mobile number" size="70" style="height: 30px;" required/></td>
                        </tr><tr></tr><tr></tr><tr></tr><tr></tr>                        
                        <tr>
                            <td><label for="Address">Address</label></td><td></td>
                            <td><textarea rows="4" cols="65" name="address" id="address" placeholder="Enter your delivery location" size="70" required></textarea></td>
                        </tr><tr></tr><tr></tr><tr></tr><tr></tr>
                        <tr>
                            <td><label for="name" >Username</label></td><td></td>
                            <td><input type="text" name="uname" id="uname" placeholder="Enter your Username" size="70" style="height: 30px;" required/></td>
                        </tr><tr></tr><tr></tr><tr></tr><tr></tr>
                        <tr>
                            <td><label for="password">Password</label></td><td></td>
                            <td><input type="password" name="password" id="password" placeholder="Enter your password" size="70" style="height: 30px;" required/></td>
                        </tr><tr></tr><tr></tr><tr></tr><tr></tr>
                        <tr>
                            <td><label for="password">Reconfirm Password</label></td><td></td>
                            <td><input type="password" name="recon_password" id="recon_password" placeholder="Reconfirm Password" size="70" style="height: 30px;" required/></td>
                        </tr>
                        <tr>
                            <td><label for="fav">Favourite dish</label></td><td></td>
                            <td><input type="text" name="fav" id="fav" placeholder="Enter your favourite dish" size="70" style="height: 30px;" required/></td>
                        </tr><tr></tr><tr></tr><tr></tr><tr></tr>
                    </table>
                    <br><br>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                
                    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                    <input type="submit" name="submit" value="Submit" style=" width: 100px; height: 35px;"/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <a href= "before_login_home.php">   <input type="button" onclick="location.href = 'login.html';" name="cancel" value="Cancel" style=" width: 100px; height: 35px;"/>      </a>     
                </form>
                </center>

<?php
if(isset($_POST['submitted']))
{
    $uname=$_POST['uname'];
    $conn=new mysqli('localhost','root','','hotel');
    $flag=0;
    $query1="SELECT * from cust_login";
    $result1=mysqli_query($conn,$query1);
   
    while($rows=mysqli_fetch_assoc($result1))
    {
        if($uname==$rows['username'])
        {
            $flag=1;
        }
    }

if($flag==0)
{
    $fname_std=$_POST['fname_std'];
    $lname_std=$_POST['lname_std'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    
    $password=$_POST['password'];
    $fav=$_POST['fav'];

    $query2="INSERT INTO cust_login(username,password,f_name,l_name,email,mobile_no,adress,fav_dish) VALUES('$uname','$password','$fname_std','$lname_std','$email','$phone','$address','$fav')";
    $result2=mysqli_query($conn,$query2);
    ?>

<button onclick="location.href = 'login.html';" style="margin-left: 250px; background-color: #41f804;">Login now</button>
    <?php
    

  
    }
    
 

else
{
    ?>

    <h1>User exist</h1>
<?php
}
        
}

?>

</body>
</html>
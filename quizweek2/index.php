
<?php 

if(isset($_POST['submit']))
{   
   $name=$_POST['name'];
   $email=$_POST['email'];
   $phone=$_POST['phone'];

   echo "welcome your user details are <br> Name:".$name. "<br>Phone :".$phone. "<br>Email :".$email."";
}
?>
<h1>registration form and collect the users input </h1><hr>
<div align="center">
<form method="POST" action="">
                   
                      <div class="form-group">
                        <input type="text" placeholder="Enter Name" class="form-control" name="name"  require>
                      </div><br>
                      <div class="form-group mt-2">
                        <input  type="text" class="form-control" name="email" placeholder="Enter Email"  require>

                        </div><br>
                        <div class="form-group mt-2">
                        <input  type="tel" class="form-control" name="phone" placeholder="Enter Phone Number"  require>

                        </div><br>
             
                    <div class="text-center"><input type="submit" name="submit" value="Submit"></div>

                               

                </form>
                </div>
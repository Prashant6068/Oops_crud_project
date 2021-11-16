<?php
error_reporting(0);
$err="";
include("class.php");
$obj=new employee;
$obj->update($name,$mail,$age,$city);
$name=$obj->uparr['uname'];
$mail=$obj->uparr['email'];
$age=$obj->uparr['age'];
$city=$obj->uparr['city'];

if(isset($_POST["sub"])){
    $name=$_POST["uname"];
    $mail=$_POST["mail"];
    $age=$_POST["age"];
    $city=$_POST["city"];

$usernameErr = $emailErr = $ageErr= $cityErr= "";
if (empty($name)) {
    $usernameErr = "*Username is required.";
  } 
  if (empty($mail)) {
    $emailErr = "*Email is required.";
  } 
  
  if (empty($age)) {
    $ageErr = "*Age is required.";
  } 
  if (empty($city)) {
    $cityErr= "*City is required.";
  } 

  if(!empty($name) && !empty($mail)&& !empty($age)&& !empty($city))
  $err=$obj->update($name,$mail,$age,$city);
}





?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1/1560.png">
<title>Update</title>
<link rel="stylesheet" href="./css//regis.css">
   <style>
    h4{
           color: red;
       }
   </style>
    </head>
    <body>
       
        <div class="container">
      <h3>Update Details</h3>
      <h4><?php echo $err;?></h4>
    
      <form method="post">


      
       <label for="username">
          <span>username</span>
          <input type="text" name="uname" placeholder="Enter username" value="<?php echo $name?>">
          <small><?php echo $usernameErr; ?></small>
        </label>


      <label for="email">
          <span>email</span>
          <input type="email" name="mail" placeholder="Enter email" value="<?php echo $mail?>">
          <small><?php echo $emailErr; ?></small>
        </label>
 
     <label for="Age">
          <span>Age</span>
          <input type="number" name="age" placeholder="Enter age" value="<?php echo $age?>">
          <small><?php echo $ageErr; ?></small>
        </label>

     
     <label for="City">
          <span>City</span>
          <input type="text" name="city" placeholder="Enter city" value="<?php echo $city?>">
          <small><?php echo $cityErr; ?></small> </label
        >

     <button type="submit" name="sub">Update</button>
    </form>
   
    </div>
   
    </body>
    </html>
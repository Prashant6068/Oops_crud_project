<?php
include("class.php");
error_reporting(0);
$err="";
if(isset($_POST["sub"])){
$uname=$_POST["uname"];
$mail=$_POST["mail"];
$age=$_POST["age"];
$city=$_POST["city"];
$tmp=$_FILES["att"]['tmp_name'];
$fname=$_FILES["att"]['name'];
//error
$usernameErr = $emailErr = $ageErr= $cityErr= $imageErr="";
//mail validation
if (empty($uname)) {
  $usernameErr = "*Username is required.";
} 

 else if (!preg_match("/^[a-zA-Z ]+$/", $uname)) {
  $usernameErr = "*Only Characters and white spaces are allowed.";
}
if (empty($mail)) {
  $emailErr = "*Email is required.";
} 

if (empty($age)) {
  $ageErr = "*Age is required.";
} 

if (empty($city)) {
  $cityErr = "*City is required.";
} 

if (empty($tmp)) {
  $imageErr = "*image is required.";
} 





if(!empty($uname)&&!empty($mail)&&!empty($age)&&!empty($city)&&!empty($fname)){
    $obj=new employee;
    $err=$obj->add($uname,$mail,$age,$city,$tmp,$fname);
}
else{
    $err="*All fields are mandatory";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1/1560.png">
<title>CRUD</title>
    <link rel="stylesheet" href=".//css//regis.css">
    <style>
      h4{
        color: red;
      }
    </style>
</head>
<body>

    <div class="container">
      <h3>Add Employee</h3>
      <h4><?php echo $err;?></h4>
      <form method="post" enctype="multipart/form-data">

   <label for="username">
          <span>username</span>
          <input type="text" name="uname" placeholder="Enter username" />
          <small><?php echo $usernameErr; ?></small>
        </label>

  <label for="email">
          <span>email</span>
          <input type="email" name="mail" placeholder="Enter email" />
          <small><?php echo $emailErr; ?></small>
        </label>

 <label for="Age">
          <span>Age</span>
          <input type="number" name="age" placeholder="Enter age" />
          <small><?php echo $ageErr; ?></small>
        </label>


 <label for="City">
          <span>City</span>
          <input type="text" name="city" placeholder="Enter city" />
          <small><?php echo $cityErr; ?></small> </label
        >

 <label for="file">
  <span>Image</span>
        
<input type="file" name="att">
<small><?php echo $imageErr; ?></small>
        </label>
<br>

 <button type="submit" name="sub">Submit</button>
</form>

</div>

</body>
</html>
<?php
$err="";
error_reporting(0);
include("class.php");
$obj=new employee;
$obj->changed($tmp,$fname);
    $err=$obj->changed($tmp,$fname);
if(isset($_POST["sub"])){
    $tmp=$_FILES["att"]["tmp_name"];
    $fname=$_FILES["att"]["name"];
    if(!empty($tmp)){
 $obj->changed($tmp,$fname);
    // $err=$obj->changed($tmp,$fname);
    }
    // else{
    //     $err="*Please upload image";
    // }
}


?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1/1560.png">
<title>IMAGE</title>

<link rel="stylesheet" href="./css//regis.css">
<style>
h4{
    color: red;
}
</style>
    </head>
    <body>
  
        <div class="container">
      <h3>Change Image</h3>
      <h4><?php echo $err;?></h4>
      <form method="post" enctype="multipart/form-data">


     <label for="file">
          <span>Image</span>
        
<input type="file" name="att">
        </label>
<br>

 <button type="submit" name="sub">Change Image</button>
 
    </form>
    <!-- <h1><?php echo $err?></h1> -->
    </div>

    </body>
    </html>
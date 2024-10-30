<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
$sql=$namee=$password=$name1="";
$conn= mysqli_connect("localhost","root","")
 or die(" noconnected");
 mysqli_select_db($conn,"test_db") or die("could no noconnected");

if(isset($_POST["insert"])){
$namee=$_POST["username"];
$password=$_POST["password"];
$name1=$_POST["name"];
 mysqli_query($conn,"INSERT into user(username,password,name) values('$namee','$password','$name1')");
 if($sql>0) {
  echo"success";
 }}
 else{
  echo"no";

 }
?>
<div class="d-flex justify-content-center align-iterm-center vh-100">
  <form class="shadow wd-450 p-3 "action="#" method="POST">
    <h4 class="display-4 fs-1 ">Create Account</h4>
     <?php
      if( isset($_GET['error'])){?>
       <? php echo "$_GET['error']";?><font>incorect username or password</font> 
      </p>
      <?php
    }
      ?>
  <div class="mb-3">
    <label class="form-label">Username</label>
    <input type="text"name=" username" class="form-control" placeholder="" value="<?php echo $namee?>"></div>
    <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="text" name="password" placeholder="" class="form-control" value="<?php echo $password?>"></div>
    <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name" placeholder="" value="<?php echo $name1?>"></div>
  <button type="submit" class="btn btn-primary" name="insert">Sunup</button>
  <a href="index1.php " class="link-secondary">login</a>
</form>
</div>
</body>
</html>

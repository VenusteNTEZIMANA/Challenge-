<!doctype html>
<html lang="en">
  <head>
    <style type="text/css">
    </style>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body><div class="text-center mt-5 btn-lg">
    <form action="login.php" method="POST" class="shadow w-45" style="max-width: 400px; margin: auto; ">
      <?php
      if(isset($_GET['error'])){?>
        <div class="alert alert-danger" role="alert">
        <? php echo "$_GET['error']";?>
    </div>
      <?php
    }
      ?>
      <button class="btn btn-lg btn-dark btn-block btn-lg">
      LOGIN</button>
     <hr>
    
     <label for="username" class="form-label" > Username:</label><br>
    <input type="text" name="username" class="form-contol" placeholder="username"  required="" ><br>
    <label for="password"  class="sr-only"> Password:</label><br>
    <input type="password"  name="password" id="password" class=" form-contol" placeholder="password" ><br>
    <div class="checkbox">
      <label class="mt-3" >
        <input type="checkbox"  value="remember-me">Remember me:
      </label>
    </div>
    <div class="mt-3">
     <button class="btn btn-lg btn-dark btn-block" type="submit"><font  color="white">Sign in</font></button></div>
     <div class="mt-3">
      <a href="home.php" class="btn btn-outline-light text-dark"><font color="green">Create Account</font></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="home.php" class="btn btn-outline-light text-dark" ><font color="black">Forget password</font></a>
     </div>
 
 </form></div>

</body>

 </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
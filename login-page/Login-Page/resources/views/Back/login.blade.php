

<?php       

@include ("connectdb.blade.php");

$error = "";  

if (isset($_POST["giris"]))

{

  if (empty($_POST["UserName"]))
  {

      $error = "Empty!";

    
  }

  $name=$_POST["UserName"];
  $email=$_POST["email"];
  $password=password_hash( $_POST["password1"], PASSWORD_DEFAULT);


  $add ="INSERT INTO users (user_name, passwordd) VALUES ('$name','$password')";

  $run = mysqli_query($connect,$add);

  if (isset($user_name)&& isset($password)){

    $check = "SELECT * FROM users WHERE User_Name ='$username'";
    $check2 ="SELECT * FROM users WHere paswordd = '$password'";
    $runn = mysqli_query($connect, $check, $check2); 

  }

  mysql_close($connect);

   
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REGISTER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    
<div class="container p-5">

<div class="card p-5">

              <form action = "register.php" method = "POST">

              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">User Name</label>
                  <input type="text" class="form-control" id="exampleInputUserName1" name = "UserName">
                  <?php
                  echo $error;
                  ?>
                 
                </div>
              
            
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name = "password">

                  

                
                </div>
                <button type="submit" name = "login" class="btn btn-primary">Login</button>
              </form>


</div>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
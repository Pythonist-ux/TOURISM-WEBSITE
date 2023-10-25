<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

    $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

    if(mysqli_num_rows($select_users) > 0){

        $row = mysqli_fetch_assoc($select_users);

      if($row['user_type'] == 'user'){

            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_id'] = $row['id'];
            header('location:t1.php');

        }

    }else{
        $message[] = 'incorrect email or password!';
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style2.css">
    <style>
.centered {
  text-align: center;
  color: white;
}
.centered1 {
  text-align: center;
  color: white;
  text-decoration: none;
}
</style>

</head>
<body>

<?php
if(isset($message)){
    foreach($message as $message){
        echo'
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
        ';
    }
}
?>
<div class="container">
  <div class="form">
    <div class="btn">

      <button class="loginBtn">LOG IN</button>
    </div>




  <form action="" method="post" onsubmit="redirect()";>
      <div class="formGroup">
        <input type="email" id="email1" placeholder="Email ID" name="email" required autocomplete="off">
      </div>
      <div class="formGroup">
        <input type="password" id="pass" placeholder="Password" name ="password" required autocomplete="off">

      </div>
      <div class="checkBox">
        <input type="checkbox" name="checkbox" id="checkbox">
        <span class="text">Keep me signed in on this device</span>
      </div>
      <div class="formGroup">
        <input type="submit" class="btn2" name="submit" value ="LogIn" onclick="redirect();">


      </div>
      <p class="centered">Don't Have An Account? </p><a href="register.php"><p class="centered1">Register Now</p></a>





    </form>


  </div>
</div>

<script src="JQ.js"></script>

</body>



</html>

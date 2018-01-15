<?php


if (isset($_POST['register'])){

  $first= $_POST['firstName'];
  $last = $_POST['lastName'];
  $password = md5($_POST['password']);
  $mail = $_POST['email'];
  $register = "INSERT INTO user VALUES ('','$first','$last','$password','$mail')";

  $q = mysqli_query($conn, $register);


}


?>

<section class="register">
  <h1>Create New Customer Account</h1>
  <form method='post'>
    <input type='text' name='firstName'/><br/>
    <input type='text' name='lastName'/><br/>
    <input type='password' name='password'/><br/>
    <input type='text' name='email'/><br/>
    <input type="submit" name="register" value='Register' class='register-btn'>
  </form>
</section>
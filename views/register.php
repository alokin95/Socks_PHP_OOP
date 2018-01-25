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
  <form id='insert' method='post' action="<?php echo $_SERVER['PHP_SELF'];?>">
    <input type='text' name='firstName' id='firstName'/><br/>
    <input type='text' name='lastName' id='lastName'/><br/>
    <input type='password' name='password' id='password'/><br/>
    <input type='text' name='email' id='email'/><br/>
    <input type="submit" id="register" class='register-btn' value='Register'>
  </form>
</section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<script>

$(document).ready(function(){
  //console.log('radi');
  $('#insert').submit(function(e){
    e.preventDefault();
   // console.log("Nije redirektovan");
   var first = $('#firstName').val();
   var last = $('#lastName').val();
   //console.log(name);
    $.ajax({
      type:"POST",
      url:"views/test.php",
      data:{
        first: first,
        last: last
      },
      success: function(response){
        alert("Uspesna registracija");
      }
    });
  });


})

</script>
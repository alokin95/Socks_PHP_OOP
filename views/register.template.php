<?php



?>

<section class="register">
  <h1>Create New Customer Account</h1>
  <form id='insert' method='POST' action="/register">
    <input type='text' name='firstName' id='firstName'/><br/>
    <input type='text' name='lastName' id='lastName'/><br/>
    <input type='password' name='password' id='password'/><br/>
    <input type='text' name='email' id='email'/><br/>
    <input type="submit" id="register" class='register-btn' value='Register' name='register'>
  </form>
</section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<script>

// $(document).ready(function(){
//   //console.log('radi');
//   $('#insert').submit(function(e){
//     e.preventDefault();
//    // console.log("Nije redirektovan");
//    var first = $('#firstName').val();
//    var last = $('#lastName').val();
//    //console.log(name);
//     $.ajax({
//       type:"POST",
//       url:"views/test.php",
//       data:{
//         first: first,
//         last: last
//       },
//       success: function(response){
//         alert("Uspesna registracija");
//       }
//     });
//   });


})

</script>
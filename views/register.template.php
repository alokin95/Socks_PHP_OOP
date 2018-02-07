
<section class="register">
  <h1>Create New Customer Account</h1>
  <form id='insert' method='POST' action="/register">
    <p>First name: </p>
    <input type='text' name='firstName' id='firstName'/><br/>
    <p>Last name: </p>
    <input type='text' name='lastName' id='lastName'/><br/>
    <p>Password: </p>
    <input type='password' name='password' id='password'/><br/>
    <p>E-mail: </p>
    <input type='text' name='email' id='email'/><br/>
    <button type="submit" id="register" class='register-btn' name='register'>Register</button>
  </form>
</section>




<script>

// $(document).ready(function(){
//   $('#insert').submit(function(e){
//     e.preventDefault();
//    var first = $('#firstName').val();
//    var last = $('#lastName').val();
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

<section class="register">
  <h1>Create New Customer Account</h1>
  <form id='insert' method='POST' action="/register">
    <p>First name: </p>
    <input type='text' name='firstName' id='firstName' onBlur="first();"/><br/>
    <p>Last name: </p>
    <input type='text' name='lastName' id='lastName' onBlur="last();"/><br/>
    <p>Password: </p>
    <input type='password' name='password' id='password' required/><br/>
    <p>E-mail: </p>
    <input type='text' name='email' id='email' onBlur="mail();"/><br/>
    <button type="submit" id="register" class='register-btn' name='register'>Register</button>
  </form>
</section>
<div class='login'>
  <h1> Customer Login</h1>
  <h3>Registered Customers</h3>
  <h5>If you have an account, sign in with your email address.</h5>
    <form method='POST' action="/index">
      <input type='text' name='email' id='email' placeholder='Enter your name'/><br/>
      <input type='password' name='password' id='password' placeholder="Enter your password"/><br/>
      <button type="submit" id="register" class='register-btn' name='login'>Sign In</button>
    </form>
</div>
<div class='new-customer'>
  <h2>New customer</h2>
  <p>Creating an account has many benefits: check out faster, keep more than one address, track orders and more.</p>

  <a href="/register"><button class='register-btn login-btn'>Create an account</button></a>
</div>
<?php 
  include_once("./components/head.php");
  session_start();
?>

<?php if(isset($_SESSION['register-success'])): ?>
  <script>
    alert("Register succesfull");
  </script>
<?php $_SESSION['register-success']=null; endif; ?>
<?php if(isset($_SESSION['login-success'])): ?>
  <script>
    alert("Login succesfull");
  </script>
<?php $_SESSION['login-success']=null;endif; ?>

  <body>
    <?php include_once("./components/header.php")?>

    <div class="container mt-5 mb-5">
      <div class="row account-div" style="justify-content: space-evenly">
        <div class="col-lg-5">
          <h2 class="login-header">Login</h2>
          <div class="card">
            <form method="post" action="/actions/login.php" class="p-3 login-form">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username or email address</label>
                <input type="email" name="email" class="form-control" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
              </div>
              <div style="display: flex; margin-bottom: 1rem;">
                <button type="submit" class="btn btn-primary btn-lg account-submit">Login</button>
                <div class="ext-box">
                  <div class="int-box">
                    <input type="checkbox" class="form-check-input" id="remember">
                    <label class="form-check-label">Remember me</label>
                  </div>
                </div>
              </div>
              <a href="#">Lost your password?</a>
            </form>
          </div>
        </div>
        <div class="col-lg-5">
          <h2 class="register-header">Register</h2>
          <div class="card">
            <form method="post" action="/actions/register.php" class="p-3 register-form">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address<span class="required">*</span></label>
                <input type="email" name="email" class="form-control">
              </div>
              <p>A password will be sent to your email address.</p>
              <p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#">privacy policy.</a></p>
              <div style="display: flex; margin-bottom: 1rem;">
                <button type="submit" class="btn btn-primary btn-lg account-register">Register</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <?php include_once("./components/footer.php") ?>

    
  </body>
</html>
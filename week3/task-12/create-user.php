<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Create User</title>
  </head>
  <body>
    <div class="container">
      <form style="max-width: 500px; margin: 3rem auto">
        <a href="/cms.php" class="btn btn-secondary" style="margin-bottom: 1rem">Go Back</a>
        <div class="form-group" style="margin-bottom: 1rem">
          <label>Email address</label>
          <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
        </div>
        <div class="form-group" style="margin-bottom: 1rem">
          <label>Password</label>
          <input type="password" name="password" class="form-control" placeholder="Password" id="password">
        </div>
        <div class="form-group" style="margin-bottom: 1rem">
          <label>Password*</label>
          <input type="password" class="form-control" placeholder="Password*" id="password2">
        </div>
        <div style="display: flex; justify-content: center; margin-top: 2rem">
          <button type="button" class="btn btn-primary" id="create">Submit</button>
        </div>
      </form>
    </div>

    <script>
      $('#create').on('click', (button) => {
        const email = document.querySelector('#email').value;
        const password = document.querySelector('#password').value;
        const password2 = document.querySelector('#password2').value;

        if(email === ""){
          Swal.fire({
            icon: 'error',
            text: 'Email is missing'
          });
          return;
        }
        if(password=="" || password !== password2){
          Swal.fire({
            icon: 'error',
            text: 'Passwords does not match'
          });
          return;
        }
        

        $.ajax({
          type: 'post',
          url: 'create.php',
          data: `email=${email}&password=${password}`,
          success: function(res){
            if(res == "created"){
              Swal.fire({
                icon: 'success',
                text: 'User has been created'
              });
            }
            else{
              Swal.fire({
                icon: 'error',
                text: 'An error happened'
              });
            }
          }
        });
      });
      
    </script>
  </body>
</html>
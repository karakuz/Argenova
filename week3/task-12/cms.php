<?php 
  
  session_start();
?>

<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./css/cms.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
      table.dataTable tbody>tr.selected,
      table.dataTable tbody>tr>.selected {
        background-color: #A2D3F6;
      }
    </style>

    <title>CMS</title>
  </head>
  <body>

    <div class="container">
      <div><a href="/create-user.php" class="btn btn-primary" id="add">Add New User</a></div>
      <table cellpadding="0" cellspacing="0" border="0" class="dataTable table table-striped" id="users">
        <thead>
          <tr>
            <th>ID</th>
            <th>Email</th>
            <th>password</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>ID</th>
            <th>Email</th>
            <th>password</th>
            <th>Action</th>
          </tr>
        </tfoot>
      </table>
    </div>

    <script>
      $(document).ready(function() {
        const table = $('#users').DataTable( {
          "processing": true,
          "serverSide": true,
          "ajax": "cms-server.php",
          "columnDefs": [ {
            "targets": 3,
            "data": "test",
            "defaultContent": `
              <button class="btn btn-outline-danger delete">Delete</button>
            `
          }]
        });

        /* setInterval( () => {
          console.log("reloading");
          table.ajax.reload();
        },10000); */

        $('#users tbody').on('click', '.delete', (button) => {
          const form = button.target.parentNode;
          const ID = form.parentNode.firstChild.innerText;

          console.log(form);
          console.log(ID);

          Swal.fire({
            title: 'Are you sure to delete this user?',
            text: "This action is irreversible",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
          })
          .then((result) => {
            if (result.isConfirmed){
              $.ajax({
                type: 'post',
                url: 'delete.php',
                data: `id=${ID}`,
                success: function(res){
                  if(res == "deleted"){
                    Swal.fire({
                      icon: 'success',
                      text: 'User has been deleted'
                    });
                  }
                  else{
                    Swal.fire({
                      icon: 'error',
                      text: 'An error happened'
                    });
                  }
                  table.ajax.reload();
                }
              });
            }
          });
          
          
        });
      });
      
    </script>
    
  </body>
</html>
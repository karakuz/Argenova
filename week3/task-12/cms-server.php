<?php
 
$table = 'users';
 
$primaryKey = 'id';
 
$columns = array(
  array( 'db' => 'id', 'dt' => 0 ),
  array( 'db' => 'email',  'dt' => 1 ),
  array( 'db' => 'password',   'dt' => 2 )
);
 
$sql_details = array(
  'user' => 'root',
  'pass' => 'rakoon',
  'db'   => 'argenova',
  'host' => 'localhost:3306'
);
 
require( 'ssp.class.php' );
 
echo json_encode(
  SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
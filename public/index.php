<?php 
     
     if ( !session_id() ) {
          # code...
          session_start();
     }
	require_once '../app/init.php';


	$app = new App;


 ?>
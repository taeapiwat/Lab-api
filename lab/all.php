




<body background= "img/bg.png">


<?php

require('../routeros_api.class.php');

$API = new RouterosAPI();

$API->debug = false;

if ($API->connect('1192.168.30.1', 'admin', '')) {

   
	$API->write('/ip/hotspot/active/print');
	

   $READ = $API->read(false);
   $ARRAY = $API->parseResponse($READ);
   

  

   }

  
   $API->disconnect();



?>

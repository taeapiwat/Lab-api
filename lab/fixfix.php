




<body background= "img/bg.png">

<center>
<br><font color="black" size="20"><b>Edit Profile Complete...<br></b></font><br>

<?php

require('../routeros_api.class.php');

$API = new RouterosAPI();

$API->debug = false;

if ($API->connect('192.168.30.1', 'admin', '')) {
	
	$nae2 = $_POST ['nae'];
 	 $na2 = $_POST ['user'];
 	 $pa2 = $_POST ['pass'];
  	$em2 = $_POST ['e_mail'];
  	$co2 = $_POST ['p_id'];

	$API->write('/ip/hotspot/user/set',false);
	
  $API->write("=.id=" . $nae2,false);
  $API->write("=name=".$na2,false);
  $API->write("=password=".$pa2,false);
  $API->write("=email=".$em2,false);
  $API->write("=comment=".$co2);

    

   $READ = $API->read(false);
   $ARRAY = $API->parseResponse($READ);
		echo "v</br>";
       echo "v</br>";
       echo "v</br></br>";
   echo "<a href='edit.php'>Return to Edit</a>";


   $API->disconnect();

}

?>
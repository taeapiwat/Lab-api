
<body background= "img/bg.png">

<center>
<center>
<br><font color="black" size="20"><b>Register Complete...<br></b></font>



<?php

require('../routeros_api.class.php');

$API = new RouterosAPI();

$API->debug = false;

if ($API->connect('192.168.30.1', 'admin', '')) {

    $name1 = $_POST ['user'];
    $password1 = $_POST ['pass'];
    $email1 = $_POST ['e_mail'];
    $id1 = $_POST ['p_id'];

    $API->write('/ip/hotspot/user/add',false);
     $API->write("=name=" . $name1, false);
     $API->write("=password=" . $password1, false);
     $API->write("=email=" . $email1, false);
     $API->write("=comment=" . $id1, true);

   $READ = $API->read(false);
   $ARRAY = $API->parseResponse($READ);
    
   if(!is_array($ARRAY)){
       echo "v</br>";
       echo "v</br>";
       echo "v</br>";
       echo "Username :"; echo $_POST['user']."</br>";
       echo "Passward :"; echo $_POST['pass']."</br>";
       echo "E-Mail :"; echo $_POST['e_mail']."</br>";
       echo "Personal-ID :"; echo $_POST['p_id']."</br>"."</br>"; 
       echo "<a href='register.php'>Back to Resigter</a>";

   }else {
       echo "error</br>";
       echo "<a href='register.php'>Back to Resigter</a>";
   };

   $API->disconnect();

}

?>

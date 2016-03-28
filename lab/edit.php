



<body background= "img/bg.png">





<center>
<br><font color="black" size="20"><b>Edit User Profile<br></b></font><br>



<?php

require('../routeros_api.class.php');

$API = new RouterosAPI();

$API->debug = false;

if ($API->connect('192.168.30.1', 'admin', '')) {

  $API->write('/ip/hotspot/user/print');
  
   $READ = $API->read(false);
   $ARRAY = $API->parseResponse($READ);

  
   foreach ($ARRAY as $key=>$value ) {
    
    if ($key<1) continue;

    echo "User=".$value['name']."&nbsp";
    echo "password=".$value['password']."&nbsp";
    echo "email=".$value['email']."&nbsp";
    echo "personal id=".$value['comment']."&nbsp"."&nbsp"."</br>";
    echo "<a href='detail.php?nae=".$value['.id']."&na=".$value['name']."&pa=".$value['password']."&em=".$value['email']."&co=".$value['comment']."'>Edit</a>"."</br>"."</br>";
    

   }
   echo "<a href='register.php'>Back to Resigter</a>";
  

   $API->disconnect();

}

?>

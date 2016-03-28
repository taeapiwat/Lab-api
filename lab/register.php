
<body background= "img/bg.png">









<?php

require('../routeros_api.class.php');

$API = new RouterosAPI();

$API->debug = false;

if ($API->connect('192.168.30.1', 'admin', '')) {

  
	$API->write('/ip/hotspot/active/print');
	
   $READ = $API->read(false);
   $ARRAY = $API->parseResponse($READ);

   $API->disconnect();

}

?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Register</title>
    </head>
    <body><center><font color="black" size="20"><b>Register FreeWiFi<br></b></font><br>
        <form method="post" action="fix.php">
            Username : <input type="text" name="user" size="21" /><br>
            Passward : <input type="password" name="pass" size="22" /><br>
            E-Mail : <input type="text" name="e_mail" size="24" /><br>
            Personal-ID : <input type="text" name="p_id" size="19" /><br><br>
            <input type="submit" value="submit">
        </form>
        <a href='edit.php'>Edit User Profile</a>
    </body>
</html>

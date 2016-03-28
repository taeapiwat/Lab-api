
<body background= "img/bg.png">







<center>
<br><font color="black" size="20"><b>Edit User Profile<br></b></font><br>



<?php 

require('../routeros_api.class.php');

$API = new RouterosAPI();

$API->debug = false;
$nae1 = $_GET ['nae'];
$na1 = $_GET ['na'];
$pa1 = $_GET ['pa'];
$em1 = $_GET ['em'];
$co1 = $_GET ['co'];

if ($API->connect('192.168.30.1', 'admin', '')) {

    $API->write('/ip/hotspot/user/print');

   $READ = $API->read(false);
   $ARRAY = $API->parseResponse($READ);
   
   $API->disconnect();

}

?>


<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Hook</title>
    </head>
    <body>
        <form method="post" action="fixfix.php">
        ID : <input type="text" name="nae" size="28" value="<?php echo $nae1; ?>" /><br>
            Username : <input type="text" name="user" size="21" value="<?php echo $na1; ?>" /><br>
            Password : <input type="text" name="pass" size="22" value="<?php echo $pa1; ?>" /><br>
            E-Mail : <input type="text" name="e_mail" size="24" value="<?php echo $em1; ?>" /><br>
            Personal-ID : <input type="text" name="p_id" value="<?php echo $co1 ?>" size="19" /><br><br>
            <input type="submit" value="submit">
        </form>
    </body>
</html>
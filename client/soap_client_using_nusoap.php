<?php
require_once("nusoap-0.9.5/lib/nusoap.php");

$wsdl = "http://localhost/www/pachabhaiya.com/c/source.code/cp.webservices/server/wsdl.php?wsdl";
$client = new nusoap_client($wsdl, true);

$param_adduser = array('user_id'  => 4,
					   'user_name' => 'admin',
					   'user_pswd' => 'adminpass',
					   'fullname' => 'Chhabi Pachabhaiya');
$result = $client->call('AddUser', $param_adduser);
print_r($result);

echo "<br><br>";

$param_getuser = array('user_id'  => 2);
$result = $client->call('GetUser', $param_getuser);
print_r($result);
?>

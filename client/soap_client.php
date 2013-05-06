<?php
if(!extension_loaded("soap"))
{
	dl("php_soap.dll");
}
ini_set("soap.wsdl_cache_enabled","0");

$client = new SoapClient("http://localhost/www/pachabhaiya.com/c/source.code/cp.webservices/server/wsdl.php?wsdl");

$adduser = $client->AddUser(1, 'admin', 'adminpass', 'Chhabi Pachabhaiya');
print_r($adduser);

echo "<br><br>";

$getuser = $client->GetUser(1);
print_r($getuser);
?>

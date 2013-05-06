<?php
ini_set("session.auto_start", 0);
session_start(); 

if (!extension_loaded("soap"))
{
	dl("php_soap.dll");
}
ini_set("soap.wsdl_cache_enabled","0");

require_once("classes/User.class.php");

$server = new SoapServer("http://localhost/www/pachabhaiya.com/c/source.code/cp.webservices/server/wsdl.php?wsdl");
$server->setClass("User");
$server->setPersistence(SOAP_PERSISTENCE_SESSION); 
$server->handle();
?>

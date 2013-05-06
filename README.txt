README
------
cp.webservices

Web Services Example - Complete Source Code
- using PHP, MySQL, WSDL, SOAP, XSD
- by Chhabi Pachabhaiya


Installation Steps:
-------------------

SERVER:

1. Run the SQL file cp.webservices.sql in phpMyAdmin.
   It will create a database "cp_webservices"
   and creates a table "tbl_user" with four fields 
   user_id, user_name, user_pswd and fullname.
   
2. Adjust mysql database settings in the file configuration.php

3. Open wsdl.php and in line number 115, adjust the absolute url of soap_server.php
   location="http://<localhost/www/pachabhaiya.com/c/source.code/cp.webservices/server>/soap_server.php"
   
4. Open soap_server.php and in line number 13, adjust the absolute url of wsdl.php
   http://<localhost/www/pachabhaiya.com/c/source.code/cp.webservices/server>/wsdl.php?wsdl
   

CLIENT:

1. Open soap_client.php, make necessary updates and call the webservice.






EXTRAS:
-------

Web services are application components.

Web Services can convert your applications into Web-applications.

The basic Web services platform is XML + HTTP.

Web services platform elements:
•	SOAP (Simple Object Access Protocol)
•	UDDI (Universal Description, Discovery and Integration)
•	WSDL (Web Services Description Language)
Web services use XML to code and to decode data, and SOAP to transport it (using open protocols).

Web services can offer application-components like: currency conversion, weather reports, or even language translation as services.

With Web services you can exchange data between different applications and different platforms.


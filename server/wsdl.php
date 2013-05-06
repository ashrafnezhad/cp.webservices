<?php
if (stristr($_SERVER['QUERY_STRING'], "wsdl"))
{
	header('Content-type: application/xml; charset=utf-8');
?>
<definitions 
	name="cp.webservices" 
	xmlns:tns="urn:cp.webservices" 
	targetNamespace="urn:cp.webservices" 
	xmlns="http://schemas.xmlsoap.org/wsdl/" 
	xmlns:xs="http://www.w3.org/2001/XMLSchema" 
	xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" 
	xmlns:http="http://schemas.xmlsoap.org/wsdl/http/" 
	xmlns:wsdl="http://schemas.xmlsoap.org/wsdl/" 
	xmlns:soap="http://schemas.xmlsoap.org/wsdl/soap/" 
	xmlns:SOAP-ENC="http://schemas.xmlsoap.org/soap/encoding/" 
	xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/">
	
	<types>
		<xs:schema xmlns:xs="http://www.w3.org/2001/XMLSchema" 
        xmlns="url:cp.webservices" 
        targetNamespace="urn:cp.webservices">
			<xs:element name="AddUserRequest">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="user_id" type="xs:integer" />
						<xs:element name="user_name" type="xs:string" />
						<xs:element name="user_pswd" type="xs:string" />
						<xs:element name="fullname" type="xs:string" />
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="AddUserResponse">
				<xs:complexType>
					<xs:all>
						<xs:element name="return" type="xs:string" />
					</xs:all>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetUserRequest">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="user_id" type="xs:integer" />
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetUserResponse">
				<xs:complexType>
					<xs:complexContent>
						<xs:restriction base="SOAP-ENC:Array">
							<xs:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:objUser[]" />
						</xs:restriction>
					</xs:complexContent>
				</xs:complexType>
			</xs:element>
		</xs:schema>
	</types>
	
	<message name="AddUserRequest">
		<part name="user_id" type="xs:integer" />
		<part name="user_name" type="xs:string" />
		<part name="user_pswd" type="xs:string" />
		<part name="fullname" type="xs:string" />
	</message>
	
	<message name="AddUserResponse">
		<part name="return" type="xs:string" />
	</message>
	
	<message name="GetUserRequest">
		<part name="user_id" type="xs:integer" />
	</message>
	
	<message name="GetUserResponse">
		<part name="return" type="tns:objUser" />
	</message>
	
	<portType name="User">
		<operation name="AddUser">
			<documentation>Add the user record</documentation>
			<input message="AddUserRequest" />
			<output message="AddUserResponse" />
		</operation>
		<operation name="GetUser">
			<documentation>Get the user record</documentation>
			<input message="GetUserRequest" />
			<output message="GetUserResponse" /> 
		</operation>
	</portType>
	
	<binding name="cp.webservice.soap.binding" type="User">
		<soap:binding style="rpc" transport="http://schemas.xmlsoap.org/soap/http" />
		<operation name="AddUser">
			<soap:operation soapAction="urn:cp.webservices.adduser.action" />
			<input>
				<soap:body use="encoded" namespace="urn.cp.webservices" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/" />
			</input>
			<output> 
				<soap:body use="encoded" namespace="urn.cp.webservices" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/" />
			</output>
		</operation>
		<operation name="GetUser">
			<soap:operation soapAction="urn:cp.webservices.getuser.action" />
			<input>
				<soap:body use="encoded" namespace="urn.cp.webservices" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/" />
			</input>
			<output>
				<soap:body use="encoded" namespace="urn.cp.webservices" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/" />
			</output>
		</operation>
	</binding>
	
	<service name="cp.webservices.service">
		<port name="User" binding="tns:cp.webservice.soap.binding">
			<soap:address location="http://localhost/www/pachabhaiya.com/c/source.code/cp.webservices/server/soap_server.php" />
		</port>
	</service>
  
</definitions>
<?php
}
else
{
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>cp.webservices</title>
</head>

<body>
<span style="font-weight: bold;">Web Services Example (PHP, MySQL, WSDL, SOAP, XSD)</span>
<br>
- Chhabi Pachabhaiya
<br><br>
Please refer this link to view the webservice:
<br>
http://<you-domain>/cp.webservices/server/wsdl.php<strong>?wsdl</strong>
<br><br>
Thank you.
</body>
</html>
<?php
}
?>

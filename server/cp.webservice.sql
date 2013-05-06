
CREATE DATABASE IF NOT EXISTS cp_webservices;

USE cp_webservices;

CREATE TABLE IF NOT EXISTS tbl_user (
user_id int(11) NOT NULL AUTO_INCREMENT,
user_name varchar(255) NOT NULL DEFAULT '',
user_pswd varchar(255) NOT NULL DEFAULT '',
fullname varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT '',
CONSTRAINT PK_User_user_id PRIMARY KEY (user_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

/*
Created		03/06/2014
Modified		15/09/2017
Project		
Model		
Company		
Author		
Version		
Database		mySQL 5 
*/




Create table users (
	id_user Int NOT NULL AUTO_INCREMENT,
	user_name Varchar(64) NOT NULL,
	user_password_hash Varchar(255) NOT NULL,
	user_email Varchar(64) NOT NULL,
	name Varchar(60),
	id_priv Int NOT NULL,
	date_reg Timestamp,
 Primary Key (id_user)) ENGINE = MyISAM;

Create table areas (
	id_area Int NOT NULL AUTO_INCREMENT,
	desc_area Varchar(50) NOT NULL,
 Primary Key (id_area)) ENGINE = MyISAM;

Create table tasks (
	id_task Int NOT NULL AUTO_INCREMENT,
	id_area Int NOT NULL,
	id_user Int NOT NULL,
	desc_task Mediumtext NOT NULL,
	date_task Datetime NOT NULL,
 Primary Key (id_task)) ENGINE = MyISAM;

Create table privileges (
	id_priv Int NOT NULL AUTO_INCREMENT,
	desc_priv Varchar(20),
 Primary Key (id_priv)) ENGINE = MyISAM;









Alter table tasks add Foreign Key (id_user) references users (id_user) on delete  restrict on update  restrict;
Alter table tasks add Foreign Key (id_area) references areas (id_area) on delete  restrict on update  restrict;
Alter table users add Foreign Key (id_priv) references privileges (id_priv) on delete  restrict on update  restrict;







/*
Created		03/06/2014
Modified		03/06/2014
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
	privilegio Int,
	fecha_registro Timestamp,
 Primary Key (id_user)) ENGINE = MyISAM;

Create table area (
	id_area Int NOT NULL AUTO_INCREMENT,
	desc_area Varchar(50) NOT NULL,
 Primary Key (id_area)) ENGINE = MyISAM;

Create table tareas (
	id_tarea Int NOT NULL AUTO_INCREMENT,
	id_area Int NOT NULL,
	id_user Int NOT NULL,
	desc_tarea Mediumtext NOT NULL,
	date_tarea Datetime NOT NULL,
 Primary Key (id_tarea)) ENGINE = MyISAM;









Alter table tareas add Foreign Key (id_user) references users (id_user) on delete  restrict on update  restrict;
Alter table tareas add Foreign Key (id_area) references area (id_area) on delete  restrict on update  restrict;







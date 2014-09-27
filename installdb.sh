#!/bin/sh

mysql -u root -ploveheal -e "drop database testdb";
mysql -u root -ploveheal -e "create database testdb";
mysql -u root -ploveheal -e "GRANT SELECT, INSERT, UPDATE, DELETE, DROP, CREATE ON testdb.* TO 'tester'@'localhost' IDENTIFIED BY 'focus1'";
# mysql -u base_user -pbase_user_pass -e "create database new_db; GRANT ALL PRIVILEGES ON new_db.* TO new_db_user@localhost IDENTIFIED BY 'new_db_user_pass'"

# replace localhost with % to enable connect from other machine

mysql -u tester -pfocus1 testdb -e "CREATE TABLE blog(PersonId varchar(128), PRIMARY KEY (PersonId), LastName varchar(255), FirstName varchar(255), Header varchar(255), Content varchar(1024))";

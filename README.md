# assignment3
Assignment 3 for  IMT3851 Programmering for web II (2018 VÅR)
# Group Members
* Robin Herrmann, 472510
* Pål Stakvik, 472511
* Martine Jacobsen, 141715


# Installation

* Unzip the folder
* Check the .env file to see what database settings are used. Alternatively change the settings to what you want.
* Open up a terminal/console window that can run PHP and Mysql commands.
* Run the command ` mysql -uroot -p ` and press enter twice without typing a password.
* Create the database using ` create database database_name `command, this should either be the name that is listed in the .env file, or what you changed it to.
* Run the ` use database database_name; ` command.
* After this you can run the ` show tables; ` command if you want to make sure it's empty.
* Make sure you have a console/terminal that can run PHP.
* Run the ` php artisan migrate ` command. If you get an error, go to config\database.php, go to line 53 and change ` strict => true ` to ` strict => false `.
* Run the ` php artisan db:seed ` command.
* If you want to make sure the database is populated, you can run ` show tables; ` and then ` select * from table_name; `.
* Open the application in localhost, and navigate to the public folder. After this you should be able to use the application.

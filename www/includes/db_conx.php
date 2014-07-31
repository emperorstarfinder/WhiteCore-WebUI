<?php
// Your database login details go here i.e. database server name, database username, user password to database, and the database name
$db_conx = mysqli_connect("localhost", "db_username", "db_password", "db_name");
// Noew lets evaluate the connection
if (mysqli_connect_errno()) {
	echo mysqli_connect_error();
	exit();
} // else {
//	echo "Sucessfully connected to the database.  Now lets code!!!!!";
// }
?>
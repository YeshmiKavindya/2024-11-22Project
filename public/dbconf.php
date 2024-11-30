<?php
//constant variable
define('SERVERNAME','127.0.0.1:3306');
define('USERNAME','root');
define('PASSWORD','mariadb');
define('DBNAME','school');

//connect with database
try{
	$connect = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);
	if(!$connect){
		die("Connection failed.<br>");
	}
	else{
		//echo("Connected successfully.<br>");
	}
}
catch(Exception $e){
	die($e->getMessage());
}
//echo "abc.<br>";
?>
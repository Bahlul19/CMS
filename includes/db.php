<?php


/*

$serverName = "localhost";

$userName = "root";

$password = "";

$dbName = "cms";

$connection = new mysqli($serverName,$userName,$password,$dbName);

 */

$db['db_host'] = "localhost";

$db['db_user'] = "root";

$db['db_pass'] = "";

$db['db_name'] = "cms";

foreach($db as $key => $value)
{
	define(strtoupper($key),$value);
}


$connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);


// if($connection)
// {
// 	echo "We are connected";
// }
// else 
// {
// 	echo "Please connect the database";
// }


?>
<?php 

$db['hostname'] = 'localhost';
$db['username'] = 'root';
$db['password'] = '';
$db['database'] = 'ecom';

foreach($db as $key => $value){
	define(strtoupper($key), $value);
}

$con = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

if(!$con){

	die("Connection Failed").mysqli_error($con);
}

?>
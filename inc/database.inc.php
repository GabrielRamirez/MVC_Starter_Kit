<?php

class database{
	function __construct(){
				$con = mysql_connect("localhost", "username", "password");
				if(!$con){die('Could not connect: ' . mysql_error());}
		  
				$db = mysql_select_db("database", $con);
			}
}

$con = new database;
?>
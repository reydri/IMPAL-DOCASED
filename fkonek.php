<?php
	function fkonek_db(){
		$host = "localhost";
		$user = "root";
		$pass = "";
		$db = "docased";

		$link = mysqli_connect($host,$user,$pass,$db);

		mysqli_select_db($link,$db);

		if(!$link){
			echo "error : ".mysql_error();
		}

		return $link;

	}
?>
<?php

$conn = mysqli_connect("localhost","root","","realestatephp");
	if (!$conn)
	{
		echo "Failed to connect to MySQL: " .mysqli_connect_error();
	}
?>
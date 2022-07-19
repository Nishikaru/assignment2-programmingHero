<?php
require_once "config.php";

$sql = "select * from users";
$results = mysqli_query($link, $sql);

if(mysqli_num_rows($results) > 0)
{
	while ($row = mysqli_fetch_assoc($results)){
		echo "Username :" . $row["name"] . " email :". $row["email"]. "<br>";
	}
}

else
{
	echo "No users found!";
}

?>
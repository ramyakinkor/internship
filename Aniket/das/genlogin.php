<?php
session_start();

include ('config.php');
$email = $_POST["email"];
$password = $_POST["password"];

$query = "SELECT * FROM general_user Where email ='$email' and password ='$password'";
$result = $conn->query($query);
			
			if($result->num_rows > 0)
			{
				while($row=$result->fetch_assoc())
				{
						$_SESSION["User_Name"]  = $row["name"];
						$_SESSION["User_Email"] = $row["email"];

						header("location: index.php");



				}

			}

			else
			{
				$_SESSION["Error"]= "User Not Registered";
				header("location: genuser.php");
			}

	$conn->close();

?>
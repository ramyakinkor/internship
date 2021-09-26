<?php
session_start();

include ('config.php');
$username = $_POST["username"];
$password = $_POST["password"];

$query = "SELECT * FROM login Where username ='$username' and password ='$password'";
$result = $conn->query($query);
			
			if($result->num_rows > 0)
			{
				while($row=$result->fetch_assoc())
				{
					if($row["usertype"]=="user"){
						$_SESSION["name"]  = $row["username"];
						$_SESSION["email"] = $row["email"];

						header("location: home.php");
					}
					else if($row["usertype"]=="admin"){
						$_SESSION["name"]  = $row["username"];
						$_SESSION["email"] = $row["email"];

						header("location: adminhome.php");
					}


				}

			}

			else
			{
				echo "username or password incorrect";
				
			}

	$conn->close();

?>
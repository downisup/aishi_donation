<?php

$fname=filter_input(INPUT_POST, 'firstname');
$lname=filter_input(INPUT_POST, 'lastname');
$country=filter_input(INPUT_POST, 'country');
$message=filter_input(INPUT_POST, 'subject');
echo "$fname";

if(!empty($fname )){
	if(!empty($country))
	{
		$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="aishi";

		$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
		if(mysqli_connect_error()){
			die('connect Error ('.
				mysqli_connect_errorno().')'.
				mysqli_connect_error());
		}	
		else{
			$sql="INSERT INTO registration(fname,lname,country,message) VALUES('$fname','$lname','$country','$message')";
			if ($conn->query($sql)) {
				echo "new record is inserted successfully";
			}
			else{
				echo "Error:".$sql."<br>".$conn->error;
			}
			$conn->close();
		}



	}
}


?>
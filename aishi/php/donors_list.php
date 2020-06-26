<?php
$fname=filter_input(INPUT_POST, 'firstname');
$lname=filter_input(INPUT_POST, 'lastname');
$gender=filter_input(INPUT_POST, 'gender');
$email=filter_input(INPUT_POST, 'email');
$phone=filter_input(INPUT_POST, 'phone');


if(!empty($fname )){
	if(!empty($email))
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
			$sql="INSERT INTO donors_list(fname,lname,gender,email,phone) VALUES('$fname','$lname','$gender','$email','$phone')";
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



header("Refresh:2 url=../form.html");



?>
	<?php

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
			echo "registration basic info ";
			echo "<br>";
			echo "--------------------------------------------";
			echo "<br>";
			echo "id | firstname | lastname | country | message ";echo "<br>";
			echo "-----------------------------------------------------";
			echo "<br>";
			$sql="select id,fname,lname,country,message from registration";
			$result=mysqli_query($conn,$sql);

			
			if($result=$conn -> query($sql)){
				while($row=($result) -> fetch_row()){
					printf("%s %s %s %s %s\n ",$row[0],$row[1],$row[2],$row[3],$row[4]);
					echo "<br>";
					printf("\n");
				}
				$result -> free_result();
			}
		}



?>
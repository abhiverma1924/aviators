<?php
//all the variables defined here are accessible in all the files that include this one
		$con = mysqli_connect("localhost", "aab96cb9_aviator", "Abhiverma@1819", "aab96cb9_aviation");
		if(!$con){
			echo "Can't connect database " . mysqli_connect_error($con);
			exit;
		}
?>
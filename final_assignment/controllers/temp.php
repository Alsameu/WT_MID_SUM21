<?php
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$email="";
	$err_email="";
	$password="";
	$err_password="";
	
	$hasError=false;
	
	if(isset($_POST["sign_up"])){
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		else{
			$name = $_POST["name"];
		}

		if(empty($_POST["uname"])){
			$hasError = true;
			$err_uname="Username Required";
		}
		else{
			$uname = $_POST["uname"];
		}
	
	
	if(empty($_POST["email"])){
			$hasError = true;
			$err_email="Email Required";
		}
		else{
			$email = $_POST["email"];
		}
		
		if(empty($_POST["password"])){
			$hasError = true;
			$err_password="Password Required";
		}
		else{
			$password = $_POST["password"];
		}
	}
	?>
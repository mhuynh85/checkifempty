<?php

    //For a login form, checks if username and/or password fields 
    //are empty from the POST
    //requires a field named userName and a field named passWord
	//@return error message if any form fields are empty
	function checkIfFilled(){
		
		//user doesn't enter a password
		if (!empty($_POST['userName']) && empty($_POST['passWord']))
		
		$errorMessage ="Please enter a password.";
		
		//user doesn't enter a username
		if (empty($_POST['userName']) && !empty($_POST['passWord']))
		
		$errorMessage ="Please enter a username.";
		
		//user doesn't enter a username and password
		if (empty($_POST['userName']) && empty($_POST['passWord']))
		
		$errorMessage ="Please enter a username and password.";
		
		//if user entered both a username and password
		//whether correct or incorrect
        //does not validate if username and password are correct
		if (!empty($_POST['userName']) && !empty($_POST['passWord']))
		
		$errorMessage="";
		
		return $errorMessage;
	}

    ?>
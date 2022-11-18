<?php

//process_data.php

if(isset($_POST["name"]))
{
	sleep(5);
	$connect = new PDO("mysql:host=localhost; dbname=members", "root", "");

	$success = '';

	$name = $_POST["name"];

	$email = $_POST["email"];

	$location = $_POST["location"];

	$telephone = $_POST["telephone"];

	$waste_type = $_POST["waste_type"];

	$name_error = '';
	$email_error = '';
	$location_error = '';
	$telephone_error = '';
	$waste_type_error = '';

	if(empty($name))
	{
		$name_error = 'Name is Required';
	}
	else
	{
		if(!preg_match("/^[a-zA-Z-' ]*$/", $name))
		{
			$name_error = 'Only Letters and White Space Allowed';
		}
	}

	if(empty($email))
	{
		$email_error = 'Email is Required';
	}
	else
	{
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$email_error = 'eMail is invalid';
		}
	}

	if(empty($location))
	{
		$location_error = 'location is Required';
	}
	else
	{
		if(!preg_match('/^[0-9]{10}+$/', $telephone))
		{
			$telephone_error = 'Invalid phone number';
		}
	}
	if(empty($waste_type))
	{
		$waste_type_error = 'Please Select waste';
	}

	if($name_error == '' && $email_error == '' && $location_error == '' && $telephone_error == '' && $waste_type_error == '')
	{
		//put insert data code here 

		$data = array(
			':name'			    =>	$name,
			':email'		    =>	$email,
			':location'		    =>	$telephone,
			':telephone'		=>	$location,
			':waste_type'		=>	$waste_type
		);

		$query = "
		INSERT INTO data_sample 
		(name, email, location, telephone, waste_type) 
		VALUES (:name, :email, :location, :telephone, :waste_type)
		";

		$statement = $connect->prepare($query);

		$statement->execute($data);

		$success = '<div class="alert alert-success">Thank you! We shall get in touch with you for collection of e-waste for safe recycling.</div>';
	}

	$output = array(
		'success'		    =>	$success,
		'name_error'	    =>	$name_error,
		'email_error'	    =>	$email_error,
		'location_error'	=>	$location_error,
		'telephone_error'	=>	$telephone_error,
		'waste_type_error'	=>	$waste_type_error
	);

	echo json_encode($output);
	
}

?>

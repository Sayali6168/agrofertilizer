<?php

	header('Access-Control-Allow-Origin: *');  
    header("Access-Control-Allow-Headers: *");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Allow-Methods: *');
	
	// if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// 	// Database connection details
	// 	$servername = "localhost";
	// 	$username = "root";
	// 	$password = "";
	// 	$database = "Saiagro";
	
	// 	// Create a database connection
	// 	$conn = new mysqli($servername, $username, $password, $database);
	
	// 	// Check connection
	// 	if ($conn->connect_error) {
	// 		die("Connection failed: " . $conn->connect_error);
	// 	}
		$scon = mysqli_connect("localhost","root","","Saiagro");
		// Retrieve form data
		$name = $_POST['Name'];
		$phoneNo = $_POST['PhoneNo'];
		$email = $_POST['Email'];
		$address = $_POST['Address'];
		$massage = $_POST['Massage'];
	
		// SQL query to insert data into a table (change "your_table_name" to your actual table name)
		$sql = "INSERT INTO entry_details(Name, Phone_No, Email,Address,Message)  values('$name', '$phoneNo', '$email', '$address', '$massage ')";
		
		$query_run = mysqli_query($scon,$sql);
      
    if($query_run) {  //invalid
		$response['success'] = true;
		$response['message'] = "The account is created successfully. Use the code send to linked email address to activate the account."; 
		echo json_encode($response);
	}else{  //invalid
		$response['success'] = false;
		$response['message'] = "Unknown error is occurred while creating account.";
		echo json_encode($response);
	}

	mysqli_close($scon);
		// // Prepare the SQL statement
		// $stmt = $conn->prepare($sql);
	
		// if ($stmt === false) {
		// 	die("Error: " . $conn->error);
		// }
	
		// // Bind parameters
		// $stmt->bind_param("sssss", $name, $phoneNo, $email, $address, $massage);
	
		// // Execute the prepared statement
		// if ($stmt->execute()) {
		// 	echo "Data inserted successfully!";
		// } else {
		// 	echo "Error: " . $conn->error;
		// }
	
		// // Close the prepared statement and the database connection
		// $stmt->close();
		// $conn->close();
	// }




































/*

$name= $_POST['Name'];
$ph= $_POST['PhoneNo'];
$email= $_POST['Email'];
$add= $_POST['Address'];
$msg= $_POST['Massage'];

$con = mysqli_connect('localhost', 'root', '', 'Saiagro');


if (mysqli_connect_errno())
{ echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
$sql = "INSERT INTO entry_details(Name,Phone_No,Email,Address,Message) values('$name','$ph','$email','$add','$msg')";
if (mysqli_query($con, $sql))
{   echo "New record created successfully"; }
else
{ echo "Failed to Insert record: " . mysqli_error($con); }
mysqli_close($con );
**/





# -- this is insert.php --

/*
 * The follwing Condition checks whether a client requested the insert.php through
 * the POST method with the u_name, u_age, and u_email
 * 
 * u_name, u_age, and u_email - You can also see these in the HTML Form (index.html) -
 * These are keys to access the actual data provided by a user.
 
if (isset($_POST['btnsubmit'])) :

    # Database Connection my_test_db is the Database name.
    $db_conn = mysqli_connect('localhost', 'root', '', 'Saiagro');

    # Assigning user data to variables for easy access later.
    $name= $_POST['Name'];
	$ph= $_POST['PhoneNo'];
	$email= $_POST['Email'];
	$add= $_POST['Address'];
	$msg= $_POST['Massage'];

    # SQL query for Inserting the Form Data into the users table.
    $sql = "INSERT INTO entry_details(Name, Phone_No, Email,Address,Message) values('$name','$ph','$email','$add','$msg')";

    # Executing the Above SQL query.
    $query = mysqli_query($db_conn, $sql);

    # Checks that the query executed successfully
    
	
	$db_conn->close();
	
*/

?>
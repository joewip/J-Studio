<?php
// Database connection parameters
$servername = "localhost"; // or your database server address
$username = "id21974532_jstudio"; // your database username
$password = "@Joey123"; // your database password
$database = "id21974532_jstudio"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Collect form data
    $first_name = $_POST["firstName"];
    $last_name = $_POST["lastName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash password
    
    // SQL to check if the email already exists
    $sql_check_email = "SELECT * FROM users WHERE email='$email'";
    $result_check_email = $conn->query($sql_check_email);

    // Check if the result has any rows
    if ($result_check_email->num_rows > 0) {
        // Email already exists, display error message or handle it accordingly
        $error = "Email is already taken";
        header("Location: register.php?error=" . urlencode($error)); // Pass error as a parameter
        exit;
    } else {
        // Generate a random verification code
       
        // Send verification email
        try {
            
            $sql = "INSERT INTO users (firstname, lastname, email, phone_no, password, verification_code) VALUES ('$first_name', '$last_name', '$email', '$phone', '$password', '$verification_code')";

            if ($conn->query($sql) === TRUE) {
                $user_id = $conn->insert_id;

                header("Location: address.php?user_id=$user_id");
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } catch (Exception $e) {
            echo "Error";
        }
    }
}

?>

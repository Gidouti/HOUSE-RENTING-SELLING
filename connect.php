<?php
include 'signup.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phoneNumber"];
    $userType = $_POST["role"];
    $password = $_POST["Password"];
    $confirmPassword = $_POST["ConfirmPassword"]; // Make sure this matches the form field name

    if ($password === $confirmPassword) {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        
        $sql = "INSERT INTO user_credentials (UserFirstName,UserLastName,UserEmail,UserPassword,UserPhoneNumber,UserType) VALUES ('$firstName', '$lastName', '$email','$hashedPassword','$phoneNumber','$userType')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Passwords do not match. Please try again.";
    }
}

$conn->close();
?>

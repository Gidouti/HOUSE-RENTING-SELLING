

<?php
$servername = "localhost";
$username = "root";
$dbpasswd = ""; // Remove the space for an empty password
$dbname = "CEF345"; // Corrected variable name
$conn = null; // Initialize with null for clarity

try {
    // Corrected the variable name for $dbname and removed quotes around variables
    $conn = mysqli_connect($servername, $username, $dbpasswd, $dbname);

    // Check connection
    if (!$conn) {
        throw new mysqli_sql_exception("Connection failed: " . mysqli_connect_error());
    }
    
    echo "Connected successfully";
} catch (mysqli_sql_exception $e) {
    echo "Did not connect: " . $e->getMessage();
}

?>
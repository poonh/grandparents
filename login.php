<?php
$password = "your_password_here"; // Set your desired password here

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entered_password = $_POST["password"];

    // Check if the entered password matches the stored password
    if ($entered_password === $password) {
        // Password is correct, grant access to the protected content
        // For demonstration purposes, you can redirect to another page
        header("Location: protected_page.php");
        exit();
    } else {
        // Password is incorrect, display an error message
        echo "Incorrect password. Please try again.";
    }
}
?>

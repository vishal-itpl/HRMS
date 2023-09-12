<?php
session_start();

// Check if the user is already logged in (you can use more secure authentication methods)
if (isset($_SESSION['empId'])) {
    header("Location: try.php"); // Redirect to the leave application page
    exit();
}

// Handle form submission for user login
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Perform user authentication here (e.g., check username and password against a database)
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Simulate authentication for demonstration purposes
    if ($username === "your_username" && $password === "your_password") {
        // Replace 'your_empId' with the actual empId of the authenticated user
        $_SESSION['empId'] = 'your_empId';

        header("Location: leave_application.php"); // Redirect to the leave application page
        exit();
    } else {
        $loginError = "Invalid username or password"; // Display an error message
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include your CSS and other head elements here -->
</head>
<body>
    <!-- Your login form here -->
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <button type="submit">Login</button>
    </form>

    <?php if (isset($loginError)) { echo $loginError; } ?>
</body>
</html>
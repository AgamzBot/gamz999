<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        // Connect to database
        $conn = new mysqli("localhost", "root", "", "db_dashboard");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL statement
        $stmt = $conn->prepare("SELECT username, password FROM db_register WHERE email = ?");
        $stmt->bind_param("s", $email);
        
        // Execute the statement
        $stmt->execute();
        
        // Bind the result
        $stmt->bind_result($username, $stored_password);
        
        // Fetch the result
        if ($stmt->fetch()) {
            // Check if the provided password matches the stored password
            if ($password === $stored_password) {
                // Login successful
                header("Location: dashboard.php");
                // Redirect or do further processing
            } else {
                // Invalid password
                echo "Incorrect password.";
            }
        } else {
            // User not found
            echo "User not found.";
        }
        
        // Close statement and database connection
        $stmt->close();
        $conn->close();
    } else {
        // All fields are required
        echo "All fields are required.";
    }
} else {
    // Redirect to login page if not submitted via POST
    header("Location: login.html");
    exit;
}
?>

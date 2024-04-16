<?php
session_start(); // Start the session

// Include configuration file
require 'config.php'; 

// Check if the form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate input
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = mysqli_real_escape_string($mysqli, $_POST['username']); // Sanitize the username
        $password = $_POST['password']; // No need to escape passwords

        // Create SQL query to fetch user from database
        $query = "SELECT username, password FROM users WHERE username = ?";

        // Prepare the statement to avoid SQL injection
        if ($stmt = $mysqli->prepare($query)) {
            $stmt->bind_param("s", $username); // Bind the $username to the parameter
            $stmt->execute(); // Execute the query
            $stmt->store_result(); // Store the result of the query

            // Check if we have exactly one user with this username
            if ($stmt->num_rows == 1) {
                $stmt->bind_result($fetched_username, $fetched_password); // Bind the result variables
                $stmt->fetch(); // Fetch the values

                // Verify the password (assuming the stored password is hashed)
                if (password_verify($password, $fetched_password)) {
                    $_SESSION['logged_in'] = true; // Set the session variable
                    $_SESSION['username'] = $username; // Store the username in session data
                    header("Location: ../../__dashboard/dashboard.php"); // Redirect to dashboard
                    exit();
                } else {
                    // Password does not match
                    $error = "Invalid username or password";
                    header("Location: ./artisanapp/login.php?error=" . urlencode($error)); // Redirect back to login with error
                    exit();
                }
            } else {
                // No user found with that username
                $error = "Invalid username or password";
                header("Location: ../artisanapp/login.php?error=" . urlencode($error)); // Redirect back to login with error
                exit();
            }
            $stmt->close(); // Close statement
        } else {
            echo "Something went wrong with the preparation of the SQL statement.";
        }
    } else {
        header("Location: ../artisanapp/login.php?error=" . urlencode("Please fill in all required fields."));
        exit();
    }
}

$mysqli->close(); // Close database connection
?>

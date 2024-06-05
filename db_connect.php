<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db_name = 'digital';
$port = 3308;  // Your custom port number

// Create a database connection
$conn = mysqli_connect($servername, $username, $password, $db_name, $port);

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize user inputs
    $name = $_POST['name'];
    $email = $_POST['email'];
    $project_description = $_POST['project_description'];

    // Create a prepared statement
    $stmt = $conn->prepare('INSERT INTO users (name, email, project_description) VALUES (?, ?, ?)');
    
    if ($stmt) {
        // Bind parameters
        $stmt->bind_param('sss', $name, $email, $project_description);
        
        // Execute the statement
        if ($stmt->execute()) {
            // Redirect to a success page
            header('Location: index.php');
            exit;
        } else {
            echo 'Error executing the query: ' . $stmt->error;
        }
        
        // Close the statement
        $stmt->close();
    } else {
        echo 'Error creating the statement: ' . $conn->error;
    }
}

// Close the database connection
mysqli_close($conn);
?>

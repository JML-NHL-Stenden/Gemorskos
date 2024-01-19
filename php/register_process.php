<?php
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST, "username");
    $password = filter_input(INPUT_POST, "password");
    $role = filter_input(INPUT_POST, "role");

    
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    try {
        $stmt = $conn->prepare("INSERT INTO USERS (username, password, role) VALUES (:username, :password, :role)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':role', $role);

        $stmt->execute();
        echo '<!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" href="../css/styles.css">
                    <title>Gemorskos - Registration Confirmation</title>
                </head>
                <body>
        
                    <div class="confirmation-container">
                        <h1>Thank you for registering!</h1>
                        <p>Your registration was successful.</p>
                        <a href="index.php"><button>Go to Login Page</button></a>
                    </div>
        
                </body>
            </html>
        ';
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

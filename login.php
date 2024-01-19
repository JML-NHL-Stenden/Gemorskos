<?php
session_start();
require_once 'db.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        $stmt = $conn->prepare("SELECT * FROM USERS WHERE username=:username");
        $stmt->bindParam(':username', $username);

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $hashedPassword = $row['password'];

            // Verify the password
            if (password_verify($password, $hashedPassword)) {
                $role = $row['role'];
                $_SESSION['username'] = $username;

                switch ($role) {
                    case 'editor':
                        header("Location: editor.php");
                        break;
                    case 'chief_editor':
                        header("Location: chief_editor.php");
                        break;
                    case 'photographer':
                        header("Location: photographer.php");
                        break;
                    case 'journalist':
                        header("Location: journalist.php");
                        break;
                    default:
                        echo "Invalid role!";
                }
            } else {
                echo "Invalid password!";
            }
        } else {
            echo "Invalid username!";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

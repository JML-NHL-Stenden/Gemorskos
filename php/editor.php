<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$username = $_SESSION['username'];

// File upload handling
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['file'])) {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["file"]["name"]);

    // Check if the file is an allowed type
    $allowedTypes = ['jpg', 'jpeg', 'png', 'pdf']; // Add more allowed file types if needed
    $fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    if (!in_array($fileExtension, $allowedTypes)) {
        echo "Error: Invalid file type.";
        exit();
    }

    // Check if the file already exists
    if (file_exists($targetFile)) {
        echo "Error: File already exists.";
        exit();
    }

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
        echo "File uploaded successfully.";
    } else {
        echo "Error uploading file.";
    }
}

// File overview and actions
$files = glob("uploads/*");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Gemorskos - Editor Page</title>
</head>
<body>

    <div class="editor-container">
        <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>

        <!-- File Upload Form -->
        <form action="" method="post" enctype="multipart/form-data">
            <label for="file">Upload File:</label>
            <input type="file" name="file" id="file" required accept=".jpg, .jpeg, .png, .pdf"> <!-- Specify allowed file types -->
            <button type="submit">Upload</button>
        </form>

        <!-- File Overview and Actions -->
        <h2>Your Files:</h2>
        <ul>
            <?php foreach ($files as $file) : ?>
                <li>
                    <?php echo htmlspecialchars(basename($file)); ?>
                    
                    <a href="delete_file.php?file=<?php echo urlencode(basename($file)); ?>">Delete</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

</body>
</html>

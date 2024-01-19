<?php
$file = isset($_GET['file']) ? urldecode($_GET['file']) : '';

if (empty($file) || !file_exists("uploads/{$file}")) {
    echo "Error: File not found.";
    exit();
}

// Add file deletion logic here
if (unlink("uploads/{$file}")) {
    echo "File deleted successfully.";
} else {
    echo "Error deleting file.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Gemorskos - Delete File</title>
</head>
<body>

    <div class="delete-file-container">
        <h1>Delete File: <?php echo htmlspecialchars($file); ?></h1>
    </div>

</body>
</html>

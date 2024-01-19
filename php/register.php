<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Gemorskos - Register</title>
</head>
<body>

    <div class="register-container">
        <h1>Register for Gemorskos</h1>
        <form action="register_process.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="role">Role:</label>
            <select id="role" name="role" required>
                <option value="editor">Editor</option>
                <option value="chief_editor">Chief Editor</option>
                <option value="photographer">Photographer</option>
                <option value="journalist">Journalist</option>
            </select>

            <button type="submit">Register</button>
        </form>
    </div>

</body>
</html>

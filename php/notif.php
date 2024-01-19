

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Success</title>
    <style>
        body {
            background-color: #fce4ec; /* Light Pink */
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            font-family: 'Arial', sans-serif;
        }

        .container {
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            background-color: #ff4081; /* Strong Pink */
            color: #ffffff; /* White */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            margin-top: 0;
        }

        .goback-button {
            background-color: #ffffff; /* White */
            color: #ff4081; /* Strong Pink */
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Successfully Registered</h1>
        <p>Thank you for registering!</p>
        <button class="goback-button" onclick="goBack()">Go Back</button>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>

</html>


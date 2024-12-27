<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Authenticate Page</title>
        <link rel="stylesheet" href="style.css">
        <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f0f8ff;
    margin: 20px;
    padding: 20px;
    justify-content: center;
    text-align: center;
}

    </style>
    </head>

    <body>
        <h1>
        <?php

        include 'Database.php';
        include 'User.php';

        // Create an instance of the Database class and get the connection
        $database = new Database();
        $db = $database->getConnection();

        // Create an instance of the User class
        $users = new User($db);

        // Register the user using POST data
        if ($users->createUser($_POST['matric'], $_POST['name'], $_POST['password'], $_POST['role'])) {
            echo "Connection successful. User registered successfully.";
        } else {
            echo "User registration failed.";
        }

        // Close the connection
        $db->close();

        ?>

        <p>You may proceed to the <a href="http://localhost/lab5b/login.php">login page.</a></p>

        </h1>
    </body>
</html>

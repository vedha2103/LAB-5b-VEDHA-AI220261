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

nav {
    margin-bottom: 20px;
}

nav a {
    margin-right: 10px;
    text-decoration: none;
    color: #007BFF;
}

nav a:hover {
    text-decoration: underline;
}

    </style>
    </head>

    <body>
        <nav>
        <a href="display.php">Dashboard</a> | 
        <a href="logout.php">Logout</a>
        </nav>
        <h1>
            <?php
                include 'Database.php';
                include 'User.php';

                session_start();

                if (isset($_POST['submit']) && ($_SERVER['REQUEST_METHOD'] == 'POST')) {
                    // Create database connection
                    $database = new Database();
                    $db = $database->getConnection();

                    // Sanitize inputs using mysqli_real_escape_string
                    $matric = $db->real_escape_string($_POST['matric']);
                    $password = $db->real_escape_string($_POST['password']);

                    // Validate inputs
                    if (!empty($matric) && !empty($password)) {
                        $users = new User($db);
                        $userDetails = $users->getUser($matric);

                        // Check if user exists and verify password
                        if ($userDetails && password_verify($password, $userDetails['password'])) {
                            $_SESSION['loggedin'] = true;
                            $_SESSION['matric'] = $userDetails['matric'];
                            $_SESSION['name'] = $userDetails['name'];
                            $_SESSION['role'] = $userDetails['role'];
                            echo 'Login Successful. <a href="display.php">Go to Dashboard</a>';
                        } else {
                            echo 'Invalid username or password, try <a href="login.php">login</a> again.';
                        }
                    } 
                }
            ?>
        </h1>
    </body>
</html>




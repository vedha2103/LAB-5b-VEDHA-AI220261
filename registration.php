<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f0f8ff;
    margin: 20px;
    padding: 20px;
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

table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

form {
    margin-bottom: 20px;
}

    </style>
</head>

<body>
    <h1>Welcome!!</h1>
    <h2>Registration Page</h2>
    <form action="insert.php" method="post">
        <label for="matric">Matric:</label>
        <input type="text" name="matric" id="matric" required><br>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>
        <label for="role">Role:</label>
        <select name="role" id="role" required>
            <option value="">Please select</option>
            <option value="lecturer">Lecturer</option>
            <option value="student">Student</option>
        </select>
        <br><br>
        <input type="submit" name="submit" value="Register">
    </form>

    <p>Already have an account? <a href="http://localhost/lab5b/login.php">Login here.</a></p>

</body>

</html>
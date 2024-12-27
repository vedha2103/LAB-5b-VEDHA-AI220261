<?php

session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

include 'Database.php';
include 'User.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieve the matric value from the POST request
    $matric = $_GET['matric'];

    echo "<script>
    if (confirm('Are you sure you want to delete this user?')) {
        // Proceed with the deletion
        window.location.href = 'delete.php?confirm=1&matric=$matric';
    } else {
        // Redirect back if user cancels
        window.location.href = 'display.php';
    }
</script>";
}

// Check if confirmation is received
if (isset($_GET['confirm']) && $_GET['confirm'] == 1) {
// Create an instance of the Database class and get the connection
$database = new Database();
$db = $database->getConnection();

// Create an instance of the User class
$users = new User($db);
$users->deleteUser($matric);

// Close the connection
$db->close();

// Redirect after deletion
header("Location: display.php");
exit;
}
?>
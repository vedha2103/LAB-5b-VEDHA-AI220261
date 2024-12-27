<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

include 'Database.php';
include 'User.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matric = $_POST['matric'];
    $name = $_POST['name'];
    $role = $_POST['role'];

    $database = new Database();
    $db = $database->getConnection();

    $users = new User($db);
    $result = $users->updateUser($matric, $name, $role);

    if ($result === true) {
        header("Location: display.php?msg=update_success");
    } else {
        echo "Error: " . $result;
    }

    $db->close();
}
?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$db = new PDO("odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=C:\Users\Lakshit\Documents\user.accdb");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = $db->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user["password"])) {
        echo "Login successful!";
    } else {
        echo "Invalid username or password!";
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    print_r($_POST); // Output the submitted form data for debugging
    // Continue with your database insertion logic
}

?>

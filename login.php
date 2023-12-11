<?php
$db = new PDO("odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=C:\\path\\to\\users.accdb");

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
?>

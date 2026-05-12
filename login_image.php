<?php
session_start();

$users = [
    "mira" => "grenade",
    "fuze" => "cluster"
];

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

   if (isset($users[$username]) && $users[$username] === $password) {
    header("Location: weapons_list.php");
    exit();
}else {
        $message = "Λάθος στοιχεία!";
    }
}
?>

<!DOCTYPE html>
<html lang="el">
<head>
<meta charset="UTF-8">
<title>Login</title>
<style>
body {
    margin: 0;
    font-family: Arial;
    background: #3b4b3b;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    text-align: center;
    background: rgba(0,0,0,0.6);
    padding: 30px;
    border-radius: 15px;
    color: white;
    width: 300px;
}

.logo {
    width: 200px;
    margin-bottom: 20px;
}

input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
    border: none;
}

button {
    width: 100%;
    padding: 10px;
    background: olive;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.msg {
    color: red;
}
</style>
</head>
<body>

<div class="container">
    <img src="logo.png" class="logo">

    <h2>Είσοδος</h2>

    <?php if($message): ?>
        <p class="msg"><?php echo $message; ?></p>
    <?php endif; ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Όνομα χρήστη" required>
        <input type="password" name="password" placeholder="Κωδικός" required>
        <button type="submit">Είσοδος</button>
    </form>
</div>

</body>
</html>
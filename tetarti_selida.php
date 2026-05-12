<?php
$conn = new mysqli("localhost", "root", "", "ergasia_db");
$weapon_id = (int)$_GET['weapon_id'];

if (isset($_POST['action'])) {
    $amount = (int)$_POST['amount'];
    if ($_POST['action'] == 'add') {
        $conn->query("UPDATE weapons SET stock = stock + $amount WHERE id = $weapon_id");
    } else if ($_POST['action'] == 'sub') {
        $conn->query("UPDATE weapons SET stock = stock - $amount WHERE id = $weapon_id");
    }
    header("Location: view_weapon.php?weapon_id=$weapon_id");
    exit();
}

$res = $conn->query("SELECT name FROM weapons WHERE id = $weapon_id");
$weapon = $res->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <title>Διαχείριση</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #3b4b3b; color: white; display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh; margin: 0; position: relative; }
        .card { background: rgba(0, 0, 0, 0.6); padding: 40px; border-radius: 15px; border-left: 8px solid #e67e22; width: 350px; text-align: center; }
        input { padding: 10px; width: 80px; margin: 10px; border-radius: 5px; border: none; }
        .btn { padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-weight: bold; margin: 5px; color: white; width: 100%; }
        .btn-add { background: #27ae60; }
        .btn-sub { background: #c0392b; }
        .btn-view { background: #e67e22; margin-top: 20px; text-decoration: none; display: inline-block; }
        .top-right-logo { position: absolute; top: 20px; right: 20px; width: 120px; }
    </style>
</head>
<body>
    <img src="logo.png" alt="Logo" class="top-right-logo">
    <div class="card">
        <h2><?php echo $weapon['name']; ?></h2>
        <form method="POST">
            <input type="number" name="amount" value="1" min="1"><br>
            <button type="submit" name="action" value="add" class="btn btn-add">Προσθήκη Ποσότητας</button>
            <button type="submit" name="action" value="sub" class="btn btn-sub">Αφαίρεση Ποσότητας</button>
        </form>
        <a href="view_weapon.php?weapon_id=<?php echo $weapon_id; ?>" class="btn btn-view">Προβολή Λεπτομερειών</a>
    </div>
</body>
</html>

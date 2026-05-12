<?php
$conn = new mysqli("localhost", "root", "", "ergasia_db");
$id = (int)$_GET['weapon_id'];

$weapon_sql = "SELECT * FROM weapons WHERE id = $id";
$weapon_result = $conn->query($weapon_sql);
$weapon = $weapon_result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <title>Λεπτομέρειες</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #3b4b3b; padding: 50px; color: white; display: flex; flex-direction: column; align-items: center; position: relative; }
        .card { background: #3b4b3b; max-width: 500px; padding: 30px; border: 2px solid rgba(255, 255, 255, 0.2); border-left: 10px solid #e67e22; border-radius: 10px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); }
        h1 { color: #e67e22; }
        .stat-box { background: rgba(0,0,0,0.3); padding: 20px; border-radius: 5px; margin: 20px 0; border: 1px solid rgba(230, 126, 34, 0.5); text-align: center; }
        .quantity { display: block; color: #e67e22; font-weight: bold; font-size: 2em; margin-top: 10px; }
        .back-link { margin-top: 25px; display: inline-block; text-decoration: none; color: white; background: #e67e22; padding: 10px 20px; border-radius: 5px; }
        .top-right-logo { position: absolute; top: 20px; right: 20px; width: 120px; }
    </style>
</head>
<body>
    <img src="logo.png" alt="Logo" class="top-right-logo">
    <div class="card">
        <?php if ($weapon): ?>
            <h1><?php echo $weapon['name']; ?></h1>
            <p><strong>Κατηγορία:</strong> <?php echo $weapon['category']; ?></p>
            <div class="stat-box">
                <strong>Διαθέσιμα Τεμάχια στη Βάση</strong>
                <span class="quantity"><?php echo $weapon['stock']; ?></span>
            </div>
            <p><strong>Περιγραφή:</strong><br><?php echo $weapon['description']; ?></p>
        <?php endif; ?>
        <a href="weapons_list.php" class="back-link">← Πίσω στο Οπλοστάσιο</a>
    </div>
</body>
</html>

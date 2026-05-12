<?php
$conn = new mysqli("localhost", "root", "", "ergasia_db");
$result = $conn->query("SELECT id, name FROM weapons");
?>
<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <title>Οπλοστάσιο</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #3b4b3b; color: white; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; position: relative; }
        .box { background: rgba(0, 0, 0, 0.6); padding: 30px; border-radius: 10px; text-align: center; border: 1px solid rgba(255,255,255,0.1); }
        select { padding: 10px; width: 200px; border-radius: 5px; margin-bottom: 20px; }
        button { padding: 10px 20px; background: #e67e22; border: none; color: white; cursor: pointer; border-radius: 5px; font-weight: bold; }
        .top-right-logo { position: absolute; top: 20px; right: 20px; width: 120px; }
    </style>
</head>
<body>
    <img src="logo.png" alt="Logo" class="top-right-logo">
    <div class="box">
        <h2>Επιλογή Όπλου</h2>
        <form action="manage_weapon.php" method="GET">
            <select name="weapon_id">
                <?php while($row = $result->fetch_assoc()): ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                <?php endwhile; ?>
            </select><br>
            <button type="submit">Διαχείριση Όπλου</button>
        </form>
    </div>
</body>
</html>

<?php
$host = 'db';
$dbname = 'domainenoah';
$user = 'root';
$pass = 'root';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $stmt = $pdo->query("SELECT * FROM ville");
    $villes = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>domainenoah.local</title>
</head>
<body>
    <h1>domainenoah.local</h1>
    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Région</th>
            <th>Population</th>
        </tr>
        <?php foreach ($villes as $ville): ?>
        <tr>
            <td><?= htmlspecialchars($ville['nom']) ?></td>
            <td><?= htmlspecialchars($ville['region']) ?></td>
            <td><?= number_format($ville['population'], 0, '', ' ') ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

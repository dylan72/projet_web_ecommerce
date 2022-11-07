<?php
include('bdd.php');
require ('menu.html'); //affichage du menu
?>

<?php
//Requêtes de test
$sql = "SELECT * FROM article";
$stmt = $db->query($sql);
?>

<!DOCTYPE html>
<html>
<body>
<h1>Liste des articles</h1>
<table>
    <thead>
    <tr>
        <th>Nom</th>
    </tr>
    </thead>
    <tbody>
    <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
        <tr>
            <td><?php echo htmlspecialchars($row['Nom_Article']); ?></td>
        </tr>
    <?php endwhile; ?>
    </tbody>
</table>
</body>
</html>

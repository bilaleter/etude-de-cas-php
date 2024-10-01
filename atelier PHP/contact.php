<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
    if (isset($_GET['nom']) && !empty($_GET['nom']) && isset($_GET['prenom']) && !empty($_GET['prenom']) && isset($_GET['email']) && !empty($_GET['email']) &&
        isset($_GET['tel']) && !empty($_GET['tel']) && isset($_GET['adrs']) && !empty($_GET['adrs']) && isset($_GET['code']) && !empty($_GET['code'])) {
    ?>
        <table border="1">
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Tel</th>
                <th>Adresse</th>
                <th>Code Postal</th>
            </tr>
            <tr>
                <td><?php echo htmlspecialchars($_GET['nom']); ?></td>
                <td><?php echo htmlspecialchars($_GET['prenom']); ?></td>
                <td><?php echo htmlspecialchars($_GET['email']); ?></td>
                <td><?php echo htmlspecialchars($_GET['tel']); ?></td>
                <td><?php echo htmlspecialchars($_GET['adrs']); ?></td>
                <td><?php echo htmlspecialchars($_GET['code']); ?></td>
            </tr>
        </table>
    <?php
    } else {
        echo "<p> Champs manquants </p>";
    }
    ?>
</body>
</html>
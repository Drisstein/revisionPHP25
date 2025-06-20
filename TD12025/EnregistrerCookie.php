<?php
// Enregistrer le nom dans un cookie si le formulaire est soumis
if (isset($_POST['nom'])) {
    setcookie('nom_utilisateur', $_POST['nom'], time() + 3600); // 1 heure
    header('Location: '.$_SERVER['PHP_SELF']);
    exit();
}

// Récupérer le nom depuis le cookie s'il existe
$nom = isset($_COOKIE['nom_utilisateur']) ? $_COOKIE['nom_utilisateur'] : '';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire avec Cookie</title>
</head>
<body>
    <form action="" method="post">
        <label for="nom">Votre nom :</label>
        <input type="text" id="nom" name="nom" required>
        <input type="submit" value="Envoyer">
    </form>

    <?php if ($nom): ?>
        <p>Bonjour, <strong><?= htmlspecialchars($nom) ?></strong> !</p>
    <?php endif; ?>
</body>
</html>
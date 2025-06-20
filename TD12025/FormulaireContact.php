<?PHP
if (isset ($_POST['submit'])) {
    $prenom = ($_POST['prenom']);
    $nom = ($_POST['nom']);
    $email = ($_POST['email']);
      $message = ($_POST['message']);
}

    echo "Merci $prenom $nom $email $message, votre message a été envoyé avec succès.";


?>

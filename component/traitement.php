<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Récupérer les données du formulaire
  $nom = htmlspecialchars($_POST['nom']);
  $prenom = htmlspecialchars($_POST['prenom']);
  $email = htmlspecialchars($_POST['email']);
  $sexe = $_POST['sexe'];
  $option = $_POST['option'];

  // Valider le sexe
  if(isset($_POST['sexe']) && ($_POST['sexe'] == 'homme' || $_POST['sexe'] == 'femme')) {
    $sexe = $_POST['sexe'];
  } else {
    echo "Veuillez sélectionner un sexe valide";
  }

  // Afficher les données dans une table HTML
  echo "<table>";
  echo "<tr><td>Nom</td><td>$nom</td></tr>";
  echo "<tr><td>Prénom</td><td>$prenom</td></tr>";
  echo "<tr><td>Email</td><td>$email</td></tr>";
  echo "<tr><td>Sexe</td><td>$sexe</td></tr>";
  echo "<tr><td>Option</td><td>$option</td></tr>";
  echo "</table>";
}
?>

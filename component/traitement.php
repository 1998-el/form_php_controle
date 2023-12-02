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
  echo "<table style='border-collapse: collapse;width: 100%;'>
  <tr>
      <th style='order: 1px solid black;padding: 8px;text-align: center;background-color: #f2f2f2;'>Nom</th>
      <th style='order: 1px solid black;padding: 8px;text-align: center;background-color: #f2f2f2;'>Prenom</th>
      <th style='order: 1px solid black;padding: 8px;text-align: center;background-color: #f2f2f2;'>Email</th>
      <th style='order: 1px solid black;padding: 8px;text-align: center;background-color: #f2f2f2;'>Sexe</th>
      <th style='order: 1px solid black;padding: 8px;text-align: center;background-color: #f2f2f2;'>Specialite</th>
  </tr>
  <tr style='border: 1px solid #ccc;'>
      <td style='order: 1px solid black;padding: 8px;text-align: center;border: 1px solid #ccc;'>$nom</td>
      <td style='order: 1px solid black;padding: 8px;text-align: center;border: 1px solid #ccc;'>$prenom</td>
      <td style='order: 1px solid black;padding: 8px;text-align: center;border: 1px solid #ccc;'>$email</td>
      <td style='order: 1px solid black;padding: 8px;text-align: center;border: 1px solid #ccc;'>$sexe</td>
      <td style='order: 1px solid black;padding: 8px;text-align: center;border: 1px solid #ccc;'>$option</td>
  </tr>
</table>";
  
 
}
?>

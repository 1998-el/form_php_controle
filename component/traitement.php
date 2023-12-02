<?php

class FormValidator {
  private $nom;
  private $prenom;
  private $email;
  private $sexe;
  private $option;

  public function __construct($nom, $prenom, $email, $sexe, $option) {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->email = $email;
    $this->sexe = $sexe;
    $this->option = $option;
  }

  public function validate() {
    $errors = [];

    // Valider le nom
    if (empty($this->nom)) {
      $errors['nom'] = "Le champ nom est requis";
    }

    // Valider le prénom
    if (empty($this->prenom)) {
      $errors['prenom'] = "Le champ prénom est requis";
    }

    // Valider l'email
    if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
      $errors['email'] = "L'adresse email n'est pas valide";
    }

    // Valider le sexe
    if ($this->sexe !== 'homme' && $this->sexe !== 'femme') {
      $errors['sexe'] = "Veuillez sélectionner un sexe valide";
    }

    // Valider l'option
    if (empty($this->option)) {
      $errors['option'] = "Veuillez sélectionner une option";
    }

    return $errors;
  }
}

// Récupérer les données du formulaire
$nom = htmlspecialchars($_POST['nom'] ?? '');
$prenom = htmlspecialchars($_POST['prenom'] ?? '');
$email = htmlspecialchars($_POST['email'] ?? '');
$sexe = $_POST['sexe'] ?? '';
$option = $_POST['option'] ?? '';

// Créer une instance de la classe FormValidator
$formValidator = new FormValidator($nom, $prenom, $email, $sexe, $option);

// Valider les données du formulaire
$errors = $formValidator->validate();

// Afficher les erreurs s'il y en a
if (!empty($errors)) {
  foreach ($errors as $error) {
    echo $error . "<br>";
  }
} else {
  // Afficher les données dans une table HTML
  echo "<table style='border-collapse: collapse;width: 100%;'>
  <tr>
      <th style='border: 1px solid black;padding: 8px;text-align: center;background-color: #f2f2f2;'>Nom</th>
      <th style='border: 1px solid black;padding: 8px;text-align: center;background-color: #f2f2f2;'>Prenom</th>
      <th style='border: 1px solid black;padding: 8px;text-align: center;background-color: #f2f2f2;'>Email</th>
      <th style='border: 1px solid black;padding: 8px;text-align: center;background-color: #f2f2f2;'>Sexe</th>
      <th style='border: 1px solid black;padding: 8px;text-align: center;background-color: #f2f2f2;'>Specialite</th>
  </tr>
  <tr style='border: 1px solid #ccc;'>
      <td style='border: 1px solid black;padding: 8px;text-align: center;'>$nom</td>
      <td style='border: 1px solid black;padding: 8px;text-align: center;'>$prenom</td>
      <td style='border: 1px solid black;padding: 8px;text-align: center;'>$email</td>
      <td style='border: 1px solid black;padding: 8px;text-align: center;'>$sexe</td>
      <td style='border: 1px solid black;padding: 8px;text-align: center;'>$option</td>
  </tr>
</table>";
}
?>

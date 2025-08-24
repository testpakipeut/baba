<?php
// Configuration
$admin_email = 'techniquestopomali@gmail.com';
$site_name = 'TECHNIQUES TOPO';

// Vérification de la méthode POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// Récupération et nettoyage des données
$nom = isset($_POST['nom']) ? trim($_POST['nom']) : '';
$entreprise = isset($_POST['entreprise']) ? trim($_POST['entreprise']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$telephone = isset($_POST['telephone']) ? trim($_POST['telephone']) : '';
$type_projet = isset($_POST['type_projet']) ? trim($_POST['type_projet']) : '';
$description = isset($_POST['description']) ? trim($_POST['description']) : '';
$localisation = isset($_POST['localisation']) ? trim($_POST['localisation']) : '';
$delai = isset($_POST['delai']) ? trim($_POST['delai']) : '';

// Validation des champs obligatoires
$errors = [];
if (empty($nom)) $errors[] = 'Le nom est obligatoire';
if (empty($email)) $errors[] = 'L\'email est obligatoire';
if (empty($telephone)) $errors[] = 'Le téléphone est obligatoire';
if (empty($type_projet)) $errors[] = 'Le type de projet est obligatoire';
if (empty($description)) $errors[] = 'La description du projet est obligatoire';
if (empty($localisation)) $errors[] = 'La localisation est obligatoire';

// Validation de l'email
if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'L\'email n\'est pas valide';
}

// Si il y a des erreurs, retourner en JSON
if (!empty($errors)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'errors' => $errors]);
    exit;
}

// Préparation du message
$subject = "Nouvelle demande de devis - $site_name";
$message = "
Nouvelle demande de devis reçue sur le site web.

INFORMATIONS CLIENT :
- Nom : $nom
- Entreprise : " . ($entreprise ?: 'Non renseigné') . "
- Email : $email
- Téléphone : $telephone

PROJET :
- Type : $type_projet
- Localisation : $localisation
- Délai souhaité : " . ($delai ?: 'Non renseigné') . "

DESCRIPTION :
$description

---
Ce message a été envoyé automatiquement depuis le formulaire de devis du site web.
";

// En-têtes de l'email
$headers = [
    'From: noreply@techniquestopo.ml',
    'Reply-To: ' . $email,
    'Content-Type: text/plain; charset=UTF-8',
    'X-Mailer: PHP/' . phpversion()
];

// Tentative d'envoi de l'email
$mail_sent = mail($admin_email, $subject, $message, implode("\r\n", $headers));

// Email de confirmation au client
$client_subject = "Confirmation de votre demande de devis - $site_name";
$client_message = "
Bonjour $nom,

Nous avons bien reçu votre demande de devis pour votre projet de $type_projet.

Notre équipe va étudier votre demande et vous recontactera dans les plus brefs délais.

Récapitulatif de votre demande :
- Type de projet : $type_projet
- Localisation : $localisation
- Délai souhaité : " . ($delai ?: 'Non renseigné') . "

Pour toute question urgente, vous pouvez nous contacter :
- Téléphone : +223 20 20 79 86
- WhatsApp : +223 76 62 84 99
- Email : techniquestopomali@gmail.com

Cordialement,
L'équipe TECHNIQUES TOPO
";

$client_headers = [
    'From: noreply@techniquestopo.ml',
    'Content-Type: text/plain; charset=UTF-8',
    'X-Mailer: PHP/' . phpversion()
];

$client_mail_sent = mail($email, $client_subject, $client_message, implode("\r\n", $client_headers));

// Sauvegarde en base de données (optionnel)
try {
    // Ici vous pourriez ajouter le code pour sauvegarder en base de données
    // Par exemple avec PDO ou MySQLi
    $devis_data = [
        'nom' => $nom,
        'entreprise' => $entreprise,
        'email' => $email,
        'telephone' => $telephone,
        'type_projet' => $type_projet,
        'description' => $description,
        'localisation' => $localisation,
        'delai' => $delai,
        'date_creation' => date('Y-m-d H:i:s'),
        'ip' => $_SERVER['REMOTE_ADDR'] ?? 'unknown'
    ];
    
    // Code de sauvegarde en base (à adapter selon votre configuration)
    // saveDevisToDatabase($devis_data);
    
} catch (Exception $e) {
    // Log de l'erreur (optionnel)
    error_log("Erreur lors de la sauvegarde du devis : " . $e->getMessage());
}

// Réponse de succès
if ($mail_sent) {
    echo json_encode([
        'success' => true,
        'message' => 'Votre demande de devis a été envoyée avec succès. Nous vous recontacterons rapidement.',
        'devis_id' => uniqid('DEV_')
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Une erreur est survenue lors de l\'envoi. Veuillez réessayer ou nous contacter directement.',
        'errors' => ['Erreur technique lors de l\'envoi']
    ]);
}
?> 
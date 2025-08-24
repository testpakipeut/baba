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
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$sujet = isset($_POST['sujet']) ? trim($_POST['sujet']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

// Validation des champs obligatoires
$errors = [];
if (empty($nom)) $errors[] = 'Le nom est obligatoire';
if (empty($email)) $errors[] = 'L\'email est obligatoire';
if (empty($sujet)) $errors[] = 'Le sujet est obligatoire';
if (empty($message)) $errors[] = 'Le message est obligatoire';

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

// Préparation du message admin
$subject = "Nouveau message de contact - $site_name";
$admin_message = "
Nouveau message de contact reçu sur le site web.

INFORMATIONS EXPÉDITEUR :
- Nom : $nom
- Email : $email

SUJET : $sujet

MESSAGE :
$message

---
Ce message a été envoyé automatiquement depuis le formulaire de contact du site web.
Date : " . date('d/m/Y H:i:s') . "
IP : " . ($_SERVER['REMOTE_ADDR'] ?? 'unknown') . "
";

// En-têtes de l'email admin
$headers = [
    'From: noreply@techniquestopo.ml',
    'Reply-To: ' . $email,
    'Content-Type: text/plain; charset=UTF-8',
    'X-Mailer: PHP/' . phpversion()
];

// Envoi de l'email admin
$admin_mail_sent = mail($admin_email, $subject, $admin_message, implode("\r\n", $headers));

// Email de confirmation au client
$client_subject = "Confirmation de votre message - $site_name";
$client_message = "
Bonjour $nom,

Nous avons bien reçu votre message concernant : $sujet

Notre équipe va l'étudier et vous répondra dans les plus brefs délais.

Récapitulatif de votre message :
$message

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
    $contact_data = [
        'nom' => $nom,
        'email' => $email,
        'sujet' => $sujet,
        'message' => $message,
        'date_creation' => date('Y-m-d H:i:s'),
        'ip' => $_SERVER['REMOTE_ADDR'] ?? 'unknown',
        'statut' => 'nouveau'
    ];
    
    // Code de sauvegarde en base (à adapter selon votre configuration)
    // saveContactToDatabase($contact_data);
    
} catch (Exception $e) {
    // Log de l'erreur (optionnel)
    error_log("Erreur lors de la sauvegarde du contact : " . $e->getMessage());
}

// Réponse de succès
if ($admin_mail_sent) {
    echo json_encode([
        'success' => true,
        'message' => 'Votre message a été envoyé avec succès. Nous vous répondrons rapidement.',
        'contact_id' => uniqid('CONT_')
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Une erreur est survenue lors de l\'envoi. Veuillez réessayer ou nous contacter directement.',
        'errors' => ['Erreur technique lors de l\'envoi']
    ]);
}
?> 
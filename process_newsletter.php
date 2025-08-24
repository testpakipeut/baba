<?php
// Configuration
$admin_email = 'techniquestopomali@gmail.com';
$site_name = 'TECHNIQUES TOPO';

// Vérification de la méthode POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// Récupération et nettoyage de l'email
$email = isset($_POST['email']) ? trim($_POST['email']) : '';

// Validation de l'email
$errors = [];
if (empty($email)) {
    $errors[] = 'L\'email est obligatoire';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'L\'email n\'est pas valide';
}

// Si il y a des erreurs, retourner en JSON
if (!empty($errors)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'errors' => $errors]);
    exit;
}

// Vérification si l'email n'est pas déjà inscrit (optionnel)
// Ici vous pourriez vérifier en base de données
$already_subscribed = false; // À remplacer par une vraie vérification

if ($already_subscribed) {
    echo json_encode([
        'success' => false,
        'message' => 'Cette adresse email est déjà inscrite à notre newsletter.',
        'errors' => ['Email déjà inscrit']
    ]);
    exit;
}

// Préparation du message de notification admin
$subject = "Nouvelle inscription newsletter - $site_name";
$message = "
Nouvelle inscription à la newsletter reçue sur le site web.

EMAIL : $email
DATE : " . date('d/m/Y H:i:s') . "
IP : " . ($_SERVER['REMOTE_ADDR'] ?? 'unknown') . "

---
Ce message a été envoyé automatiquement depuis le formulaire newsletter du site web.
";

// En-têtes de l'email admin
$headers = [
    'From: noreply@techniquestopo.ml',
    'Content-Type: text/plain; charset=UTF-8',
    'X-Mailer: PHP/' . phpversion()
];

// Envoi de la notification admin
$admin_mail_sent = mail($admin_email, $subject, $message, implode("\r\n", $headers));

// Email de bienvenue au nouvel inscrit
$welcome_subject = "Bienvenue dans notre newsletter - $site_name";
$welcome_message = "
Bonjour,

Merci de vous être inscrit(e) à la newsletter de TECHNIQUES TOPO !

Vous recevrez désormais nos dernières actualités, conseils techniques et offres spéciales directement dans votre boîte mail.

À propos de TECHNIQUES TOPO :
Nous sommes un bureau d'études topographiques, cartographiques et cadastrales basé à Bamako (Mali), spécialisé dans :
- Les études et levés topographiques
- Les implantations et exécution de projets
- La cartographie et cadastre
- Les infrastructures de transport, ouvrages d'art, voiries urbaines
- Les aménagements hydro-agricoles et réseaux AEP

Pour nous contacter :
- Téléphone : +223 20 20 79 86
- WhatsApp : +223 76 62 84 99
- Email : techniquestopomali@gmail.com

Cordialement,
L'équipe TECHNIQUES TOPO

---
Pour vous désinscrire, cliquez ici : [lien de désinscription]
";

$welcome_headers = [
    'From: noreply@techniquestopo.ml',
    'Content-Type: text/plain; charset=UTF-8',
    'X-Mailer: PHP/' . phpversion()
];

$welcome_mail_sent = mail($email, $welcome_subject, $welcome_message, implode("\r\n", $welcome_headers));

// Sauvegarde en base de données (optionnel)
try {
    $newsletter_data = [
        'email' => $email,
        'date_inscription' => date('Y-m-d H:i:s'),
        'ip' => $_SERVER['REMOTE_ADDR'] ?? 'unknown',
        'statut' => 'actif',
        'token_desinscription' => bin2hex(random_bytes(32))
    ];
    
    // Code de sauvegarde en base (à adapter selon votre configuration)
    // saveNewsletterToDatabase($newsletter_data);
    
} catch (Exception $e) {
    // Log de l'erreur (optionnel)
    error_log("Erreur lors de la sauvegarde newsletter : " . $e->getMessage());
}

// Réponse de succès
if ($welcome_mail_sent) {
    echo json_encode([
        'success' => true,
        'message' => 'Inscription réussie ! Vous recevrez désormais nos actualités par email.',
        'email' => $email
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Une erreur est survenue lors de l\'inscription. Veuillez réessayer.',
        'errors' => ['Erreur technique lors de l\'inscription']
    ]);
}
?> 
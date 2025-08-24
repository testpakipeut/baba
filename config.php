<?php
// Configuration du site TECHNIQUES TOPO

// Informations de l'entreprise
define('SITE_NAME', 'TECHNIQUES TOPO');
define('SITE_DESCRIPTION', 'Bureau d\'Études Topographiques, Cartographiques et Cadastrales');
define('SITE_URL', 'https://techniquestopo.ml'); // À modifier selon votre domaine

// Coordonnées de contact
define('ADMIN_EMAIL', 'techniquestopomali@gmail.com');
define('PHONE_1', '+223 20 20 79 86');
define('PHONE_2', '+223 76 62 84 99');
define('WHATSAPP', '+223 76 62 84 99');

// Adresses
define('ADDRESS_1', 'Rue 251 - Porte N°500, Dialakorobougou, Route de Moutoungoula, Bamako');
define('ADDRESS_2', 'Garantiguibougou, 2e Terminus, Bamako, Mali');

// Configuration des emails
define('FROM_EMAIL', 'noreply@techniquestopo.ml');
define('REPLY_TO_EMAIL', 'techniquestopomali@gmail.com');

// Configuration de la base de données (optionnel)
define('DB_HOST', 'localhost');
define('DB_NAME', 'techniques_topo');
define('DB_USER', 'root');
define('DB_PASS', '');

// Configuration des formulaires
define('MAX_FILE_SIZE', 5 * 1024 * 1024); // 5MB
define('ALLOWED_FILE_TYPES', ['jpg', 'jpeg', 'png', 'pdf', 'doc', 'docx']);

// Configuration de sécurité
define('CSRF_TOKEN_NAME', 'csrf_token');
define('SESSION_TIMEOUT', 3600); // 1 heure

// Configuration des notifications
define('ENABLE_EMAIL_NOTIFICATIONS', true);
define('ENABLE_SMS_NOTIFICATIONS', false); // À implémenter si nécessaire

// Configuration des logs
define('LOG_ENABLED', true);
define('LOG_FILE', 'logs/site.log');

// Configuration des animations
define('AOS_ENABLED', true);
define('AOS_DURATION', 800);
define('AOS_EASING', 'ease-in-out');

// Configuration des réseaux sociaux
define('FACEBOOK_URL', '#');
define('LINKEDIN_URL', '#');
define('TWITTER_URL', '#');
define('WHATSAPP_URL', 'https://wa.me/22376628499');

// Informations légales
define('COMPANY_LEGAL_NAME', 'TECHNIQUES TOPO SARL');
define('COMPANY_CREATION_DATE', 'Avril 2021');
define('COMPANY_CAPITAL', '1 000 000 F.CFA');
define('COMPANY_ADDRESS', 'Garantiguibougou, 2e Terminus, Bamako, Mali');

// Configuration des services
define('SERVICES', [
    'topographie' => [
        'name' => 'Études & Levés Topographiques',
        'description' => 'Levés planimétriques et altimétriques, MNT, profils en long et travers',
        'icon' => 'fas fa-search'
    ],
    'implantation' => [
        'name' => 'Implantations & Exécution',
        'description' => 'Implantation de routes, VRD, ouvrages d\'art, bâtiments',
        'icon' => 'fas fa-drafting-compass'
    ],
    'cartographie' => [
        'name' => 'Cartographie & Cadastre',
        'description' => 'Plans cadastraux, cartographie numérique, géoréférencement',
        'icon' => 'fas fa-map'
    ]
]);

// Configuration des domaines d'intervention
define('DOMAINES_INTERVENTION', [
    'Infrastructures de transports (route, piste, ligne électrique)',
    'Ouvrages d\'art (pont & barrage)',
    'Voiries urbaines',
    'Aménagements hydro‑agricoles',
    'Réseaux d\'adduction d\'eau',
    'Dossiers d\'exécution pour travaux de BTP',
    'Élaboration de plans cadastraux'
]);

// Configuration de l'équipe
define('EQUIPE', [
    'ingenieurs' => [
        'count' => 2,
        'experience' => '12 et 05 ans d\'expérience',
        'icon' => 'fas fa-user-tie'
    ],
    'techniciens' => [
        'count' => 2,
        'experience' => '4-5 ans d\'expérience',
        'icon' => 'fas fa-user-cog'
    ],
    'operateurs' => [
        'count' => 4,
        'experience' => '5 ans d\'expérience',
        'icon' => 'fas fa-user'
    ],
    'main_oeuvre' => [
        'count' => 4,
        'experience' => 'Support terrain',
        'icon' => 'fas fa-users'
    ]
]);

// Configuration du matériel
define('MATERIEL_BUREAU', [
    'PC fixes' => 2,
    'PC portables (Toshiba, Dell, HP)' => 3,
    'Traceur HP DesignJet 500/800' => 1,
    'Imprimantes A4/A3' => 2,
    'Photocopieur Canon IR 2016' => 1
]);

define('MATERIEL_TOPOGRAPHIQUE', [
    'GPS différentiels' => 1,
    'Trimble R8 (base & mobile)' => 1,
    'Stations totales' => 2,
    'Leica TS06 Flexline' => 1,
    'Leica TS02 Flexline' => 1,
    'Niveaux automatiques' => 3,
    'NAK 2 + accessoires' => 1,
    'ZEISS + accessoires' => 1,
    'Topcon ABT4 + accessoires' => 1
]);

// Fonction utilitaire pour obtenir la configuration
function getConfig($key, $default = null) {
    return defined($key) ? constant($key) : $default;
}

// Fonction pour formater les numéros de téléphone
function formatPhone($phone) {
    return preg_replace('/[^0-9+]/', '', $phone);
}

// Fonction pour valider l'email
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

// Fonction pour nettoyer les entrées utilisateur
function sanitizeInput($input) {
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

// Fonction pour générer un token CSRF
function generateCSRFToken() {
    if (!isset($_SESSION[CSRF_TOKEN_NAME])) {
        $_SESSION[CSRF_TOKEN_NAME] = bin2hex(random_bytes(32));
    }
    return $_SESSION[CSRF_TOKEN_NAME];
}

// Fonction pour vérifier le token CSRF
function verifyCSRFToken($token) {
    return isset($_SESSION[CSRF_TOKEN_NAME]) && hash_equals($_SESSION[CSRF_TOKEN_NAME], $token);
}

// Configuration des erreurs
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);

// Configuration des sessions
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Configuration du fuseau horaire
date_default_timezone_set('Africa/Bamako');
?> 
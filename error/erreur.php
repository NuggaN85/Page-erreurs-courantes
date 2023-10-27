<?php
// Tableau associatif des codes d'erreur HTTP et de leurs messages correspondants
$erreurs = array(
    '400' => 'Échec de l\'analyse HTTP.',
    '401' => 'Le pseudo ou le mot de passe n\'est pas correct !',
    '402' => 'Le client doit reformuler sa demande avec les bonnes données de paiement.',
    '403' => 'Requête interdite !',
    '404' => 'La page n\'existe pas ou plus !',
    '405' => 'Méthode non autorisée.',
    '429' => 'Trop de demandes.',
    '500' => 'Erreur interne au serveur ou serveur saturé.',
    '501' => 'Le serveur ne supporte pas le service demandé.',
    '502' => 'Mauvaise passerelle.',
    '503' => 'Service indisponible.',
    '504' => 'Trop de temps à la réponse.',
    '505' => 'Version HTTP non supportée.',
    'default' => 'Erreur !'
);

// Valider et filtrer la valeur de $_GET['erreur']
$codeErreur = array_key_exists($_GET['erreur'], $erreurs) ? $_GET['erreur'] : 'default';

// Récupérer le message d'erreur correspondant
$message = $erreurs[$codeErreur];

// Échapper les caractères spéciaux dans le message d'erreur pour éviter les attaques XSS
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

// Chemin du fichier de journalisation des erreurs
$logFile = 'erreurs.log';

// Rotation des journaux si la taille maximale est atteinte (10 Mo dans cet exemple)
$maxLogSize = 10000000; // 10 Mo
if (file_exists($logFile) && filesize($logFile) > $maxLogSize) {
    $backupLogFile = 'erreurs_' . date('Y-m-d_H-i-s') . '.log';
    rename($logFile, $backupLogFile);
}

// Journalisation de l'erreur dans un fichier de logs avec des informations supplémentaires
$logMessage = '[' . date('Y-m-d H:i:s') . '] Code d\'erreur ' . $codeErreur . ' déclenché par ' . $_SERVER['REMOTE_ADDR'] . ' pour l\'URL : ' . $_SERVER['REQUEST_URI'] . PHP_EOL;

// Inclure des informations supplémentaires pour le débogage
$logMessage .= 'Informations supplémentaires : ' . json_encode($_SERVER) . PHP_EOL;

file_put_contents($logFile, $logMessage, FILE_APPEND);

// Envoi d'une notification aux administrateurs en cas d'erreur critique (par exemple, erreur 500)
if ($codeErreur === '500') {
    $adminEmail = 'admin@example.com';
    $sujet = 'Erreur 500 sur le site';
    $messageAdmin = 'Une erreur 500 s\'est produite pour l\'URL : ' . $_SERVER['REQUEST_URI'];
    mail($adminEmail, $sujet, $messageAdmin);
}

echo '<html>
        <head>
          <title>Erreur '.$codeErreur.'</title>
        </head>
        <body>
          <h1>Erreur '.$codeErreur.'</h1>
          <p>'.$message.'</p>
        </body>
      </html>';

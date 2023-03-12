<?php
switch($_GET['erreur'])
{
   case '400':
     $message = 'Échec de l\'analyse HTTP.';
     break;
   case '401':
     $message = 'Le pseudo ou le mot de passe n\'est pas correct !';
     break;
   case '402':
     $message = 'Le client doit reformuler sa demande avec les bonnes données de paiement.';
     break;
   case '403':
     $message = 'Requête interdite !';
     break;
   case '404':
     $message = 'La page n\'existe pas ou plus !';
     break;
   case '405':
     $message = 'Méthode non autorisée.';
     break;
   case '429':
     $message = 'Trop de demandes.';
     break;   
   case '500':
     $message = 'Erreur interne au serveur ou serveur saturé.';
     break;
   case '501':
     $message = 'Le serveur ne supporte pas le service demandé.';
     break;
   case '502':
     $message = 'Mauvaise passerelle.';
     break;
   case '503':
     $message = 'Service indisponible.';
     break;
   case '504':
     $message = 'Trop de temps à la réponse.';
     break;
   case '505':
     $message = 'Version HTTP non supportée.';
     break;
   default:
     $message = 'Erreur !';
}

echo '<html>
        <head>
          <title>Erreur '.$_GET['erreur'].'</title>
        </head>
        <body>
          <h1>Erreur '.$_GET['erreur'].'</h1>
          <p>'.utf8_decode($message).'</p>
        </body>
      </html>';

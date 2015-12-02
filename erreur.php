<?php

/*!
 * page_erreur v1.0
 * Dev: NuggaN85
 * Twitter: @NuggaN85
 * Copyright 2015 © NuggaN85. All rights reserved.
 * Licensed under CC BY 3.0
 * http://creativecommons.org/licenses/by/3.0/
 * https://www.tchatland.fr
 */

switch($_GET['erreur'])
{
   case '400':
   echo utf8_decode( 'Échec de l\'analyse HTTP.' );
   break;
   case '401':
   echo utf8_decode( 'Le pseudo ou le mot de passe n\'est pas correct !' );
   break;
   case '402':
   echo utf8_decode( 'Le client doit reformuler sa demande avec les bonnes données de paiement.' );
   break;
   case '403':
   echo utf8_decode( 'Requête interdite !' );
   break;
   case '404':
   echo utf8_decode( 'La page n\'existe pas ou plus !' );
   break;
   case '405':
   echo utf8_decode( 'Méthode non autorisée.' );
   break;
   case '500':
   echo utf8_decode( 'Erreur interne au serveur ou serveur saturé.' );
   break;
   case '501':
   echo utf8_decode( 'Le serveur ne supporte pas le service demandé.' );
   break;
   case '502':
   echo utf8_decode( 'Mauvaise passerelle.' );
   break;
   case '503':
   echo utf8_decode( 'Service indisponible.' );
   break;
   case '504':
   echo utf8_decode( 'Trop de temps à la réponse.' );
   break;
   case '505':
   echo utf8_decode( 'Version HTTP non supportée.' );
   break;
   default:
   echo utf8_decode( 'Erreur !' );
}
?>

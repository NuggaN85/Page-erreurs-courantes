```
 * Dev: NuggaN85
 * Github: NuggaN85
 * Twitter: @NuggaN85
 * Copyright © 2015 - 2023 All rights reserved.
 * Licensed under CC BY 3.0
```

Placez le dossier `error` à la racine de votre site web, par exemple dans le dossier `public_html` ou `www`. Ce dossier est essentiel pour gérer les erreurs sur votre site web et afficher des messages d'erreur clairs et concis pour vos visiteurs en cas de problème.

Assurez-vous que le dossier `error` est correctement configuré et qu'il contient tous les fichiers nécessaires pour gérer les erreurs sur votre site web. Si vous avez besoin d'aide pour configurer le dossier "error" ou si vous rencontrez des problèmes avec votre site web, n'hésitez pas à contacter notre équipe d'assistance pour obtenir de l'aide.

Pour ajouter les lignes suivantes à la fin de votre fichier `.htaccess`, vous devez d'abord ouvrir le fichier à l'aide d'un éditeur de texte. Ensuite, copiez et collez les lignes suivantes à la fin du fichier :

```
#Liste des erreurs courantes.
ErrorDocument 400 /error/erreur.php?erreur=400
ErrorDocument 401 /error/erreur.php?erreur=401
ErrorDocument 402 /error/erreur.php?erreur=402
ErrorDocument 403 /error/erreur.php?erreur=403
ErrorDocument 404 /error/erreur.php?erreur=404
ErrorDocument 405 /error/erreur.php?erreur=405
ErrorDocument 500 /error/erreur.php?erreur=500
ErrorDocument 501 /error/erreur.php?erreur=501
ErrorDocument 502 /error/erreur.php?erreur=502
ErrorDocument 503 /error/erreur.php?erreur=503
ErrorDocument 504 /error/erreur.php?erreur=504
ErrorDocument 505 /error/erreur.php?erreur=505
```

```
<VirtualHost *:80>
ServerName www.example.com
ServerAlias example.com
Redirect 301 / https://www.example.com/
</VirtualHost>
```

Ces lignes permettent de rediriger toutes les requêtes HTTP vers HTTPS et de forcer l'utilisation de la version sécurisée de votre site web. Assurez-vous que les noms de domaine et les adresses URL sont correctement configurés pour votre site web avant d'ajouter ces lignes à votre fichier `.htaccess`.

Si vous rencontrez des difficultés pour ajouter ces lignes à votre fichier `.htaccess`, n'hésitez pas à contacter notre équipe d'assistance pour obtenir de l'aide.

----------------------------------------------------------------------------------------------------------------------------------------

[![Donate](https://img.shields.io/badge/paypal-donate-yellow.svg?style=flat)](https://www.paypal.me/nuggan85)

<a target="_blank" href="http://www.copyscape.com/"><img src="http://banners.copyscape.com/img/copyscape-banner-white-200x25.png" width="200" height="25" border="0" alt="Protected by Copyscape" title="Protected by Copyscape Plagiarism Checker - Do not copy content from this page." /></a>

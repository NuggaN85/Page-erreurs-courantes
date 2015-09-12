# Page-Error
Crée un doosier nomé error a la racine de votre site site web exemple dans ( public_html ou www ) et y mettre le ficher error.php dans ce doosier.

A la suite, ajoutez dans votre ".htaccess", ces lignes-ci.

Options All -Indexes
Options +FollowSymLinks
AddDefaultCharset UTF-8

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

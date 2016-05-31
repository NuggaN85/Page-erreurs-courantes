```
 * Dev: NuggaN85
 * Github: NuggaN85
 * Twitter: @NuggaN85
 * Copyright © 2015 All rights reserved.
 * Licensed under CC BY 3.0
```

Mettre le dossier error a la racine de votre site site web exemple dans ( public_html ou www ).

Ajoutez dans votre ".htaccess", ces lignes-ci a la fin de de votre htaccess.

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
```PHP
$status = $_SERVER['REDIRECT_STATUS'];
$codes = array(
400 => array('400 Bad Request', 'The request cannot be fulfilled due to bad syntax.'),
403 => array('403 Forbidden', 'The server has refused to fulfil your request.'),
404 => array('404 Not Found', 'The page you requested was not found on this server.'),
405 => array('405 Method Not Allowed', 'The method specified in the request is not allowed for the specified resource.'),
408 => array('408 Request Timeout', 'Your browser failed to send a request in the time allowed by the server.'),
500 => array('500 Internal Server Error', 'The request was unsuccessful due to an unexpected condition encountered by the server.'),
502 => array('502 Bad Gateway', 'The server received an invalid response while trying to carry out the request.'),
504 => array('504 Gateway Timeout', 'The upstream server failed to send a request in the time allowed by the server.'),
);

$title = $codes[$status][0];
$message = $codes[$status][1];
if ($title == false || strlen($status) != 3) {
$message = 'Please supply a valid HTTP status code.';
}

echo '<h1>Hold up! '.$title.' detected</h1>
<p>'.$message.'</p>';
```

[![Donate](https://img.shields.io/badge/paypal-donate-yellow.svg?style=flat)](https://www.paypal.me/LudovicRose)

<a target="_blank" href="http://www.copyscape.com/"><img src="http://banners.copyscape.com/img/copyscape-banner-white-200x25.png" width="200" height="25" border="0" alt="Protected by Copyscape" title="Protected by Copyscape Plagiarism Checker - Do not copy content from this page." /></a>


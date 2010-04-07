<?php
$htaccess = <<<eos
Options +FollowSymLinks -MultiViews
RewriteEngine On
RewriteBase /chinchilla

RewriteCond %{HTTPS} on
RewriteBase /sixd

ErrorDocument 404 index.php

RewriteRule ^$ index.php [QSA]

RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^/?([a-zA-Z0-9\-\_/\.^\?^\&]+)/?$ index.php?r=$1 [QSA,L]

# for maintenance.
#DirectoryIndex maintenance.php
#RewriteRule ^$ maintenance.php [QSA]
#AddHandler application/x-httpd-php .php5
#DirectoryIndex index.php
#RewriteRule ^/?([a-zA-Z0-9/\.^\?^\&]+)/?$ maintenance.php [QSA,L]
eos;


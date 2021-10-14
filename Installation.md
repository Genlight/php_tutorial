# Installationsanweisung für Webserver, Tutorial für Johannes
* Download von NGINX (Webserver): http://nginx.org/en/download.html
* NGINX installieren, gem Anleitung: https://www.maketecheasier.com/install-nginx-server-windows/
* Root-Directory in nginx.conf setzen
* nginx.conf in das nginx/config-Directory kopieren
* Starten des NGINX-Servers: `.\nginx.exe -s start`
** falls Änderungen beim config gemacht wurden, einfach statt `start` `reload` verwenden
* testen der Webseite, Aufruf von localhost (ohne config, sollte Nachricht von Nginx erscheinen, ansonsten die Webseite)

## PHP-Installation: 
* Installationsdirectory unter "C:\Program Files\PHP"
* starten des FastCGI-prozesses: `powershell -f start-phpCGI.ps1`
* Stoppen des FastCGI-prozesses: `powershell -f stop-phpCGI.ps1`


### Webserverautomatisierung 
s. https://www.nginx.com/resources/wiki/start/topics/examples/phpfastcgionwindows/

## Starten der Server
* NGINX starten: `powershell -f .\start-NGINX.ps1`
* PHP-cgi starten: `powershell -f .\start-PHPCGI.ps1`
* MYSQL Datenbank starten: `powershell -f .\start-MySQL.ps1`

## MYSQL Installation
https://dev.mysql.com/doc/refman/8.0/en/windows-installation.html
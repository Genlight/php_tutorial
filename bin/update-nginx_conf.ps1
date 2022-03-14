Write-Host "Kopiere PHP-ini config"
cp $PSScriptRoot\..\nginx.conf 'C:\Allg\nginx\nginx-1.21.3\conf\nginx.conf'

Write-Host "Starte den NGINX-server neu..."

& "$PSScriptRoot\stop-NGINX.ps1"
& "$PSScriptRoot\start-NGINX.ps1"

Write-Host "OK"
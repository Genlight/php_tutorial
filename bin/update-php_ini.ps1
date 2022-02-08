Write-Host "Kopiere PHP-ini config"
cp $PSScriptRoot\..\php.ini 'C:\Program Files\PHP\php.ini'

Write-Host "Starte den PHP prozess neu..."

& "$PSScriptRoot\stop-phpCGI.ps1"
& "$PSScriptRoot\start-phpCGI.ps1"

Write-Host "OK"
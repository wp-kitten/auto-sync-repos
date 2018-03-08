@echo off

REM Set path to current directory
setlocal
cd /d %~dp0

REM Execute
php index.php

echo
echo ---------------------------------------------------------------
echo Done. Press any key to close this window.
echo ---------------------------------------------------------------
pause>nul


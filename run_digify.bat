@echo off
title Digify PHP Server
echo Starting local PHP server...
echo.
echo Please keep this window open while using the website.
echo.
start http://localhost:8000
if exist "php_server\php.exe" (
    php_server\php.exe -S localhost:8000
) else (
    php -S localhost:8000
)

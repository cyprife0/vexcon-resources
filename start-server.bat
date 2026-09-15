@echo off
REM =============================================================
REM  Vexcon Resources Limited - Local Server Starter
REM
REM  Double-click this file any time you want to view the website
REM  on your own computer. A black window will open and must be
REM  left open the whole time you're browsing the site - closing
REM  it turns the site off. Press Ctrl+C in that window to stop it
REM  on purpose when you're done.
REM =============================================================

cd /d "%~dp0"

echo.
echo Starting the Vexcon Resources website...
echo.
echo Once you see "started" below, open your browser and go to:
echo.
echo     http://localhost:3000
echo.
echo Keep this window open while you browse the site.
echo Press Ctrl+C here to stop the server when you're done.
echo.

"C:\xampp\php\php.exe" -S localhost:3000

pause

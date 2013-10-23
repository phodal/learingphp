@ECHO OFF
SET BIN_TARGET=%~dp0/../peej/tonic/web/dispatch.php
php "%BIN_TARGET%" %*

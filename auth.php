<!-- file autentikasi session -->
<?php

session_start();
if(!isset($_SESSION["user"])) header("Location: profil.php");
<?php
session_start();
unset($_SESSION['idUser']);
header('Location: /views/index.php');
exit();

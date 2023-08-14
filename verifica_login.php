<?php
session_status() === PHP_SESSION_ACTIVE ?: session_start();
if(!$_SESSION['nome']) {
    header('Location: index.php');
    exit();
}
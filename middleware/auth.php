<?php
session_start();

if (!isset($_SESSION['id_user'])) {
    header('Location: ../../masuk/?error');
    exit;
}
?>
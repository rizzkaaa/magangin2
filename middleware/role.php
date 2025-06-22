<?php
session_start();

function only($allowedRoles = []) {
    if (!isset($_SESSION['id_user']) || !isset($_SESSION['role'])) {
        header("Location: ../../masuk/");
        exit;
    }

    if (!in_array($_SESSION['role'], $allowedRoles)) {
        echo "Anda mengakses rute yang salah";
        exit;
    }
}
?>
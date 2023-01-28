<?php
include '../../model/logoutmodel.php';
session_start();
$usuario_id = $_SESSION['idUser'];
$auditoria = new LogoutModel();
$auditoria->auditorialogout($usuario_id);
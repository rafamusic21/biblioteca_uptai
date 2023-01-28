<?php
 require_once '../../controller/logout.php';
session_start();


session_destroy();

header('Location: ../../');
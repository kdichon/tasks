<?php

// chemin acceès physique
$dir_fs = $_SERVER['DOCUMENT_ROOT'];    // ."/todolist/"

// chemin acceès virtuel
$dir_ws = '/tasks/';

$dir_common = $dir_fs."/common/";
$dir_css = $dir_fs."/css/";

// Parametres de connexion de MySQL DB
$dbHost = "localhost";
$dbUser = "root";
$dbPwd = "";
$dbName = "tasks";
?>
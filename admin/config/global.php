<?php
ob_start();
session_start();

require_once "functions.php";

$path = "http://".$_SERVER["HTTP_HOST"].dirname($_SERVER["PHP_SELF"])."/";

$media_path = "../uploads/";
$file_path = $_SERVER['DOCUMENT_ROOT'] . '/' . $media_path;

<?php
$userObj = new User;

if($userObj->isLoggedIn())    redirect("index.php");
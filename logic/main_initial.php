<?php

session_start();

$hp_per = floor($_SESSION['myinfo']['hp'] / $_SESSION['myinfo']['maxhp'] * 100);
$mental_per = floor($_SESSION['myinfo']['mental'] / $_SESSION['myinfo']['mental'] * 100);
$exp_per = floor($_SESSION['myinfo']['exp'] / $_SESSION['exp_model'][$_SESSION['myinfo']['level']] * 100);

?>
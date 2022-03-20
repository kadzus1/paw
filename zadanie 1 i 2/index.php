<?php
session_start();
if(!isset($_SESSION['role'])){
    header('Location: login.php');
    exit;
}
require_once dirname(__FILE__).'/config.php';

include _ROOT_PATH.'/app/calc.php';
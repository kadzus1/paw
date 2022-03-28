<?php
session_start();
if(isset($_SESSION['role'])){
    unset($_SESSION['role']);
    header('Location: login.php');
}
if (isset($_POST['login'])){
    if(isset($_POST['haslo'])){
        if ($_POST['login']=='admin' && $_POST['haslo']=='admin' ) {
            $_SESSION['role']='admin';
            header('Location: app/calc_view.php');
        }
    }
    
        
}

include _ROOT_PATH.'/app/ochrona/login_view.php';
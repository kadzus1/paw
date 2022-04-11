<?php
require_once 'init.php';


getRouter()->setDefaultRoute('calcShow'); // akcja/ścieżka domyślna
getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

getRouter()->addRoute('calcShow',    'calc_ctrl',  ['user','admin']);
getRouter()->addRoute('calcCompute', 'calc_ctrl',  ['user','admin']);
getRouter()->addRoute('login',       'login_ctrl');
getRouter()->addRoute('logout',      'login_ctrl', ['user','admin']);

getRouter()->go(); //wybiera i uruchamia odpowiednią ścieżkę na podstawie parametru 'action';
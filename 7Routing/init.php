<?php
require_once 'srodek/Config.class.php';
$conf = new srodek\Config();
require_once 'config.php'; 

function &getConf(){ global $conf; return $conf; }
require_once 'srodek/Messages.class.php';
$mess = new srodek\Messages();

function &getMessages(){ global $mess; return $mess; }
$smarty = null;	
function &getSmarty(){
	global $smarty;
	if (!isset($smarty)){
		include_once 'lib/smarty/Smarty.class.php';
		$smarty = new Smarty();	
		$smarty->assign('conf',getConf());
		$smarty->assign('mess',getMessages());
		$smarty->setTemplateDir(array(
			'A' => getConf()->_ROOT_PATH.'/app/widok',
			'B' => getConf()->_ROOT_PATH.'/app/widok/templates'
		));
	}
	return $smarty;
}
require_once 'srodek/loader.class.php'; 
$cloader = new srodek\loader();
function &getLoader() {
    global $cloader;
    return $cloader;
}

require_once 'srodek/Router.class.php'; //załaduj i stwórz router
$router = new srodek\Router();
function &getRouter(): srodek\Router {
    global $router; return $router;
}

require_once 'srodek/funkcje.php';

session_start(); //uruchom lub kontynuuj sesję
$conf->roles = isset($_SESSION['_roles']) ? unserialize($_SESSION['_roles']) : array(); //wczytaj role

$router->setAction( getFromRequest('action') );
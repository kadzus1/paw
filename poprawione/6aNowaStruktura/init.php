<?php
require_once dirname(__FILE__).'/srodek/Config.class.php';
$conf = new Config();
include dirname(__FILE__).'/config.php'; 

function &getConf(){ global $conf; return $conf; }
require_once getConf()->_ROOT_PATH.'/srodek/Messages.class.php';
$mess = new Messages();

function &getMessages(){ global $mess; return $mess; }
$smarty = null;	
function &getSmarty(){
	global $smarty;
	if (!isset($smarty)){
		include_once getConf()->_ROOT_PATH.'/lib/smarty/Smarty.class.php';
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
require_once getConf()->_ROOT_PATH.'/srodek/funkcje.php';

$action = getFromRequest('action');

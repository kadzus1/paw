<?php
require_once dirname (__FILE__).'/../config.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

switch ($action) {
	default : 
		include_once $conf->_ROOT_PATH.'/app/calc/calc_ctrl.class.php';
		$ctrl = new calc_ctrl ();
		$ctrl->widok ();
	break;
	case 'calcCompute' :
		include_once $conf->_ROOT_PATH.'/app/calc/calc_ctrl.class.php';
		$ctrl = new calc_ctrl ();
		$ctrl->process ();
	break;
	
}

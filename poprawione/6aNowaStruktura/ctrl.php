<?php
require_once 'init.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

switch ($action) {
	default : 
		include_once 'app/kontroler/calc_ctrl.class.php';
		$ctrl = new calc_ctrl ();
		$ctrl->widok ();
	break;
	case 'calcCompute' :
		include_once 'app/kontroler/calc_ctrl.class.php';
		$ctrl = new calc_ctrl ();
		$ctrl->process ();
	break;
	
}

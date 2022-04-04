<?php
require_once 'init.php';

switch ($action) {
	default : 
		$ctrl = new app\kontroler\calc_ctrl ();
		$ctrl->widok ();
	break;
	case 'calcCompute' :
		$ctrl = new app\kontroler\calc_ctrl ();
		$ctrl->process ();
	break;
	
}

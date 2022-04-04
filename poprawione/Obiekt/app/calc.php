<?php
require_once $conf->_ROOT_PATH.'/app/calc_ctrl.class.php';

$ctrl = new calc_ctrl;
$ctrl->init($conf);
$ctrl->process();

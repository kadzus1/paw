<?php
require_once 'Config.class.php';

$conf = new Config();

$conf->_ROOT_PATH = dirname(__FILE__);
$conf->_SERVER_NAME = 'localhost:80';
$conf->_SERVER_URL = 'http://'.$conf->_SERVER_NAME;
$conf->_APP_ROOT = '/Obiekt';
$conf->_APP_URL = $conf->_APP_URL.$conf->_APP_ROOT;
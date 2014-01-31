<?
session_start();

//Require config
require $_SERVER['DOCUMENT_ROOT'] . '/config.php';

//Require classes
require $_SERVER['DOCUMENT_ROOT'] . '/smarty/Smarty.class.php';
require $_SERVER['DOCUMENT_ROOT'] . '/shared/class.utilities.php';
require $_SERVER['DOCUMENT_ROOT'] . '/shared/class.database.php';
require $_SERVER['DOCUMENT_ROOT'] . '/classes/Login.php';
require $_SERVER['DOCUMENT_ROOT'] . '/classes/Project.php';
require $_SERVER['DOCUMENT_ROOT'] . '/classes/Core.php';

//Init maintaince
$core = new Core($config);

$core->setStaticRoute('/', 'mainpage', true);
$core->processRoute();

if ($core->current_route['type'] == 'static') {
    include($core->current_route['file']);
};

$core->renderPage();
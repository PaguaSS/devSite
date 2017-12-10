<?php
/**
 * @copyright     Copyright (c) Anthony Paguaga
 * @package       app.Config
 */

	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
	Router::connect('/management', array('controller' => 'Auth', 'action' => 'index', 'admin' => true));
	CakePlugin::routes();

	require CAKE . 'Config' . DS . 'routes.php';
?>
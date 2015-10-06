<?php

App::uses('SlugRoute', 'Routing/Route');

/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 */

/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
	Router::connect('/kontakty', array('controller' => 'messages', 'action' => 'add',));
	Router::connect('/novinky/*', array('controller' => 'news', 'action' => 'index'));
	Router::connect('/akce/:id', array('controller' => 'events', 'action' => 'view'), array('id' => '[0-9]+', 'pass' => array('id')));
	//Router::connect('/o-nas', array('controller' => 'pages', 'action' => 'display', 'about'));
	//Router::connect('/turnaje', array('controller' => 'pages', 'action' => 'display', 'tournaments'));
	//Router::connect('/partneri', array('controller' => 'pages', 'action' => 'display', 'partners'));

	Router::connect('/login', array('controller' => 'users', 'action' => 'login'));
	Router::connect('/logout', array('controller' => 'users', 'action' => 'logout'));
	Router::connect('/admin', array('controller' => 'news', 'action' => 'index', 'admin' => true));

	Router::connect('/akce/:slug', array('controller' => 'events', 'action' => 'view', 'model' => 'Event'), array('slug'=>'[\w-]+', 'routeClass'=>'SlugRoute'));
	Router::connect('/:slug', array( 'controller' => 'documents', 'action' => 'view', 'model' => 'Document'), array('slug'=>'[\w-]+', 'routeClass'=>'SlugRoute'));


/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';

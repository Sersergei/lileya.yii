<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Інтернет магазин спідньої білизни ЛІЛЕЯ',
    'language'=>'ru',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
        'application.modules.user.models.*',
        'application.modules.user.components.*',
        'application.modules.admin.models.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'admin',
      
        'user',
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
        //'shop' => array( 'debug' => 'true'),
      
	),

	// application components
	'components'=>array(

		'user'=>array(
			// enable cookie-based authentication
			//'allowAutoLogin'=>true,
            'allowAutoLogin'=>true,
            'loginUrl' => array('/user/login'),
		),
        //twig
        'viewRenderer' => array(
    'class' => 'ext.ETwigViewRenderer',
 
    // All parameters below are optional, change them to your needs
    'fileExtension' => '.twig',
    'options' => array(
        'autoescape' => true,
    ),
   // 'extensions' => array(
    //    'My_Twig_Extension',
  //  ),
    'globals' => array(
        'html' => 'CHtml'
    ),
    'functions' => array(
        'rot13' => 'str_rot13',
    ),
    'filters' => array(
        'jencode' => 'CJSON::encode',
    ),
    // Change template syntax to Smarty-like (not recommended)
    'lexerOptions' => array(
        'tag_comment'  => array('{*', '*}'),
        'tag_block'    => array('{', '}'),
        'tag_variable' => array('{$', '}')
    ),
),

		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
            'showScriptName'=>false,
			'rules'=>array(
				'shop/<action:product>/<id:\d+>'=>'shop/<action>',
				'shop/<category:\w+>'=>'shop',
				//'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				//'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		

		// database settings are configured in database.php
		//'db'=>require(dirname(__FILE__).'/database.php'),
        'db'=>array(
            'connectionString' => 'mysql:host=localhost;dbname=lileya',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'sersergei@bigmir.net',
	),
);

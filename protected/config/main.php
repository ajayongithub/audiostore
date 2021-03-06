<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// Yii::setPathOfAlias('bootstrap',dirname(__FILE__).'../extensions/yiistrap-master');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Audio Store',
//	'theme'=>'winglobal',

'aliases'=>array(
	'bootstrap'=>dirname(__FILE__).'/../extensions/yiibooster/src',
	'xupload'=>dirname(__FILE__).'/../extensions/xupload-0.5.1',
	'uploadPath'=>dirname(__FILE__).'/../../uploads/',
	'reviewPath'=>dirname(__FILE__).'/../../tobereviewed/',
),
	// preloading 'log' component
	'preload'=>array('log','bootstrap'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.modules.user.models.*',
		//'bootstrap.widgets.*',
		//'bootstrap.components.*',
		'ext.AweCrud.components.*',
		'ext.AweCrud.helpers.*',
		'ext.AweCrud.generators.*',
		'ext.AweCrud.forms.*',
		'ext.yiiext.behavior.*',
	),
//	'theme'=>'winglobal',
		/* 'session' => array(
				     'sessionName' => 'SiteSession',
				     'class' => 'CHttpSession',
				     'autoStart' => true,
				     ), */
	'modules'=>array(
		'user' => array(
			'debug' => false,
			'userTable' => 'user',
			'translationTable' => 'translation',
			),
			'usergroup' => array(
					'usergroupTable' => 'usergroup',
					'usergroupMessageTable' => 'user_group_message',
			),
			'membership' => array(
					'membershipTable' => 'membership',
					'paymentTable' => 'payment',
			),
			'friendship' => array(
					'friendshipTable' => 'friendship',
			),
			'profile' => array(
					'privacySettingTable' => 'privacysetting',
					'profileFieldTable' => 'profile_field',
					'profileTable' => 'profile',
					'profileCommentTable' => 'profile_comment',
					'profileVisitTable' => 'profile_visit',
			),
			'role' => array(
					'roleTable' => 'role',
					'userRoleTable' => 'user_role',
					'actionTable' => 'action',
					'permissionTable' => 'permission',
			),
			'message' => array(
					'messageTable' => 'message',
			),
		'init'=>array(),
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'gii',
			'generatorPaths'=> array(
				'ext.AweCrud.generators',
//				'ext.awegen',
			//	'ext.yiistrap-master.gii',
			),
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),
	// application components
	'components'=>array(
			
			
		'user'=>array(
			// enable cookie-based authentication
			'class' => 'application.modules.user.components.YumWebUser',
		  'loginUrl' => array('//user/auth/login'),
			'allowAutoLogin'=>true,
		),
		'file'=>array(
			'class'=>'application.extensions.file.CFile',
		),
		'messages' => array (
        	'extensionPaths' => array(
            'AweCrud' => 'ext.AweCrud.messages', // AweCrud messages directory.
        	 ),
     	),
		'cache'=>array( 'class'=>'system.caching.CDummyCache',  ),
			
		 'bootstrap'=>array(
		 		'class'=>'bootstrap.components.Bootstrap',
		 		'responsiveCss'=>true,
		 ),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
	/*	'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=audiostore',
			'emulatePrepare' => true,
			'username' => 'audiostore',
			'password' => 'audiostore123',
			'charset' => 'utf8',
			'tablePrefix'=>'',
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
					'levels'=>'error, warning,info,log,debug',
				),
				// uncomment the following to show log messages on web pages
				
// 				array(
// 					'class'=>'CWebLogRoute',
// 				),
				
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);

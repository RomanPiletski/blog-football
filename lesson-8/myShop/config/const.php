<?php

	//common
	define('ROOT', $_SERVER['DOCUMENT_ROOT']); //корень сайта

	define('SITE_URL', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME']);//адрес сайта
	define('CONFIG_ROOT', ROOT."/config/"); //папка с настройками сайта
	define('COMPONENTS_ROOT', ROOT."/app/components/"); //папка с дополнениями для сайта
	define('CONTROLLERS_ROOT', ROOT."/app/controllers/"); //папка с дополнениями для сайта
	define('VIEW_ROOT', ROOT."/views/"); //папка с дополнениями для сайта
	define('MODELS_ROOT', ROOT."/app/models/"); //папка с моделями для системы
	define('TEMPLATE_ROOT', "/template/"); //папка с дополнениями для сайта
	
	//admin
	define('CONTROLLERS_ROOT_ADMIN', ROOT."/app/controllers/admin/"); //папка с дополнениями для сайта
	define('VIEW_ROOT_ADMIN', ROOT."/views/admin/"); //папка с дополнениями для сайта
	define('MODELS_ROOT_ADMIN', ROOT."/app/models/admin/"); //папка с моделями для системы

	//server_page
	define('NOTADMIN', SITE_URL."/notadmin"); //страница 423 - доступ запрещен - только для админов
	define('ACCESSDENIED', SITE_URL."/access-denied"); //страница 403- доступ запрещен - только для пользователей
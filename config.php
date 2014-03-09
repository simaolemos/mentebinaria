<?php

$cfg_sitename = 'Mente Binária';

$cfg_visitor_count = false;

if ($cfg_visitor_count) {
	$cfg_session_path = '/tmp/php-sessions';
	$cfg_session_timeout = 600;

	// php configuration
	ini_set('session.save_handler', 'files');
	ini_set('session.cookie_httponly', 1);
	ini_set('session.cookie_lifetime', $cfg_session_timeout);
	ini_set('session.save_path', $cfg_session_path);
}

$cfg_show_random_quotes = 1;

$cfg_stylesheet = 'template/style.css';

$cfg_pages = array(
	'home' => '/',
	'blog',
	'artigos' => 'textos',
	'projetos',
	'downloads' => 'files',
	'treinamentos',
	'notas',
	'favoritos',
	'gafes',
	'foss',
	'palestras',
	'frases',
	'faq',
	'zine'
);

$cfg_menu_separator = ':';
$cfg_menu_linebreak = 1;

$cfg_logo_ascii ="
___  ___           _         ______ _                  _      
|  \/  |          | |        | ___ (_)         _      (_)      
| .  . | ___ _ __ | |_  ___  | |_/ /_ _ __   _//_ _ __ _  __ _ 
| |\/| |/ _ \ '_ \| __|/ _ \ | ___ \ | '_ \ / _` | '__| |/ _` |
| |  | |  __/ | | | |_|  __/ | |_/ / | | | | (_| | |  | | (_| |
\_|  |_/\___|_| |_|\__|\___| \____/|_|_| |_|\__,_|_|  |_|\__,_|
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~4 anos~~~~";

$cfg_database_host = 'localhost';
$cfg_database_user = 'root';
$cfg_database_password = 'root';
$cfg_database_name = 'mbin';


<?php
//Version
define('VERSION', '1.0');

// Project name folder
define('PJ_NAME', 'project_wahanda_alternative');

// DIRECTORY SEPARATOR Linux and Windows
define('DS', DIRECTORY_SEPARATOR);

// Always provide a TRAILING SLASH (/) AFTER A PATH
define('URL', '//' . $_SERVER['HTTP_HOST'] . '/' . PJ_NAME . '/');

define('LIBS', 'Libs/');

define('OTHER_LIBS', 'Libs/other/');

define('PUBLIC', URL . 'public/');

define('ASSETS', URL . 'public/assets/');



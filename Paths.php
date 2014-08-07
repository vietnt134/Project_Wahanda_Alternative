<?php
//Version
define('VERSION', '1.0');

// Project name folder
define('PJ_NAME', 'Project_Wahanda_Alternative');

// DIRECTORY SEPARATOR Linux and Windows
define('DS', DIRECTORY_SEPARATOR);

// Always provide a TRAILING SLASH (/) AFTER A PATH
define('URL', DS . DS . $_SERVER['HTTP_HOST'] . DS . PJ_NAME . DS);

define('LIBS', 'Libs' . DS);

define('OTHER_LIBS', 'Libs' . DS . 'other' . DS);

define('PUBLIC', URL . 'public' . DS);

define('ASSETS', URL . 'public' . DS . 'assets' . DS);



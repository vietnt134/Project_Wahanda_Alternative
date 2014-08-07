<?php

	require 'config.php';
	require 'paths.php';

	//autoload libs
	function __autoload($class){
		require LIBS . $class .'.php';
	}
	
  	
	$app = new Bootstrap();
	
	

	
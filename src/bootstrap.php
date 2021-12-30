<?php

require_once '../vendor/autoload.php';

ini_set('display_errors', '1');

function run(): void {
	$loader = new Twig_Loader_Filesystem('../static/web/html');
	$twig = new Twig_Environment($loader);

	echo $twig->render(
		'board.html', 
		['greeting' => 'Welcome to simply wall st!']
	);
}

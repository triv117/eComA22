<?php
	// include;//tries to import a file and warns us on failure
	// include_once;//above but only if it was not previously imported
	// require();//imports a file and halts the app on failure
	// require_once();//above but only if it was not previously imported
	require_once('app/core/init.php');

	new \app\core\App();
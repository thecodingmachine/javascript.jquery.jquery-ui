<?php
use Mouf\Html\Utils\WebLibraryManager\WebLibraryInstaller;

require_once __DIR__."/../../autoload.php";

use Mouf\Actions\InstallUtils;
use Mouf\MoufManager;

// Let's init Mouf
InstallUtils::init(InstallUtils::$INIT_APP);

// Let's create the instance
$moufManager = MoufManager::getMoufManager();

WebLibraryInstaller::installLibrary("jQueryUiLibrary",
	array('vendor/mouf/javascript.jquery.jquery-ui/js/jquery-ui-1.10.0.custom.min.js'),
	array('vendor/mouf/javascript.jquery.jquery-ui/css/ui-darkness/jquery-ui.css'),
	array('jQueryLibrary'),
	true
);

// Let's rewrite the MoufComponents.php file to save the component
$moufManager->rewriteMouf();

// Finally, let's continue the install
InstallUtils::continueInstall();

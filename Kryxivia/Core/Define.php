<?php
/**
 *
 * @package    App/Core/Define.php
 * @author     Nicow
 * @copyright  © 2019
 *
*/

session_start();

error_reporting(0);
ini_set("display_errors", 0);

$http = 'https://';
if(isset($_SERVER['HTTPS'])){
    $http = 'https://';
}
$directLinkLocal = NULL;

define("HTTP_HOST", $http.$_SERVER['HTTP_HOST']);
define("REQUEST_URI", $_SERVER['REQUEST_URI']);
define("DOCUMENT_ROOT", $_SERVER['DOCUMENT_ROOT']);
define("HOST", HTTP_HOST.$directLinkLocal.'/');
define("URL", HOST);
define("URI", HTTP_HOST.REQUEST_URI);
define("AJAX", HOST.'ajax.php');

define("PATH", './path');
	define("VENDOR", PATH.'/vendor');
	define("CACHES", PATH.'/caches');

define("Kryxivia", DOCUMENT_ROOT.'/Kryxivia');

	define("BUNDLES", Kryxivia.'/Bundles');

	define("CONFIG", Kryxivia.'/Config');
	define("TRANS", CONFIG.'/translations');
	define("CORE", Kryxivia.'/Core');
		define("RENDER", CORE.'/Render');
	define("VIEWS", Kryxivia.'/Views');

define("PAGES", '/pages/');

define("ASSETS", '/assets/');

$get = URI;
$member = false;
$mess = false;
$success = false;
$session = false;

?>
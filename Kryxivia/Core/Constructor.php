<?php
/**
 *
 * @package    Kryxivia/Core/Constructor.php
 * @author     Nicow
 * @copyright  © 2021
 *
*/

namespace Core;

use \Twig_Environment;
use \Twig_Loader_Filesystem;
// use \Twig\Extra\Intl\IntlExtension;

require_once './vendor/spyc/spyc.php';
require_once './Kryxivia/Core/Define.php';

require_once 'vendor/autoload.php';
require_once CORE.'/Autoloader.php';

Autoloader::Register();

$config = Config::extractYml();

$lang = new Lang();
$Kryxivia = new Kryxivia();
$page = $Kryxivia->getPage();

$View = new Twig_Environment(new Twig_Loader_Filesystem(VIEWS), ['debug' => true, 'cache' => $config->params->cache->app]);
$View->getExtension('Twig_Extension_Core')->setTimezone('Europe/Paris');
$View->addExtension(new \Twig\Extension\DebugExtension());
// $View->addExtension(new IntlExtension());
$View->addExtension(new Extension());

require CORE.'/Global.php';

?>

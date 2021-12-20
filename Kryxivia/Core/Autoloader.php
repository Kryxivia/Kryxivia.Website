<?php
/**
 *
 * @package    App/Core/Autoloader.php
 * @author     Nicow
 * @copyright  © 2019
 *
*/

namespace Core;

class Autoloader{

	public $class;

	static function Register(){

		spl_autoload_register(array(__CLASS__, 'Autoload'));

	}

	static function Autoload($class){

		if(strstr($class, 'Bundles')){

			$class = Autoloader::ReplaceNamespace($class);
			$require = Kryxivia.'/'.$class.'/Class.php';

		}else{

			if(stripos($class, __NAMESPACE__ . '\\') === 0){

				$class = Autoloader::ReplaceNamespace($class);
				$require = Kryxivia.'/'.$class.'.php';

			}
			
		}

		require_once $require;

	}

	static function ReplaceNamespace($class){

		$class = str_replace(__NAMESPACE__ . '\\', __NAMESPACE__ . '/', $class);
		$class = str_replace('\\', '/', $class);
		return $class;

	}

}


?>

<?php
/**
 *
 * @package    Kryxivia/Core/Config.php
 * @author     Nicow
 * @copyright  © 2021
 *
*/

namespace Core;

use \Spyc;

class Config{

	public $config;

	public static function extractYml($file = CONFIG.'/config.yml'){

		$file = Spyc::YAMLLoad($file);
		$file = json_decode(json_encode($file));

		return $file;

	}
		
}


?>
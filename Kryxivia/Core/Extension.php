<?php
/**
 * 
 * @package    Kryxivia/Core/Extension.php
 * @author     Nicow
 * @copyright  © 2019
 *
*/

namespace Core;

use \PDO;
use \Twig_Extension;
use \Twig_SimpleFilter;
use \Twig_SimpleFunction;
use MatthiasMullie\Minify;

class Extension extends Twig_Extension{

	/*
	==============================================================================================================================
		Add Extension
	==============================================================================================================================
	*/	

		public function getFilters(){
			return [

				/*============================== Core ==================================*/

				new Twig_SimpleFilter('urlTransform', [$this, 'urlTransform']),
				new Twig_SimpleFilter('dating', [$this, 'dating']),
				new Twig_SimpleFilter('mois', [$this, 'mois']),
				new Twig_SimpleFilter('encode', [$this, 'encode']),
				new Twig_SimpleFilter('decode', [$this, 'decode']),
				new Twig_SimpleFilter('clean', [$this, 'cleanStr']),
				new Twig_SimpleFilter('trans', [$this, 'translate']),
				new Twig_SimpleFilter('webp', [$this, 'webp']),
				new Twig_SimpleFilter('minifier', [$this, 'minifier']),
				new Twig_SimpleFilter('minifierJS', [$this, 'minifierJS'])

			];
		}

		public function getFunctions(){
			return [

				new Twig_SimpleFunction('asset', [$this, 'asset']),
				new Twig_SimpleFunction('currentPage', [$this, 'currentPage'], ['is_safe' => ['html'], 'needs_context' => true]),
				new Twig_SimpleFunction('link', [$this, 'link'], ['is_safe' => ['html'], 'needs_context' => true]),
				new Twig_SimpleFunction('redirect', [$this, 'redirect'], ['needs_context' => true]),
				new Twig_SimpleFunction('getStatus', [$this, 'getStatus']),

			];
		}


	/*
	==============================================================================================================================
		Extension Core
	==============================================================================================================================
	*/	
		public static function urlTransform($url){

			$lettre = array(
			  'a'=>array('à', 'á', 'â', 'ã', 'ä', 'å'),
			  'e'=>array('è', 'é', 'ê', 'ë', 'É'),
			  'i'=>array('ì', 'í', 'î', 'ï'),
			  'o'=>array('ò', 'ó', 'ô', 'õ', 'ö'),
			  'u'=>array('ù', 'ú', 'û', 'ü'),
			  'y'=>array('ý', 'ÿ')
			);

			$url = strtolower($url);
			$url = trim($url);
			$url = preg_replace('#\s#', '-', $url);
			$url = preg_replace('#-{2,}#', '-', $url);

			$url = str_replace($lettre['a'], 'a', $url);
			$url = str_replace($lettre['e'], 'e', $url);
			$url = str_replace($lettre['i'], 'i', $url);
			$url = str_replace($lettre['o'], 'o', $url);
			$url = str_replace($lettre['u'], 'u', $url);
			$url = str_replace($lettre['y'], 'y', $url);
			$url = str_replace(array('ç', 'ñ'), array('c', 'n'), $url);

			$url = preg_replace('#[^a-z0-9-]#', '', $url);
			$url = rtrim($url, '-');
		 
			return $url;
			
		}

		public function mois($mois){

			global $lang;

			switch($mois){ 
				case 1: $mois = $lang->Kryxivia->all->mois->jan; break;
				case 2: $mois = $lang->Kryxivia->all->mois->fev; break;
				case 3: $mois = $lang->Kryxivia->all->mois->mar; break;
				case 4: $mois = $lang->Kryxivia->all->mois->avr; break;
				case 5: $mois = $lang->Kryxivia->all->mois->mai; break;
				case 6: $mois = $lang->Kryxivia->all->mois->juin; break;
				case 7: $mois = $lang->Kryxivia->all->mois->juil; break;
				case 8: $mois = $lang->Kryxivia->all->mois->aou; break;
				case 9: $mois = $lang->Kryxivia->all->mois->sep; break;
				case 10: $mois = $lang->Kryxivia->all->mois->oct; break;
				case 11: $mois = $lang->Kryxivia->all->mois->nov; break;
				case 12: $mois = $lang->Kryxivia->all->mois->dec; break;
				default: $mois = '?'; break;
			}

			return $mois;
		}

		public function dating($dating){

			$month = self::mois(date('n', $dating));
			$dating = date('y', $dating).' '.$month.' '.date('Y', $dating).' '.date('h', $dating).':'.date('m', $dating);

			return $dating;
		}

		public static function asset($asset){
			
			// if(is_file('./assets/'.$asset)){
			// 	$asset = ASSETS.$asset.'?v='.filemtime('./'.ASSETS.$asset);
			// }else{
				$asset = ASSETS.$asset;
			// }

			return $asset;

		}

		public function cleanStr($str){

			$str = preg_replace('/[^A-Za-z0-9\-]/', '', $str);
			return preg_replace('/-+/', '-', $str);

		}

		public function redirect(array $context, $page){

			$link = $context['url'].$page;
			return header('Location: ' . $link);
			exit();
			
		}

		public static function encode($post){ 

			return addslashes(htmlentities($post)); 

		}

		public function decode($post){ 
		
			return stripcslashes(html_entity_decode($post)); 
		
		}

		public function translate($str, $replace){

			global $lang;
			return $lang->Translate($str, $replace);

		}

		public function link(array $context, $page){

			$link = $context['url'].$page;
			return $link;

		}

		public static function getStatus(){

			global $config;

			$ip = $config->params->server->ip;
			$port = $config->params->server->port;

			if(!$server = @fsockopen($ip, $port, $errno, $errstr, 5)){ 
				return false;
			}else{ 
				return true;
				if($server){ 
					@fclose($server);
				} 
			}  
		}
		
		public function currentPage(array $context, $link){

			if(isset($context['current']) && $context['current'] === $link){
				return 'class="active"';
			}

		}

		public function webp($cls){
	        $support = false;
	        if(isset($_SERVER['HTTP_ACCEPT'])){
	            $accept = $_SERVER['HTTP_ACCEPT'];
	            $pos = stripos($accept, 'image/webp');
	            $support = $pos !== false;
	        }
	        if($support)
	            return $cls;
	    }

		public function minifier($minify, $files = null){

			global $config;

			if($config->params->cache->minifier == false){

				$sourcePath = 'assets/css/app.css';
				$minifier = new Minify\CSS($sourcePath);

				if($files != null){
					foreach ($files as $file) {
						$minifier->add('assets/css/'.$file.'.css');
					}
				}

				$minifiedPath = 'assets/css/minified/'.$minify.'.css';
				$minifier->minify($minifiedPath);

			}

			return '<link rel="preload" href="'.$this->asset('css/minified/'.$minify.'.css').'" as="style"><link rel="stylesheet" type="text/css" href="'.$this->asset('css/minified/'.$minify.'.css').'">';

	    }

		public function minifierJS($minify, $mods = null, $pages = null){

			global $config;

			if($config->params->cache->minifier == false){

				if($mods != null){
					$pos = 0;
					foreach ($mods as $file) {
						if($pos == 0){
							$minifier = new Minify\JS('assets/js/mods/'.$file.'.js');
						}else{
							$minifier->add('assets/js/mods/'.$file.'.js');
						}
						$pos++;
					}
					$minifier->add('assets/js/app.js');
				}else{
					$minifier = new Minify\JS('assets/js/app.js');
				}

				if($pages != null){
					foreach ($pages as $file) {
						$minifier->add('assets/js/pages/'.$file.'.js');
					}
				}

				$minifiedPath = 'assets/js/minified/'.$minify.'.js';
				$minifier->minify($minifiedPath);

			}

			return '<script src="'.$this->asset('js/minified/'.$minify.'.js').'" defer></script>';

	    }
		
}
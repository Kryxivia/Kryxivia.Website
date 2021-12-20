<?php
/**
 *
 * @package    Kryxivia/Core/Kryxivia.php
 * @author     Nicow
 * @copyright  © 2019
 *
*/

namespace Core;

class Kryxivia{
	
	private static $data;

	public $page = 'home';
	public static $Id = null;
	public static $action = null;
	public static $pagination = 1;

	public function __construct(){

		self::$Id = $this->getId();
		self::$action = $this->getAction();
		self::$pagination = $this->getPagination();

	}

	public static function getAuth(){

		global $config;

		if(self::$data === null){
			self::$data = new Database($config->db->data);
		}

		return self::$data;

	}

	/*
	===============================================================
		gets
	===============================================================
	*/	

		public function getPage(){

			if(isset($_GET['p'])){
				$this->page = htmlentities(@$_GET['p']);
			}

			return $this->page;

		}

		public static function getId(){

			if(isset($_GET['id'])){
				self::$Id = htmlentities(@$_GET['id']);
			}

			return self::$Id;

		}

		public static function getAction(){

			if(isset($_GET['action'])){
				self::$action = htmlentities(@$_GET['action']);
			}

			return self::$action;

		}

		public static function getPagination(){

			if(isset($_GET['pagination']) && is_numeric($_GET['pagination'])){
				if($_GET['pagination'] > 0){
					self::$pagination = htmlentities(@$_GET['pagination']);
				}
			}

			return self::$pagination;

		}

	/*
	===============================================================
		present
	===============================================================
	*/	
		public static function Present($t = true){

			if($t){
				return date("y/m/d H:i:s", time());
			}else{ 
				return date("y/m/d H:i:s", 0);
			}

		}

	/*
	===============================================================
		market cap kxa
	===============================================================
	*/	
		public static function MarketCapKXA(){

			global $config;

			$data = file_get_contents($config->settings->kxa->data);
			$r = json_decode($data);

			if(isset($r->price)){
				$marketCap = $r->price * $config->settings->kxa->base;
			}else{
				$marketCap = $config->settings->kxa->base;
			}

			return $marketCap;

		}

	/*
	===============================================================
		get ip
	===============================================================
	*/	
		public static function getIP(){

		    $ip = "0.0.0.0";

		    if((isset($_SERVER['HTTP_X_FORWARDED_FOR'])) && (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))){
		        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		    }elseif((isset($_SERVER['HTTP_CLIENT_IP'])) && (!empty($_SERVER['HTTP_CLIENT_IP']))){
		        $ip = explode(".",$_SERVER['HTTP_CLIENT_IP']);
		        $ip = $ip[3].".".$ip[2].".".$ip[1].".".$ip[0];
		    }elseif((!isset($_SERVER['HTTP_X_FORWARDED_FOR'])) || (empty($_SERVER['HTTP_X_FORWARDED_FOR']))){
		        if((!isset( $_SERVER['HTTP_CLIENT_IP'])) && (empty($_SERVER['HTTP_CLIENT_IP']))){
		            $ip = $_SERVER['REMOTE_ADDR'];
		        }
		    }

		    return $ip;

		}

	/*
	===============================================================
		translate
	===============================================================
	*/	

		public static function Translate($str, $replace){

			foreach($replace as $var => $trans){
				$str = str_replace('%'.$var.'%', $trans, $str);
			}

			return $str;

		}
	

	/*
	===============================================================
		generateKey
	===============================================================
	*/ 
		public static function Key(){ 

		    $str = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
		    $rand = ''; 
		  
		    for($i = 0; $i < 8; $i++){ 
		        $in = rand(0, strlen($str) - 1); 
		        $rand .= $str[$in]; 
		    } 

		    return strtoupper($rand); 

		} 


	/*
	===============================================================
		template replace
	===============================================================
	*/ 
		public static function template($str){
			return str_replace("template/","",$str);
		}


	/*
	===============================================================
		uploads img
	===============================================================
	*/ 
		public function uploadImg($file){

			global $config;

			$result = false;
			$uploads = $config->params->path->uploads;
			$img = $uploads.basename($file["name"]);
			$imageFileType = strtolower(pathinfo($img,PATHINFO_EXTENSION));
			$checkImg = getimagesize($file["tmp_name"]);

			if($checkImg !== false){
				if(move_uploaded_file($file["tmp_name"], $img)){
					$result = $uploads.basename($file["name"]);
				}
			}

			return $result;
		}
	
}

?>
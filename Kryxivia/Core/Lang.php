<?php
/**
 *
 * @package    Kryxivia/Core/Lang.php
 * @author     Nicow
 * @copyright  © 2019
 *
*/

namespace Core;

class Lang{

	public $Code;
	public $Kryxivia;
	public $Admin;
	private $langParam;

	public function __get($key){

		$method = 'get'.ucfirst($key);
		$this->$key = $this->$method();

		return $this->$key;

	}

	public function __construct(){

		$this->Code = $this->SelectLang();
		$this->Kryxivia = $this->ParamLangApp();
		$this->Admin = $this->ParamLangAdmin();

	}

	private function DetectLang(){

		if(isset($_SESSION['lang'])){
			if(isset($_GET['lang']) && in_array(@$_GET['lang'], $this->langParam)){
				$_SESSION['lang'] = htmlentities(@$_GET['lang']);
			}
			$lang = $_SESSION['lang'];
		}else{
			$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
		    $lang = in_array($lang, $this->langParam) ? $lang : $this->langParam[0];
		    $_SESSION['lang'] = $lang;
		}

	    return $lang;

	}

	private function SelectLang(){

		global $config;

		$this->langParam = explode(',', $config->params->lang);
		$this->Code = $this->DetectLang();
		if(isset($_GET['lang'])){
			$this->Code = htmlentities(@$_GET['lang']);
			$this->langParam = explode(',', $config->params->lang);
			if(!in_array($this->Code, $this->langParam)){
			    $this->Code = $this->DetectLang();
			}
		}
		return $this->Code;

	}

	private function ParamLangApp(){

		if($this->Kryxivia === null){
			$this->Kryxivia = TRANS.'/'.$this->Code.'.yml';
			if(file_exists($this->Kryxivia)){
				$this->Kryxivia = Config::extractYml($this->Kryxivia);
			}else{
				$this->Kryxivia = TRANS.'/'.$this->DetectLang().'/admin.yml';
				$this->Kryxivia = Config::extractYml($this->Kryxivia);
			}			
		}
		return $this->Kryxivia;

	}

	private function ParamLangAdmin(){

		if($this->Admin === null){
			$this->Admin = TRANS.'/'.$this->Code.'/admin.yml';
			if(file_exists($this->Admin)){
				$this->Admin = Config::extractYml($this->Admin);
			}else{
				$this->Admin = TRANS.'/'.$this->langParam[0].'/admin.yml';
				$this->Admin = Config::extractYml($this->Admin);
			}			
		}
		return $this->Admin;

	}

	public function Translate($str, $replace){

		foreach($replace as $var => $trans){
			$str = str_replace('%'.$var.'%', $trans, $str);
		}
		return $str;

	}

	public function getLangCode(){

		return $this->Code;

	}

	public function getLangApp(){

		return $this->Kryxivia;

	}

	public function getLangAdmin(){

		return $this->Admin;

	}

}

?>
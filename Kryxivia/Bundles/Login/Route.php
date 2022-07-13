<?php
/**
 *
 * @package    App/Bundles/Login/Route.php
 * @author     Nicow
 * @copyright  © 2021
 *
*/

namespace Bundles;

use \Core\Kryxivia;

if(isset($_SESSION['log'])){

	header('Location: /'.$lang->langCode);
	exit();

}else{

	$result = '';

	function encrypt($v){
		return hash("sha512", md5($v));
	}

	if(isset($_POST['user']) && isset($_POST['pw'])){
		foreach($_POST as $key => $value){
			$user = addslashes(htmlspecialchars($_POST['user']));
			$pw = addslashes(htmlspecialchars($_POST['pw']));
		}	
		if(isset($user) && !empty($user) && $user != '' && isset($pw) && !empty($pw) && $pw != ''){
			if(encrypt($user) == $config->log->user && encrypt($pw) == $config->log->pass){
				$_SESSION['log'] = $config->log->pass;
				header('Location: /'.$lang->langCode);
				exit();
			}else{
				$result = 'Error log';
			}
		}else{
			$result = 'Error log';
		}
	}

	echo $View->render(PAGES.'log.twig', [
		'result' => $result
	]);

}
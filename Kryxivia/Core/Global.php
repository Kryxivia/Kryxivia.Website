<?php
/**
 *
 * @package    Kryxivia/Core/Global.php
 * @author     Nicow
 * @copyright  © 2021
 *
*/

namespace Core;

/*============================== Core ==================================*/

$View->addGlobal('config', $config);
$View->addGlobal('host', HOST);
$View->addGlobal('uri', URI);
$View->addGlobal('url', URL.$lang->langCode.'/');
$View->addGlobal('mess', $mess);
$View->addGlobal('success', $success);
$View->addGlobal('post', @$_POST);
$View->addGlobal('MarketCapKXA', Kryxivia::MarketCapKXA());

/*============================== Team ==================================*/

$data_to_twig = json_encode($config->team);
$data_to_twig = json_decode($data_to_twig, true); 
$View->addGlobal('TeamMember', $data_to_twig);

/*============================== Lang ==================================*/

$View->addGlobal('lang', $lang->langApp);
$View->addGlobal('langCode', $lang->langCode);

/*============================== Member ==================================*/

if(isset($_SESSION['log'])){
	$session = true;
}else{
    $session = false;
}

$View->addGlobal('session', $session);

?>
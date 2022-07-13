<?php
/**
 *
 * @package    App/Bundles/Devblog/Route.php
 * @author     Nicow
 * @copyright  © 2021
 *
*/

namespace Bundles;

if(isset($_SESSION['log'])){
    if($_SESSION['log'] == $config->log->pass){

	   echo $View->render(PAGES.'devblog/add.twig');

    }else{
        header('Location: /'.$lang->langCode);
        exit();
    }
}else{
	header('Location: /'.$lang->langCode);
	exit();
}

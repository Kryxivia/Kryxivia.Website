<?php
/**
 *
 * @package    App/Bundles/Devblog/Route.php
 * @author     Nicow
 * @copyright  © 2021
 *
*/

namespace Bundles;

$Devblog = new Devblog($Kryxivia->getId());

echo $View->render(PAGES.'devblog/'.$Devblog->Page.'.twig', [
	'article' => $Devblog->Article
]);

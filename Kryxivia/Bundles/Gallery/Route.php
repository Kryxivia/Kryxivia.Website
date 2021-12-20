<?php
/**
 *
 * @package    Kryxivia/Bundles/Gallery/Route.php
 * @author     Nicow
 * @copyright  © 2021
 *
*/

namespace Bundles;

$Gallery = new Gallery($Kryxivia->getId());

echo $View->render(PAGES.$page.'.twig', [
    'gallery' => $Gallery->List
]);

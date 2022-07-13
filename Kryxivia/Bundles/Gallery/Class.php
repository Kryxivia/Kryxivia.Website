<?php
/**
 *
 * @package    Kryxivia/Bundles/Gallery/Class.php
 * @author     Nicow
 * @copyright  © 2021
 *
*/

namespace Bundles;

use \Core\Kryxivia;

class Gallery{

    private $config;

    public function __construct(){

        $this->ConvertImgTatoo();

        $this->List = $this->ListImg();

        return $this;

    }

    public function ListImg(){

        $dir = 'assets/img/gallery/';
        $convert = scandir($dir);

        return $convert;

    }

    public function ConvertImgTatoo(){

        $dir = 'convert/';
        $convert = scandir($dir);
        $stamp = imagecreatefromjpeg('assets/img/logo-tatoo.jpg');

        foreach($convert as $img){
            
            $next = false;
            $file = explode('.', $img);

            if($file[1] == 'jpg' or $file[1] == 'jpeg'){
                $next = true;
                $im = imagecreatefromjpeg($dir.$img);
            // }elseif($file[1] == 'png'){
            //     $next = true;
            //     $name = $file[0];
            //     $im = imagecreatefrompng($dir.$img);
            }

            if($next){

                $marge_right = 0;
                $marge_bottom = 0;
                $sx = imagesx($stamp);
                $sy = imagesy($stamp);
                imagecopymerge($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp), 100);
                imagejpeg($im, 'assets/img/gallery/'.$img);
                imagedestroy($im);
                unlink($dir.$img);

            }

        }

    }

}
<?php
/**
 *
 * @package    App/Bundles/Devblog/Class.php
 * @author     Nicow
 * @copyright  © 2021
 *
*/

namespace Bundles;

use \Core\Kryxivia;

class Devblog{

    private $config;

    public function __construct($id){

        global $lang;

        $all = true;

        if(isset($id)){

            $url = "devblog/".$id.".json";

            if(file_exists($url)){

                $all = false;
                $arrContextOptions = array(
                    "ssl" => array(
                        "verify_peer" => false,
                        "verify_peer_name" => false,
                    )
                );  
                $result = file_get_contents($url, false, stream_context_create($arrContextOptions));
                $result = json_decode($result, JSON_UNESCAPED_UNICODE);
                $this->Article = $result;
                $this->Page = 'show';

            }

        }

        if($all){
        	$this->Article = [];
        	$fileList = glob('devblog/*');
        	$pos = 1;
    		foreach($fileList as $filename){

    		    if(is_file($filename)){

    		    	$url = HTTP_HOST."/".$filename;
    				$arrContextOptions = array(
    				    "ssl" => array(
    				        "verify_peer" => false,
    				        "verify_peer_name" => false,
    				    )
    				);  
    				$result = file_get_contents($url, false, stream_context_create($arrContextOptions));
    				$result = json_decode($result, JSON_UNESCAPED_UNICODE);
    		    	$this->Article[$pos] = $result;
    		        $pos++;

    		    }  

    		} 
            $this->Page = 'list';

        }

        return $this;

    }

}
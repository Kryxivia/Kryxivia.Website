<?php
/**
 *
 * @package    Save
 * @author     Nicow
 * @copyright  © 2021
 *
*/

namespace Core;

// use Stichoza\GoogleTranslate\GoogleTranslate;

require_once './vendor/spyc/spyc.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/Kryxivia/core/Define.php';

require_once 'vendor/autoload.php';
require_once CORE.'/Autoloader.php';

Autoloader::Register();

$config = Config::extractYml();
$Kryxivia = new Kryxivia();

$result = 'error';
$elts = null;


if(isset($_SESSION['log'])){
    if($_SESSION['log'] == $config->log->pass){

$url = "test.json";

$all = false;
$arrContextOptions = array(
    "ssl" => array(
        "verify_peer" => false,
        "verify_peer_name" => false,
    )
);  
$result = file_get_contents($url, false, stream_context_create($arrContextOptions));
$result = json_decode($result, JSON_UNESCAPED_UNICODE);
$template = $result;
    function urlTransform($url){

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

    function save_base64_image($base64_image_string, $output_file_without_extension, $path_with_end_slash="assets/img/devblog/" ) {
        //usage:  if( substr( $img_src, 0, 5 ) === "data:" ) {  $filename=save_base64_image($base64_image_string, $output_file_without_extentnion, getcwd() . "/application/assets/pins/$user_id/"); }      
        //
        //data is like:    data:image/png;base64,asdfasdfasdf
        $splited = explode(',', substr( $base64_image_string , 5 ) , 2);
        $mime=$splited[0];
        $data=$splited[1];

        $mime_split_without_base64=explode(';', $mime,2);
        $mime_split=explode('/', $mime_split_without_base64[0],2);
        if(count($mime_split)==2)
        {
            $extension=$mime_split[1];
            if($extension=='jpeg')$extension='jpg';
            //if($extension=='javascript')$extension='js';
            //if($extension=='text')$extension='txt';
            $output_file_with_extension=$output_file_without_extension.'.'.$extension;
        }
        file_put_contents( $path_with_end_slash . $output_file_with_extension, base64_decode($data) );
        return $output_file_with_extension;
    }

        // $tr = new GoogleTranslate('en');
        // $tr->setSource('en');
        $json = [];
        $json['cover'] = save_base64_image($template['cover'], 'kryxivia_cover_'.urlTransform($template['title']));
        $json['category'] = $template['category'];
        $json['date'] = time();

        foreach (explode(",",$config->params->lang) as $value) {
            if($value == 'en'){
                $json['lang'][$value] = [];
                // $tr->setTarget($value);
                // $json['lang'][$value]['title'] = $tr->translate($template['title']);
                $json['lang'][$value]['title'] = $template['title'];
                $json['lang'][$value]['desc'] = $template['desc'];
                if(isset($template['content'])){
                    $pos = 1;
                    foreach ($template['content'] as $v) {
                        $col = [];
                        $col['type'] = $v['type'];

                        if($v['type'] == 'img'){
                            $col['c'] = save_base64_image($v['c'], 'kryxivia_'.urlTransform($template['title']).'_'.urlTransform($v['a']));
                            $col['a'] = $v['a'];
                        }else{
                            $col['c'] = $v['c'];
                        }

                        $json['lang'][$value]['content'][$pos] = $col;
                        $pos++;
                    }
                }
            }
        }
        
        $fp = fopen('devblog/'.urlTransform($template['title']).'.json', 'w');
        fwrite($fp, json_encode($json));
        fclose($fp);

        $result = 'success';
        $elts = urlTransform($template['title']);

    }
}

$data = array(
    'result' => $result,
    'elts' => $elts
); 

echo json_encode($data);
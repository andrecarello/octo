<?php

// DEFINE A BASE URL
if ( isset( $_SERVER["HTTPS"] ) && strtolower( $_SERVER["HTTPS"] ) == "on" ) {
    $protocol = ($_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://';;
    $host = $_SERVER['HTTP_HOST'];
} else {
    $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://';
    $host = $_SERVER['HTTP_HOST'];
}

$url = $protocol . $host .'/';

// echo '<pre>';
// print_r($_SERVER);die();
define('BASE_URL', $url);
define('TITLE', 'FATOR DIGITAL');


// FUNCTIONS

if(!function_exists('checkUrl')){
    function checkUrl($link) {
        if (strpos($link, 'http:') !== false || strpos($link, 'https:') !== false) {
            return true;
        }

        return false;
    }
}

// CRIO A FUNCAO DE CARREGAMENTO DOS COMPONENTES
if(!function_exists('elements')){
    function elements($file) {

        $exploded = explode('.', $file);
        $return = '';
        foreach($exploded as $explode) {
            $return .= '/' . $explode;
        }
        
        include('elements'. $return .'.php');
    }
}

// CRIO A FUNCAO DE CARREGAMENTO DOS CSS
if(!function_exists('css')){
    function css($css = null, $rel = 'stylesheet', $type = 'css'){
        if ($rel == 'preload') {
            $rel = 'rel="preload" as="style"';
        } else {
            $rel = 'rel="stylesheet"';
        }

        return '<link '. $rel .' type="text/' . $type . '" href="' . (checkUrl($css) ? $css : BASE_URL . $css . '.css' ) . '">' . "\n";
    }
}

// CRIO A FUNCAO DE CARREGAMENTO DOS SCRIPTS
if(!function_exists('js')){
    function js($js = null, $type = 'javascript'){
        return '<script type="text/' . $type . '" src="'. (checkUrl($js) ? $js : BASE_URL . $js . '.js') .'"></script>' . "\n";
    }
}
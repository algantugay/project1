<?php

session_start();

require __DIR__.'/config/config.php';

foreach(glob(BASEDIR.'/helpers/*.php') as $file){
    require $file;
}

$config['route'][0]= 'home';
$config['lang'] = 'tr';

if(isset($_GET['route'])){
    preg_match('@(?<lang>\b[a-z]{2}\b)?/?(?<route>.+)/?@', $_GET['route'], $result);
}

if (isset($result['lang'])){
    if(file_exists(__DIR__.'/language/'.$result['lang'].'.php')){
        $config['lang'] = $result['lang'];
    }else{
        $config['lang'] = 'tr';
    }
}

if (isset($result['route'])){
$config['route'] = explode('/', $result['route']);
}

require BASEDIR.'/language/'.$config['lang'].'.php';

if (file_exists(BASEDIR.'/Controller/'.$config['route'][0].'.php')){
    require BASEDIR.'/Controller/'.$config['route'][0].'.php';
}else{
    echo 'Sayfa bulunamadı!';
}


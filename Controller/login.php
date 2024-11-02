<?php

if (route(index:0) == 'login'){
    
    if (isset($_POST['submit'])) {
        $eposta = post('eposta');
        $sifre = post('sifre');

        echo $eposta. ' '.$sifre;
    }

    view('auth/login');

}
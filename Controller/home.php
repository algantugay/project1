<?php

if (route(index:0) == 'home'){
    
    //DB

    view('home/home',[
        'isim' => 'Tugay',
        'soyisim' => 'ALGAN'
    ]);

}
<?php

use Boolval\Routing\Route;


Route::method('GET')->uri('')->include('/view/index');

Route::method('GET')->uri(':number')->include('/view/index');

Route::method('GET')->uri(':number')->call([new App\Test, 'index']);


Route::segment('admin')->group(function () {

    Route::uri('')->call(function () {
        echo '!!!!!!!!!!!';
    });

    Route::uri('a')->call(function () {
        echo 'a';
    });


    Route::segment('user')->group(function () {
    
        Route::uri('1')->call(function () {
            echo '1';
        });
    
        Route::uri('2')->call(function () {
            echo '2222';
        });
    });


    Route::uri('b')->call(function () {
        echo 'b';
    });
});


Route::segment('user')->group(function () {

    Route::uri('1')->call(function () {
        echo '1';
    });

    Route::uri('2')->call(function () {
        echo '32323232';
    });
});


Route::uri('c')->call(function () {
    echo 'c';
});


Route::method('GET')->uri('')->call(function () {
    echo 34243234;
});



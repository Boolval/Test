<?php

require '../vendor/autoload.php';


/**
 *
 */
Boolval\App::include('route/index')
    ->include('route/301')
    ->abort(404);



<?php

require '../vendor/autoload.php';


/**
 *
 */
Boolval\Foundation\Application::include('route/index')
    ->include('route/301')
    ->abort(404);



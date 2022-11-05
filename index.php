<?php

use core\Routerr;
use core\Request;
require_once "vendor\autoload.php";
require_once 'core\bootstrap.php';

Routerr::load('app/routes.php')
    ->direct(Request::uri(), Request::method());




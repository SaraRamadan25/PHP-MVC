<?php

use core\Request;
use core\Routerr;

require "vendor\autoload.php";
require 'core\bootstrap.php';



Routerr::load('app/routes.php')
    ->direct(Request::uri(), Request::method());




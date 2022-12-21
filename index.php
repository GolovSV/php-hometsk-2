<?php

require_once './vendor/autoload.php';

use App\Checker;


unset($argv[0]);
Checker::run($argv);
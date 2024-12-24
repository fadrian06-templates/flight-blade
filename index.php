<?php

const ROOT = __DIR__;

require ROOT . '/vendor/autoload.php';
require ROOT . '/config/view.php';
require ROOT . '/routes/web.php';

Flight::start();

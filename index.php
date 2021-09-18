<?php

// security constant
define('VG_ACCESS', true);

header('Content-Type: text/html; charset=utf-8');
session_start();

require_once 'config.php';
require_once 'core/base/settings/internal_settings.php';

function load($classname)
{
    $classname = str_replace('\\', '/', $classname);
    include $classname . '.php';
}

spl_autoload_register('load');

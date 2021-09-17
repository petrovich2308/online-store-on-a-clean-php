<?php

defined('VG_ACCESS') or die('Access denied');

/**
 * TEMPLATE - path to site templates
 * ADMIN_TEMPLATE - path to admin templates
 * COOKIE_VERSION - versions of cookies
 * CRYPT_KEY - encryption key
 * BLOCK_TIME - number of login attempts
 * QTY - the number of output records for pagination
 * QTY_LINKS - the number of links in pagination
 * ADMIN_CSS_JS - css and js files for admin panel
 * USER_CSS_JS - css and js files for the user part
 */
const TEMPLATE = 'templates/default/';
const ADMIN_TEMPLATE = 'core/admin/views/';

const COOKIE_VERSION = '1.0.0';
const CRYPT_KEY = '';
const COOKIE_TIME = 60;
const BLOCK_TIME = 3;

const QTY = 8;
const QTY_LINKS = 3;

const ADMIN_CSS_JS = [
    'styles' => [],
    'scripts' => []
];
const USER_CSS_JS = [
    'styles' => [],
    'scripts' => []
];

<?php
/**
 * index.php
 * 
 * Default Environment-based application loading
 * 
 * @author Maxwell Vandervelde <Maxwell.Vandervelde@nerdery.com>
 * @copyright (c) 2012-2013, The Nerdery
 * @license MIT
 */

defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'prod'));

if ('prod' === APPLICATION_ENV) {
    require dirname(__FILE__) . '/app.php';
} elseif ('dev' === APPLICATION_ENV || 'staging' === APPLICATION_ENV) {
    require dirname(__FILE__) . '/app_dev.php';
} else {
    header('HTTP/1.0 500 Internal Server Error');
    exit('Improper APPLICATION_ENV set. See ' . basename(__FILE__) . ' for more information.');
}

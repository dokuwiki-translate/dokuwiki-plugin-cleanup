<?php
error_reporting(E_ALL ^ E_NOTICE);

if(!defined('DOKU_INC')) define('DOKU_INC',dirname(__FILE__).'/../../../');
define('DOKU_DISABLE_GZIP_OUTPUT', 1);
require_once(DOKU_INC.'inc/init.php');
session_write_close();

$plugin = plugin_load('helper','maintenance');

$plugin->run();
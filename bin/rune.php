#!/usr/bin/env php
<?php
/**
 * happy coding!!!
 */
! defined('BASE_PATH') && define('BASE_PATH', dirname(__DIR__, 1));

require BASE_PATH . '/vendor/autoload.php';

$str = 'Kdsnk思考发给你大开始接口sdasd';
for ($i = 0; $i < strlen($str); ++$i) {
    var_dump(ord($str[$i]));
}

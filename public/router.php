<?php
// +----------------------------------------------------------------------
// | 云帛九辰 [ WE CAN DO ALL THINGS ]
// +----------------------------------------------------------------------
// | Copyright (c) 2018-2028 http://www.yunbojiuchen.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: 云帛九辰 <jiuboyunchen@163.com>
// +----------------------------------------------------------------------
// $Id$

if (is_file($_SERVER["DOCUMENT_ROOT"] . $_SERVER["SCRIPT_NAME"])) {
    return false;
} else {
    if (!isset($_SERVER['PATH_INFO'])) {
        $_SERVER['PATH_INFO'] = $_SERVER['REQUEST_URI'];
    }
    require __DIR__ . "/index.php";
}

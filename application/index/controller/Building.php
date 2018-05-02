<?php
// +----------------------------------------------------------------------
// | 云帛九辰 [ WE CAN DO ALL THINGS ]
// +----------------------------------------------------------------------
// | Copyright (c) 2018-2028 http://www.yunbojiuchen.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: 云帛九辰 <jiuboyunchen@163.com>
// +----------------------------------------------------------------------

namespace app\index\controller;

/**
* 处理租售中心请求
*/
class Building extends \think\Controller
{
    /**
     * 显示租售中心信息
     */
    public function center(){
        // Do something
        return view('center', ['title' => '租售中心']);
    }

    /**
     * 显示房源信息
     */
    public function houseInfo(){
        // DO something
        return view('houseInfo', ['title' => '房源中心']);
    }
}
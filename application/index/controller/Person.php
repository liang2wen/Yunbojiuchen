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
* 处理个人中心请求
*/
class Person extends think\Controller
{
    /**
     * 个人信息中心
     */
    public function information(){
        // Do something
        return view('information', ['title' => '个人中心']);
    }

    /**
     * 身份绑定
     */
    public function bind(){
        // DO something
        return view('bind', ['title' => '身份绑定']);
    }

    /**
     * 每日签到
     */
    public function checkIn(){
        // DO something
        return view('checkIn', ['title' => '签到服务']);
    }
}
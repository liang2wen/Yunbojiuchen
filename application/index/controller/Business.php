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
* 处理办公必备请求
*/
class Business extends \think\Controller
{
    /**
     * 显示办公必备信息
     */
    public function office(){
        // Do something
        return view('office', ['title' => '办公中心']);
    }

    /**
     * 显示办公环境勘查信息
     */
    public function environment(){
        // DO something
        return view('environment', ['title' => '环境勘查']);
    }

    /**
     * 显示办公用品套装信息
     */
    public function supply(){
        // DO something
        return view('supply', ['title' => '办公用品']);
    }

    /**
     * 显示办公家具租赁信息
     */
    public function rent(){
        // DO something
        return view('rent', ['title' => '家具租赁']);
    }

    /**
     * 显示桶装水服务信息
     */
    public function water(){
        // DO something
        return view('water', ['title' => '桶装水服务']);
    }
}
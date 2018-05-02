<?php
// +----------------------------------------------------------------------
// | 云帛九辰 [ WE CAN DO ALL THINGS ]
// +----------------------------------------------------------------------
// | Copyright (c) 2018-2028 http://www.yunbojiuchen.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: 云帛九辰 <jiuboyunchen@163.com>
// +----------------------------------------------------------------------

namespace app\index\controller;
use think\Request;

class Verify
{
    /**
     * 微信接入验证
     */
    public function verify()
    {
        $echostr    = Request::instance()->get('echostr');
        $signature  = Request::instance()->get('signature');
        $nonce      = Request::instance()->get('nonce');
        $timestamp  = Request::instance()->get('timestamp');

        $signature_local = $this->getSHA1(TOKEN, $timestamp, $nonce);
        if ($signature_local == $signature) {
            return $echostr;
        }
        else{
            return "Verify is failed.";
        }
    }

    /**
     * 用SHA1算法生成安全签名
     * @param string $token 票据
     * @param string $timestamp 时间戳
     * @param string $nonce 随机字符串
     * @param string $encrypt 密文消息
     */
    private function getSHA1($token, $timestamp, $nonce)
    {
        //排序
        try {
            $array = array($token, $timestamp, $nonce);
            sort($array, SORT_STRING);
            $str = implode($array);
            return sha1($str);
        } catch (Exception $e) {
            return null;
        }
    }
}

<?php
// +----------------------------------------------------------------------
// | 云帛九辰 [ WE CAN DO ALL THINGS ]
// +----------------------------------------------------------------------
// | Copyright (c) 2018-2028 http://www.yunbojiuchen.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: 云帛九辰 <jiuboyunchen@163.com>
// +----------------------------------------------------------------------

// 模块index应用公共文件
use think\Session;
/**
* 通过Get请求方式获取微信的access_token
*/
function get_access_token()
{
    if(!Session::has('access_token')){
        refresh_access_token();
    }
    
    return Session::get('access_token');
}

/**
* Refresh微信的access_token
*/
function refresh_access_token()
{
    $url = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid='.APPID.'&secret='.APPSECRET;
    $result = http_request($url);
    $arr = json_decode($result, true);
    if(array_key_exists('access_token', $arr)){
        Session::set('access_token', $arr['access_token']);
    }else{
        throw new Exception($arr['errmsg'], $arr['errcode']);            
    }
}

/**
 * Http的Get或者Post请求
 * @param string $url  请求URL
 * @param array  $data 请求参数 如果该参数不为空，为Post请求，否则为Get请求
 */
function http_request($url, $data = null)  
{  
    $curl = curl_init();  
    curl_setopt($curl, CURLOPT_URL, $url);  
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);  
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);  
    if (! empty($data)) {  
        curl_setopt($curl, CURLOPT_POST, 1);  
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);  
    }  
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);  
    $output = curl_exec($curl);  
    curl_close($curl);  
    return $output;
}

?>
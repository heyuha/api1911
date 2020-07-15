<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function hello(){
    	echo "hello world";
    }

    //获取access_token 
    public function wxgettoken(){
    	$appid = "wxc995cb21dadc2fd8";
    	$appsecret = "c59aca85f61188b80cf5f824f0b6b6a8";
    	$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$appsecret;
    	$cont = file_get_contents($url);
    	$content = json_decode($cont,true);
    	print_r($content['access_token']);

    }
}

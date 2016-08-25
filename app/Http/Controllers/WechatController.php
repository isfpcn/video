<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WechatController extends Controller
{
    //
    public function serve()
    {
        $wechat = app('wechat');

        $wechat->server->setMessageHandler(function($message){
            return "欢迎关注 姚青松！";
        });

        return $wechat->server->serve();
    }
}

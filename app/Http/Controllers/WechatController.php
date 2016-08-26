<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Log;

class WechatController extends Controller
{
    //
    public function serve()
    {
        $wechat = app('wechat');

        $wechat->server->setMessageHandler(function($message){
            return "欢迎关注 姚青松！";
        });

        Log::DEBUG('yaoqingsong:',$wechat->server->getMessage());

        return $wechat->server->serve();
    }
}

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
        Log::info('request arrived.');
        $wechat->server->setMessageHandler(function($message){
            return '您好 isfp.cn';
        });
        Log::info('return  response.');
        //Log::debug('yaoqingsong:',$wechat->server->getMessage());

        return $wechat->server->serve();
    }
}


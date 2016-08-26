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
            switch ($message->MsgType) {
                case 'event':
                    # 事件消息...
                    break;
                case 'text':
                    Log::DEBUG('yaoqingsong',$message);
                    return 'yaoqingsong';
                    break;
                case 'image':
                    # 图片消息...
                    break;
                case 'voice':
                    # 语音消息...
                    break;
                case 'video':
                    # 视频消息...
                    break;
                case 'location':
                    # 坐标消息...
                    break;
                case 'link':
                    # 链接消息...
                    break;
                // ... 其它消息
                default:
                    # code...
                    break;
            }
        });

        //Log::debug('yaoqingsong:',$wechat->server->getMessage());

        //return $wechat->server->serve();
    }
}


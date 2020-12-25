<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use LINE\LINEBot;
use LINE\LINEBot\Constant\HTTPHeader;
use LINE\LINEBot\SignatureValidator;
use LINE\LINEBot\HTTPClient\CurlHTTPClient;
use LINE\LINEBot\KitchenSink\EventHandler\MessageHandler\TextMessageHandler;
use LINE\LINEBot\Event\MessageEvent\TextMessageBuilder;

class LineConroller extends Controller
{

    public function webhook(Request $request)
    {
        $lineChannelSecret = env('LINE_CHANNEL_SECRET','');
        $lineAccessToken = env('LINE_ACCESS_TOKEN','');

        $httpClient = new CurlHTTPClient($lineAccessToken);
        $lineBot = new LINEBot($httpClient,['channelSecret'=>$lineChannelSecret]);

        try {
            $events = $lineBot->parseEventRequest($request->getContent(),$signatrue);
            foreach($events as $event){
                $message = $event->getText();
                $replyToken = $event->getReplyToken();
                $taxtMessage = new TextMessageBuilder($message);
                $lineBot->replyMessage($replyToken,$taxtMessage);
            }
        } catch (Exception $e){
            return;
        }
        return;
    }
}
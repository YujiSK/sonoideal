<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LINE\LINEBot;
use LINE\LINEBot\HTTPClient\CurlHTTPClient;
use LINE\LINEBot\MessageBuilder\TextMessageBuilder;

class LineWebhookController extends Controller
{
    private $bot;
    private $signature;

    public function __construct()
    {
        // $httpClient = new CurlHTTPClient(env('LINE_CHANNEL_ACCESS_TOKEN'));
        // $bot = new LINEBot($httpClient, ['channelSecret' => env('LINE_CHANNEL_SECRET')]);
        $this->signature = 'X-Line-Signature';
    }

    public function handle(Request $request)
    {
        // $signature = $request->headers->get($this->signature);
        // if (empty($signature)) {
        //     \Log::error('Signature not set');
        //     return response()->json(['status' => 'error', 'message' => 'Signature not set'], 400);
        // }

        // if (!$this->bot->validateSignature($request->getContent(), $signature)) {
        //     \Log::error('Invalid signature');
        //     return response()->json(['status' => 'error', 'message' => 'Invalid signature'], 400);
        // }

        // try {
        //     $events = $this->bot->parseEventRequest($request->getContent(), $signature);
        // } catch (\LINE\LINEBot\Exception\InvalidEventRequestException $e) {
        //     \Log::error('Invalid event request', ['exception' => $e]);
        //     return response()->json(['status' => 'error', 'message' => 'Invalid event request'], 400);
        // }

        // foreach ($events as $event) {
        //     if ($event instanceof \LINE\LINEBot\Event\MessageEvent\TextMessage) {
        //         $replyToken = $event->getReplyToken();
        //         $text = $event->getText();
        //         \Log::info('Received message', ['text' => $text]);

        //         $messageBuilder = new TextMessageBuilder('Received: ' . $text);
        //         $response = $this->bot->replyMessage($replyToken, $messageBuilder);

        //         if ($response->isSucceeded()) {
        //             \Log::info('Reply message sent successfully');
        //         } else {
        //             \Log::error('Failed to send reply message', ['response' => $response->getRawBody()]);
        //         }
        //     }
        // }

        return response()->json(['status' => 'ok'], 200);
    }
}
<?php

namespace App\Http\Controllers\Line;

use App\Http\Controllers\Controller;
use App\Models\FreePages;
use App\Models\LinebotChannel;
use App\Models\Post;
use LINE\LINEBot;
use LINE\LINEBot\HTTPClient\CurlHTTPClient;
use LINE\LINEBot\MessageBuilder\TextMessageBuilder;

class TestController extends Controller
{
    public function index(): void
    {
        $linebot_channel = LinebotChannel::first();
        $httpClient = new CurlHTTPClient($linebot_channel->access_token);
        $bot = new LINEBot($httpClient, ['channelSecret' => $linebot_channel->channel_secret]);

        $textMessageBuilder = new TextMessageBuilder('hello');

        $linebot_channel_users = $linebot_channel->users()->where('friend_flag', '=', true)->get();

        foreach ($linebot_channel_users as $key => $linebot_channel_user) {
            $response = $bot->pushMessage("{$linebot_channel_user->pivot->line_user_id}", $textMessageBuilder);
        }

        var_dump('テスト');
    }

    public function union(): void
    {
        $post = Post::query()->select('name', 'created_at');

        $freePages = FreePages::query()->select('name', 'created_at')->union($post)->orderBy('created_at', 'desc')->get();
        dd($freePages);
    }
}

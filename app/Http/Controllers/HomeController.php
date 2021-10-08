<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use App\Models\WebhookResponse;
use GuzzleHttp\Client;
class HomeController extends Controller
{
    protected $client;
    public function __construct(Client $client)
    {
        $this->client   = $client;
    }


    public function Webhook(Request $request){
        Log::debug($request->all());
        WebhookResponse::create($request->only('topic', 'data'));   
    }

    public function Webhook2(Request $request){
        Log::debug($request->all());
        WebhookResponse::create($request->only('topic', 'data'));      
    }

    public function Subscribe(Request $request, $title){
        $request->validate([
            'url' => 'required|url',
        ]);

        $data = [
            "url" => $request->url
        ];
        $url = "http://127.0.0.1:8000/subscribe/".$title;
        $response   = $this->client->post($url, [
            'headers' => ['Content-Type' => 'application/json'],
            'body'      => json_encode($data)
        ]);

        return json_decode($response->getBody()->getContents());
    }
}

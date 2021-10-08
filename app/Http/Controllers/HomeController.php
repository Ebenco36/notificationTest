<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use App\Models\WebhookResponse;
class HomeController extends Controller
{
    //
    public function Webhook(Request $request){
        Log::debug($request->all());
        WebhookResponse::create($request->only('topic', 'data'));   
    }

    public function Webhook2(Request $request){
        Log::debug($request->all());
        WebhookResponse::create($request->only('topic', 'data'));      
    }
}

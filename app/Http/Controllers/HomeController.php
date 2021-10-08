<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class HomeController extends Controller
{
    //
    public function Webhook(Request $request){
        Log::debug($request->all());   
    }

    public function Webhook2(Request $request){
        Log::warning($request->all());   
    }
}

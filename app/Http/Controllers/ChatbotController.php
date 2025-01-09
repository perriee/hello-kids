<?php

namespace App\Http\Controllers;

use Gemini;
use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    public function index()
    {
        $page_title = "Chatbot";
        $chat = null;

        return view('user.pages.chatbot', compact('page_title', 'chat'));
    }

    public function sendMessage(Request $request)
    {
        $apiKey = getenv('GEMINI_API_KEY');
        $client = Gemini::client($apiKey);

        $result = $client->geminiPro()->generateContent('halo apa kabar mu hari ini?');

        $result->text(); // Hello! How can I assist you today?

        dd($result);

        // $page_title = "Chatbot";

        // $message = $request->input('message');
        // $chat = null;

        // if ($message) {
        //     // $chat = Gemini::geminiPro()->generateContent($message);
        // }



        // return view('user.pages.chatbot', compact('page_title', 'chat'));
    }
}

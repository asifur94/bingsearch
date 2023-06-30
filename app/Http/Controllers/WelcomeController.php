<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {





        // $news = [];

        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://contextualwebsearch-websearch-v1.p.rapidapi.com/api/search/NewsSearchAPI?q=top news today&pageNumber=1&pageSize=10&autoCorrect=true&fromPublishedDate=null&toPublishedDate=null', [
            'headers' => [
                'X-RapidAPI-Host' => 'contextualwebsearch-websearch-v1.p.rapidapi.com',
                // 'X-RapidAPI-Key' => 'bbeecc704cmsha1b4a5d92c24e7ap1dbbe8jsn61e0bebd869f', //client
                'X-RapidAPI-Key' => '41eb1f9e4amshe4a0c43e4f16265p1300e4jsnb10c8810c0af',
            ],
        ]);

        $data = json_decode($response->getBody(), true);
        $news = $data['value'];



        // $weather_response_data = [];

        $weather_client = new \GuzzleHttp\Client();
        $weather_response = $weather_client->request('GET', 'https://weatherbit-v1-mashape.p.rapidapi.com/current?lon=90.40&lat=23.81', [
            'headers' => [
                'X-RapidAPI-Host' => 'weatherbit-v1-mashape.p.rapidapi.com',
                // 'X-RapidAPI-Key' => 'bbeecc704cmsha1b4a5d92c24e7ap1dbbe8jsn61e0bebd869f', //client api
                'X-RapidAPI-Key' => '41eb1f9e4amshe4a0c43e4f16265p1300e4jsnb10c8810c0af',
            ],
        ]);

        $weather_response_data = json_decode($weather_response->getBody(), true);
        // dd($weather_response_data);
        // dd($weather_response_data['data'][0]['sunrise']);





        // $cricekt_response_data = [];

        $cricekt_client = new \GuzzleHttp\Client();

        $cricekt_response = $cricekt_client->request('GET', 'https://cricbuzz-cricket.p.rapidapi.com/mcenter/v1/71719/scard', [
            'headers' => [
                'X-RapidAPI-Host' => 'cricbuzz-cricket.p.rapidapi.com',
                'X-RapidAPI-Key' => 'a82fc556b2mshd63f8a586d83497p13b333jsnea08d23dad72',
            ],
        ]);
        $cricekt_response_data = json_decode($cricekt_response->getBody(), true);


        // $team1 = $cricekt_response_data['matchHeader']['team1']['name'];
        // $team2 = $cricekt_response_data['matchHeader']['team2']['name'];
        // $team1Run = $cricekt_response_data['scoreCard'][0]['scoreDetails']['runs'];
        // $team2Run = $cricekt_response_data['scoreCard'][1]['scoreDetails']['runs'];
        // $result = $cricekt_response_data['status'];
        // $date = date('Y-m-d', $cricekt_response_data['matchHeader']['matchStartTimestamp'] / 1000);
        // $matchFormat = $cricekt_response_data['matchHeader']['matchFormat'];
        // $matchType = $cricekt_response_data['matchHeader']['matchType'];


        return view('welcome', compact('news', 'weather_response_data', 'cricekt_response_data'));
    }

    public function search()
    {
       return view('search');

    }

    public function result(Request $request)
    {
        $keyword_string = $request->keyword_string;



        $client = new \GuzzleHttp\Client();
            // $apiKey = 'AIzaSyBZRvPhr0pZo6UCmIAnvDrxncyVuEGpk0g';
            // $apiKey = 'AIzaSyAKSXJmMGarUglmafvoTJSry--LNuhzVMg'; //working
            // $apiKey = 'AIzaSyDIcms38Ch-ghTYVvzd-F_pCdQCRSYZNmQ';  //working
            $apiKey = 'AIzaSyDIcms38Ch-ghTYVvzd-F_pCdQCRSYZNmQ';
            $searchEngineId = '96fd9eaa55a6d41f0';

        $url = 'https://content-customsearch.googleapis.com/customsearch/v1';
        $params = [
            'key' => $apiKey,
            'cx' => $searchEngineId,
            'q' => $keyword_string,
            'lr' => 'english',
            'fileType' => 'png,jpg,gif,mp4,avi',
        ];

        $response = $client->get($url, ['query' => $params]);
        $results =  json_decode($response->getBody(), true);


        $topData = $results['items'][0];


        return view('result_page', compact('results', 'keyword_string', 'topData'));

    }

    public function all($keyword_string)
    {



        $client = new \GuzzleHttp\Client();
            // $apiKey = 'AIzaSyBZRvPhr0pZo6UCmIAnvDrxncyVuEGpk0g';
            // $apiKey = 'AIzaSyAKSXJmMGarUglmafvoTJSry--LNuhzVMg'; //working
            // $apiKey = 'AIzaSyDIcms38Ch-ghTYVvzd-F_pCdQCRSYZNmQ';  //working
            $apiKey = 'AIzaSyDIcms38Ch-ghTYVvzd-F_pCdQCRSYZNmQ';
            $searchEngineId = '96fd9eaa55a6d41f0';

        $url = 'https://content-customsearch.googleapis.com/customsearch/v1';
        $params = [
            'key' => $apiKey,
            'cx' => $searchEngineId,
            'q' => $keyword_string,
            'lr' => 'english',
            'fileType' => 'png,jpg,gif,mp4,avi',
        ];

        $response = $client->get($url, ['query' => $params]);
        $results =  json_decode($response->getBody(), true);


        $topData = $results['items'][0];


        return view('all', compact('results', 'keyword_string', 'topData'));

    }

    public function image($keyword_string)
    {



        $client = new \GuzzleHttp\Client();
            // $apiKey = 'AIzaSyBZRvPhr0pZo6UCmIAnvDrxncyVuEGpk0g';
            // $apiKey = 'AIzaSyAKSXJmMGarUglmafvoTJSry--LNuhzVMg'; //working
            // $apiKey = 'AIzaSyDIcms38Ch-ghTYVvzd-F_pCdQCRSYZNmQ';  //working
            $apiKey = 'AIzaSyDIcms38Ch-ghTYVvzd-F_pCdQCRSYZNmQ';
            $searchEngineId = '96fd9eaa55a6d41f0';

        $url = 'https://content-customsearch.googleapis.com/customsearch/v1';
        $params = [
            'key' => $apiKey,
            'cx' => $searchEngineId,
            'q' => $keyword_string,
            'lr' => 'english',
            'fileType' => 'png,jpg,gif,mp4,avi',
        ];

        $response = $client->get($url, ['query' => $params]);
        $results =  json_decode($response->getBody(), true);


        $topData = $results['items'][0];


        return view('image', compact('results', 'keyword_string', 'topData'));

    }

    public function maps($keyword_string)
    {
        $results = [];
        return view('maps', compact('keyword_string', 'results'));

    }

    public function news($keyword_string)
    {

        $news = [];


        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://contextualwebsearch-websearch-v1.p.rapidapi.com/api/search/NewsSearchAPI?q='. $keyword_string .'&pageNumber=1&pageSize=10&autoCorrect=true&fromPublishedDate=null&toPublishedDate=null', [
            'headers' => [
                'X-RapidAPI-Host' => 'contextualwebsearch-websearch-v1.p.rapidapi.com',
                'X-RapidAPI-Key' => 'bbeecc704cmsha1b4a5d92c24e7ap1dbbe8jsn61e0bebd869f',
            ],
        ]);

        $data = json_decode($response->getBody(), true);
        $news = $data['value'];

        return view('news', compact('news', 'keyword_string'));
    }

    public function chat_form()
    {
        return view('chat');
    }



    public function chat(Request $request)
    {
        
        $message = $request->input('message');
        $response = $this->sendChatRequest($message);
        $reply = $response['choices'][0]['message']['content'];

        return response()->json(['reply' => $reply]);
    }

    private function sendChatRequest($message)
    {

        $client =  new \GuzzleHttp\Client();
        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
        ];
        $url = 'https://api.openai.com/v1/chat/completions';

        $data = [
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'system', 'content' => 'You are a user'],
                ['role' => 'assistant', 'content' => $message],
            ],
        ];

        $response = $client->post($url, [
            'headers' => $headers,
            'body' => json_encode($data),
        ]);

        return json_decode($response->getBody(), true);
    }




}

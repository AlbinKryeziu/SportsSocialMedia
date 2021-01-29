<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

use Illuminate\Http\Request;

class SportController extends Controller
{
    public function football()
    {
        $url = Http::get('https://apiv2.apifootball.com/?action=get_events&from=2021-01-28&to=2021-01-29&country_id=135&APIkey=b1b33936167ae9986dbd0c71f2950735abd868037592a685e97d371e60bfa3f7');
        $responseBody = json_decode($url->getBody());
        return view('sports/football', compact('responseBody'));
    }

    public function basketball()
    {
        $url = Http::get('http://api.isportsapi.com/sport/basketball/schedule/basic?api_key=oEpTyKOe4YGRVie6&leagueId=111');
        $responseBody = json_decode((string) $url->getBody(), true);
        return view('sports/basketball', compact('responseBody'));
    }
    public function baseball()
    {
        $url = Http::get('http://lookup-service-prod.mlb.com/json/named.player_teams.bam?season=%272014%27&player_id=%27493316%27');
        $responseBody = json_decode((string) $url->getBody(), true);
        return view('sports/baseball', compact('responseBody'));
    }
}

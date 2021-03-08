<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

use Illuminate\Http\Request;

class SportController extends Controller
{
    public function soccer()
    {
        $client = new Client();
        if (request()->has('league')) {
            $ekipid = request()->get('league');
        } else {
            $ekipid = 4328;
        }

        $url = "https://thesportsdb.p.rapidapi.com/lookuptable.php?l=$ekipid";

        $headers = [
            'X-RapidAPI-Key' => 'b2fe0a1c71mshd793bd83f6fda64p17305ajsna2276b1c9cee',
            'x-rapidapi-host' => 'thesportsdb.p.rapidapi.com',
        ];

        $response = $client->request('GET', $url, [
            'headers' => $headers,
            'verify' => false,
        ]);

        $point = json_decode((string) $response->getBody(), true);

        $livescore = new Client();
        $urllivescore = "https://thesportsdb.p.rapidapi.com/latestsoccer.php";
        $headersLivescore = [
            'X-RapidAPI-Key' => 'b2fe0a1c71mshd793bd83f6fda64p17305ajsna2276b1c9cee',
            'x-rapidapi-host' => 'thesportsdb.p.rapidapi.com',
        ];
        $responseLivescore = $livescore->request('GET', $urllivescore, [
            'headers' => $headersLivescore,
            'verify' => false,
        ]);
        $liveScore = json_decode((string) $responseLivescore->getBody(), true);

        return view('sports/soccer', compact('point', 'liveScore'));
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

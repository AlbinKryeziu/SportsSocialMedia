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
        $client = new Client();
        if (request()->has('league')) {
            $ekipid = request()->get('league');
        } else {
            $ekipid = 4387;
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

        $basketballPoint = json_decode((string) $response->getBody(), true);

        $livescore = new Client();
        $urllivescore = "https://thesportsdb.p.rapidapi.com/latestbasketball.php";
        $headersLivescore = [
            'X-RapidAPI-Key' => 'b2fe0a1c71mshd793bd83f6fda64p17305ajsna2276b1c9cee',
            'x-rapidapi-host' => 'thesportsdb.p.rapidapi.com',
        ];
        $responseLivescore = $livescore->request('GET', $urllivescore, [
            'headers' => $headersLivescore,
            'verify' => false,
        ]);
        $liveScore = json_decode((string) $responseLivescore->getBody(), true);
        return view('sports/basketball', compact('basketballPoint','liveScore'));
    }
    public function baseball()
    {
        $client = new Client();
        if (request()->has('league')) {
            $ekipid = request()->get('league');
        } else {
            $ekipid = 4424;
        }

        $url = "https://thesportsdb.p.rapidapi.com/lookuptable.php?l=$ekipid&s=2020";

        $headers = [
            'X-RapidAPI-Key' => 'b2fe0a1c71mshd793bd83f6fda64p17305ajsna2276b1c9cee',
            'x-rapidapi-host' => 'thesportsdb.p.rapidapi.com',
        ];

        $response = $client->request('GET', $url, [
            'headers' => $headers,
            'verify' => false,
        ]);

        $baseball = json_decode((string) $response->getBody(), true);

        return view('sports/baseball', compact('baseball'));
    }

    public function hockey()
    {
        $client = new Client();

        $url = "https://thesportsdb.p.rapidapi.com/latesticehockey.php";

        $headers = [
            'X-RapidAPI-Key' => 'b2fe0a1c71mshd793bd83f6fda64p17305ajsna2276b1c9cee',
            'x-rapidapi-host' => 'thesportsdb.p.rapidapi.com',
        ];

        $response = $client->request('GET', $url, [
            'headers' => $headers,
            'verify' => false,
        ]);

        $soccer = json_decode((string) $response->getBody(), true);

        $clientTable = new Client();
        $client = new Client();
        if (request()->has('league')) {
            $ekipid = request()->get('league');
        } else {
            $ekipid = 4380;
        }
        $urltable = "https://thesportsdb.p.rapidapi.com/lookuptable.php?l=$ekipid&s=2020-2021";

        $headersTable = [
            'X-RapidAPI-Key' => 'b2fe0a1c71mshd793bd83f6fda64p17305ajsna2276b1c9cee',
            'x-rapidapi-host' => 'thesportsdb.p.rapidapi.com',
        ];

        $responseTable = $clientTable->request('GET', $urltable, [
            'headers' => $headersTable,
            'verify' => false,
        ]);

        $soccertTable = json_decode((string) $responseTable->getBody(), true);

        return view('sports/hockey', compact('soccer', 'soccertTable'));
    }

    public function boxing()
    {
        $client = new Client();

        $url = "https://thesportsdb.p.rapidapi.com/lookup_all_teams.php?id=4445";

        $headers = [
            'X-RapidAPI-Key' => 'b2fe0a1c71mshd793bd83f6fda64p17305ajsna2276b1c9cee',
            'x-rapidapi-host' => 'thesportsdb.p.rapidapi.com',
        ];

        $response = $client->request('GET', $url, [
            'headers' => $headers,
            'verify' => false,
        ]);

        $boxing = json_decode((string) $response->getBody(), true);

        return view('sports/boxing', compact('boxing'));
    }

    public function football()
    {
        $livescore = new Client();
        $urllivescore = "https://thesportsdb.p.rapidapi.com/eventspastleague.php?id=4391";
        $headersLivescore = [
            'X-RapidAPI-Key' => 'b2fe0a1c71mshd793bd83f6fda64p17305ajsna2276b1c9cee',
            'x-rapidapi-host' => 'thesportsdb.p.rapidapi.com',
        ];
        $responseLivescore = $livescore->request('GET', $urllivescore, [
            'headers' => $headersLivescore,
            'verify' => false,
        ]);
        $footballLastEvent = json_decode((string) $responseLivescore->getBody(), true);

        $nextEvent = new Client();

        $url = "https://thesportsdb.p.rapidapi.com/eventsnextleague.php?id=4796";
        $headerevent = [
            'X-RapidAPI-Key' => 'b2fe0a1c71mshd793bd83f6fda64p17305ajsna2276b1c9cee',
            'x-rapidapi-host' => 'thesportsdb.p.rapidapi.com',
        ];
        $response = $nextEvent->request('GET', $url, [
            'headers' => $headerevent,
            'verify' => false,
        ]);
        $nextEvent = json_decode((string) $response->getBody(), true);

        return view('sports/football', compact('footballLastEvent', 'nextEvent'));
    }
}

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

        $url = "https://thesportsdb.p.rapidapi.com/eventspastleague.php?id=4445";

        $headers = [
            'X-RapidAPI-Key' => 'b2fe0a1c71mshd793bd83f6fda64p17305ajsna2276b1c9cee',
            'x-rapidapi-host' => 'thesportsdb.p.rapidapi.com',
        ];

        $response = $client->request('GET', $url, [
            'headers' => $headers,
            'verify' => false,
        ]);

        $boxing = json_decode((string) $response->getBody(), true);

        $clientNextEvent = new Client();

        $urlNextEvent = "https://thesportsdb.p.rapidapi.com/eventsnextleague.php?id=4445";

        $headersNextEvent = [
            'X-RapidAPI-Key' => 'b2fe0a1c71mshd793bd83f6fda64p17305ajsna2276b1c9cee',
            'x-rapidapi-host' => 'thesportsdb.p.rapidapi.com',
        ];

        $responseNextEvent = $clientNextEvent->request('GET', $urlNextEvent, [
            'headers' => $headersNextEvent,
            'verify' => false,
        ]);

         $boxingNextEvent = json_decode((string) $responseNextEvent->getBody(), true);

        return view('sports/boxing', compact('boxing','boxingNextEvent'));
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

    public function tennis(){
        $client = new Client();

        $url = "https://thesportsdb.p.rapidapi.com/eventspastleague.php?id=4464";

        $headers = [
            'X-RapidAPI-Key' => 'b2fe0a1c71mshd793bd83f6fda64p17305ajsna2276b1c9cee',
            'x-rapidapi-host' => 'thesportsdb.p.rapidapi.com',
        ];

        $response = $client->request('GET', $url, [
            'headers' => $headers,
            'verify' => false,
        ]);

        $tennis = json_decode((string) $response->getBody(), true);
        return view('sports/tennis',compact('tennis'));
    }

    public function volleyball(){
        return view('sports/volleyball');
    }

    public function handball(){
        return view('sports/handball');
    }
    public function netball(){
        return view('sports/netball');
    }
    public function rugby(){
        $livescore = new Client();
        $urllivescore = "https://thesportsdb.p.rapidapi.com/lookuptable.php?l=4550&s=2020-2021";
        $headersLivescore = [
            'X-RapidAPI-Key' => 'b2fe0a1c71mshd793bd83f6fda64p17305ajsna2276b1c9cee',
            'x-rapidapi-host' => 'thesportsdb.p.rapidapi.com',
        ];
        $responseLivescore = $livescore->request('GET', $urllivescore, [
            'headers' => $headersLivescore,
            'verify' => false,
        ]);
        $rugbytable = json_decode((string) $responseLivescore->getBody(), true);

        $client = new Client();

        $url = "https://thesportsdb.p.rapidapi.com/eventsnextleague.php?id=4722";

        $headers = [
            'X-RapidAPI-Key' => 'b2fe0a1c71mshd793bd83f6fda64p17305ajsna2276b1c9cee',
            'x-rapidapi-host' => 'thesportsdb.p.rapidapi.com',
        ];

        $response = $client->request('GET', $url, [
            'headers' => $headers,
            'verify' => false,
        ]);

        $events = json_decode((string) $response->getBody(), true);
       
       
        return view('sports/rugby',compact('rugbytable','events'));
    }
    public function cycling(){
      

        $client = new Client();

        $url = "https://thesportsdb.p.rapidapi.com/eventsnextleague.php?id=4465";

        $headers = [
            'X-RapidAPI-Key' => 'b2fe0a1c71mshd793bd83f6fda64p17305ajsna2276b1c9cee',
            'x-rapidapi-host' => 'thesportsdb.p.rapidapi.com',
        ];

        $response = $client->request('GET', $url, [
            'headers' => $headers,
            'verify' => false,
        ]);

        $cycling = json_decode((string) $response->getBody(), true);
        return view('sports/cycling',compact('cycling'));
    }
    public function motorSport(){
        $client = new Client();

        $url = "https://thesportsdb.p.rapidapi.com/eventsnextleague.php?id=4370";

        $headers = [
            'X-RapidAPI-Key' => 'b2fe0a1c71mshd793bd83f6fda64p17305ajsna2276b1c9cee',
            'x-rapidapi-host' => 'thesportsdb.p.rapidapi.com',
        ];

        $response = $client->request('GET', $url, [
            'headers' => $headers,
            'verify' => false,
        ]);

        $motorSport = json_decode((string) $response->getBody(), true);

        return view('sports/motorSport',compact('motorSport'));
    }

    public function golf(){
        $client = new Client();

        $url = "https://thesportsdb.p.rapidapi.com/eventsnextleague.php?id=4370";

        $headers = [
            'X-RapidAPI-Key' => 'b2fe0a1c71mshd793bd83f6fda64p17305ajsna2276b1c9cee',
            'x-rapidapi-host' => 'thesportsdb.p.rapidapi.com',
        ];

        $response = $client->request('GET', $url, [
            'headers' => $headers,
            'verify' => false,
        ]);

        $golf = json_decode((string) $response->getBody(), true);
        return view('sports/golf',compact('golf'));
    }

    public function snooker(){
       
        $client = new Client();

        $url = "https://thesportsdb.p.rapidapi.com/eventspastleague.php?id=4555";

        $headers = [
            'X-RapidAPI-Key' => 'b2fe0a1c71mshd793bd83f6fda64p17305ajsna2276b1c9cee',
            'x-rapidapi-host' => 'thesportsdb.p.rapidapi.com',
        ];

        $response = $client->request('GET', $url, [
            'headers' => $headers,
            'verify' => false,
        ]);

        $snooker = json_decode((string) $response->getBody(), true);

        
        return view('sports/snooker',compact('snooker'));
    }

}

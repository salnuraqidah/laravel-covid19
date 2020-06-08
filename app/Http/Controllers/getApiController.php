<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class getApiController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('country')) {
            $country = $request->country;
        } else {
            $country = 'Indonesia';
        }
        $host = 'covid-19-coronavirus-statistics.p.rapidapi.com';
        $key = 'e8cff98bb1msh389fbc511ba83fdp1c49bejsn24e19ffae929';

        $list_data = $this->getApi($host, $key, $country)['data']['covid19Stats'][0];

        $list_country = $this->getApi($host, $key, $country = '')['data']['covid19Stats'];

        $country_array = [];

        foreach ($list_country as $result) {
            $country_array[] = $result['country'];
        }

        $country = collect($country_array)->unique();

        return view('report', compact('list_data', 'country'));
    }

    private function getApi($host, $key, $country)
    {

        return Http::withHeaders([
            'x-rapidapi-host' => $host,
            'x-rapidapi-key' => $key
        ])->get('https://covid-19-coronavirus-statistics.p.rapidapi.com/v1/stats', [
            "country" => $country
        ]);
    }
}

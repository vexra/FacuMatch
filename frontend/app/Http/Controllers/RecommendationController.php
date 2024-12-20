<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class RecommendationController extends Controller
{
    public function getRecommendation(Request $request)
    {
        $client = new Client();

        try {
            $response = $client->post('http://127.0.0.1:5000/rekomendasi', [
                'json' => $request->all(),
            ]);

            $responseBody = json_decode($response->getBody(), true);
            return view('recommendation-result', ['result' => $responseBody]);

        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Failed to connect to the expert system backend.']);
        }
    }
}


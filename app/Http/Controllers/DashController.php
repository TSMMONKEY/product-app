<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;

class DashController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('pages.home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $apiKey = env( 'RAPIDAPI_KEY' );
        $apiHost = env( 'X_RapidAPI_Host' );
        $client = new Client();

        try {
            $response = $client->get( 'https://asos2.p.rapidapi.com/products/v2/list', [
                'headers' => [
                    'X-RapidAPI-Key' => $apiKey,
                    'X-RapidAPI-Host' => $apiHost,
                ],
                'query' => [
                    'store' => 'US',
                    'offset' => 0,
                    'categoryId' => 4209,
                    'limit' => 48,
                    'country' => 'US',
                    'sort' => 'freshness',
                    'currency' => 'USD',
                    'sizeSchema' => 'US',
                    'lang' => 'en-US',
                    'q' => $request->input('search')
                ],
            ] );

            $data = json_decode( $response->getBody(), true );
            // Process $data as needed

            // $products = $data[ 'products' ];
            // Access the 'products' key from the decoded data

            $allProduct = response()->json( $data );

            // return $allProduct;
            // Return JSON response with products data
        } catch ( \Exception $e ) {
            // Handle errors
            return response()->json( [ 'error' => 'API request failed' ], 500 );
        }

        return view('pages.search', [
            'allSearchedProducts' => $allProduct,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;

class ShopController extends Controller {
    public function index() {
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
                ],
            ] );

            $data = json_decode( $response->getBody(), true );
            // Process $data as needed

            $products = $data[ 'products' ];
            // Access the 'products' key from the decoded data

            $allProduct = response()->json( $products );
            // Return JSON response with products data
        } catch ( \Exception $e ) {
            // Handle errors
            return response()->json( [ 'error' => 'API request failed' ], 500 );
        }

        return view( 'pages.shop', [
            'allProduct' => $products,
        ] );
    }

    public function show( Request $request, $name, $id ) {

        $apiKey = env( 'RAPIDAPI_KEY' );
        $apiHost = env( 'X_RapidAPI_Host' );
        $client = new Client();

        try {
            $response = $client->get( "https://{$apiHost}/products/detail", [
                'headers' => [
                    'X-RapidAPI-Key' => $apiKey,
                    'X-RapidAPI-Host' => $apiHost,
                ],
                'query' => [
                    'id' => $id,
                    'lang' => 'en-US',
                    'store' => 'US',
                    'currency' => 'USD',
                    'sizeSchema' => 'US'
                ],
            ] );

            $productData = json_decode( $response->getBody(), true );

        } catch ( \Exception $e ) {
            // Handle errors
            return response()->json( [ 'error' => 'API request failed' ], 500 );
        }

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
                ],
            ] );

            $data = json_decode( $response->getBody(), true );
            // Process $data as needed

            $products = $data[ 'products' ];
            // Access the 'products' key from the decoded data

            $allProduct = response()->json( $products );
            // Return JSON response with products data
        } catch ( \Exception $e ) {
            // Handle errors
            return response()->json( [ 'error' => 'API request failed' ], 500 );
        }
        
        return view( 'pages.single-product', [
            'AllProductData' => $productData,
            'AllProducts' => $products,
        ] );
    }
}

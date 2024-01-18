<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $productId = '2955680';

        $apiUrl = "https://api.digikala.com/v1/product/$productId/";

        $response = Http::get($apiUrl);

        $jsonData = $response->json();

        dd($jsonData['data']['product']);
    }
}

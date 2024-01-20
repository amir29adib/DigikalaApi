<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function show($product_id)
    {
        $apiUrl = "https://api.digikala.com/v1/product/$product_id/";

        $response = Http::get($apiUrl);

        $jsonData = $response->json();

        if ($jsonData['status'] == 200) {

            $product = $jsonData['data']['product'];

            return view('product', compact('product'));

        } else {

            return redirect()->route('choose')->with('status_code', $jsonData['status']);
        }
    }

    public function choose(Request $request) {

        $product_id = $request->input('product_id');

        return redirect()->route('product.show', ['product_id' => $product_id]);

    }
}

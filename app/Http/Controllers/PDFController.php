<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;

class PDFController extends Controller
{
    public function export($product_id)
    {
        $apiUrl = "https://api.digikala.com/v1/product/$product_id/";

        $response = Http::get($apiUrl);

        $jsonData = $response->json();

        $product = $jsonData['data']['product'];

        // Generate HTML content
        $html = view('pdf', compact('product'))->render();

        $pdf = App::make('snappy.pdf.wrapper');
        $pdf->loadHTML($html);

        $pdt_name = $product['title_fa'];
        return $pdf->download("$pdt_name.pdf");

//        return view("pdf" , compact('product'));
    }
}

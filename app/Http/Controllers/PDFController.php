<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PDFController extends Controller
{
    public function export($product_id)
    {
        $apiUrl = "https://api.digikala.com/v1/product/$product_id/";

        $response = Http::get($apiUrl);

        $jsonData = $response->json();

        $product = $jsonData['data']['product'];

        $pdf = PDF::loadView('pdf', compact('product'));

        $pdt_name = $product['title_fa'];

        return $pdf->download("$pdt_name.pdf");
    }
}

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

        // Generate HTML content
        $html = view('pdf', compact('product'))->render();

        // Generate PDF from HTML
        $pdf = PDF::loadHTML($html);

        $pdt_name = $product['title_fa'];

        return $pdf->download("$pdt_name.pdf");
    }
}

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قیمت و خرید {{ $product['title_fa'] }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.rtl.min.css') }}" rel="stylesheet">
    <link href="{{ asset('favicon.ico') }}" rel="icon" type="image/x-icon">
</head>
<body>
<div class="container-fluid rtl pt-4">
<div class="d-flex w-100 mb-3 px-2">
    <div class="col-12 col-md-6 mb-lg-3 mb-2">
        @foreach($product['breadcrumb'] as $breadcrumb)
            @if(!$loop->last)
                <a class="text-neutral-500 text-body-2" href="#">
                    @if(!$loop->first)
                        <span class="mx-2">/</span>
                    @endif
                    {{ $breadcrumb['title'] }}
                </a>
            @endif
        @endforeach
    </div>
</div>
<div class="d-flex w-100 mt-3 px-2">
    <div class="col-12 col-md-4">
        <div class="w-100 overflow-hidden text-center">
            <img class="mw-100 object-fit-cover" src="{{ $product['images']['main']['url'][0] }}" alt="">
        </div>
    </div>
    <div class="col-12 col-md-8">
        <div class="d-flex align-items-center w-100 px-5 px-lg-0">
            <div>
                <div class="d-flex align-items-center">
                    <nav class="d-flex align-items-center">
                        <a href="#">
                            <span class="text-secondary-500 text-body1-strong">{{ $product['brand']['title_fa'] }}</span>
                        </a>
                        <a href="#">
                            <div class="d-flex align-items-center">
                                <p class="text-neutral-300 mx-2"> / </p>
                                <p class="text-secondary-500 text-body1-strong">
                                    {{ $product['category']['title_fa'] }}
                                    {{ $product['brand']['title_fa'] }}
                                </p>
                            </div>
                        </a>
                    </nav>
                </div>
                <h1 class="text-h4 text-neutral-900 mb-2 pointer-events-none">کاور مدل GD-1 مناسب برای گوشی موبایل سامسونگ Galaxy A11</h1>
            </div>
        </div>
        <div class="d-flex align-items-center w-100 mt-3 px-2">
            <div class="pb-3 min-w-0 mx-5 mx-lg-0 pb-lg-3 styles_InfoSection__wrapper__e2TLb styles_InfoSection__variantInfo__PVSw4">
                <div class="d-flex align-items-center">
                    <span class="text-neutral-300 ml-2 text-body-2"></span>
                    <div class="bg-neutral-200 grow styles_VariantInfo__enTitleLine__HNqBN"></div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center mt-2">
                        <div style="width: 16px; height: 16px; line-height: 0;">
                            <picture>
                                <img class="w-100 d-inline-block" src="{{ asset('img/star-yellow.png') }}" width="16" height="16" alt="امتیاز" title="" style="object-fit: contain;">
                            </picture>
                        </div>
                        <p class="text-body-2" style="margin-left: 4px">{{ $product['data_layer']['dimension9'] }}</p>
                        <p class="text-caption text-neutral-300">(امتیاز {{ $product['data_layer']['metric6'] }} خریدار)</p>
                        <div class="flex mr-1">
                            <svg style="width: 16px; height: 16px; fill: #e0e0e2;">
                                <use xlink:href="#dotOutline"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-2">
                        <span class="d-inline-flex align-items-center cursor-pointer text-body-2 text-secondary-500 mx-1 cursor-pointer text-body-2">
                            <span>{{ $product['comments_count'] }} دیدگاه</span>
                        </span>
                        <div class="flex text-neutral-300">
                            <svg style="width: 16px; height: 16px; fill: #e0e0e2;">
                                <use xlink:href="#dotOutline"></use>
                            </svg>
                        </div>
                    </div>
                    <span class="d-inline-flex align-items-center cursor-pointer text-secondary-500 text-body-2 mt-2 mx-1 cursor-pointer">
                        <span>{{ $product['questions_count'] }} پرسش</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>

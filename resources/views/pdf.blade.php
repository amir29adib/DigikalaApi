<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    .d-flex, .flex {
        display: -webkit-box; /* wkhtmltopdf uses this one */
        display: flex;
    }

    body a {
        text-decoration: none;
    }

    body p, body li, body ul {
        margin: 0;
        padding: 0;
    }

    *, body {
        font-family: 'IRANYekan', serif;
        font-size: 14px
    }

</style>
<div class="container rtl py-5 px-3">
<div class="col-12 d-flex mt-3 px-2 mb-3">
    <div class="col-6">
        <div class="w-100 overflow-hidden text-center">
            <img class="mw-100 object-fit-cover" src="{{ $product['images']['main']['url'][0] }}" alt="">
        </div>
    </div>
    <div class="col-6 pt-4">
        <div class="col-12">
            <div>
                <div class="d-flex align-items-center">
                    <nav class="d-flex align-items-center mb-3">
                        <h4 class="text-nowrap">{{ $product['brand']['title_fa'] }}</h4>
                        <div class="d-flex align-items-center">
                            <p class="text-neutral-300 mx-2 text-nowrap"> / </p>
                            <p class="text-secondary-500 text-body1-strong text-nowrap">
                                {{ $product['category']['title_fa'] }}
                                {{ $product['brand']['title_fa'] }}
                            </p>
                        </div>
                    </nav>
                </div>
                <h1 class="text-h4 text-neutral-900 mb-2 pointer-events-none">{{ $product['title_fa'] }}</h1>
            </div>
        </div>
        <div class="col-12 mt-3 px-2">
            <div class="pb-3 min-w-0 pb-lg-3 styles_InfoSection__wrapper__e2TLb styles_InfoSection__variantInfo__PVSw4">
                <div class="d-flex align-items-center">
                    <span class="text-neutral-300 ms-2 text-body-2"></span>
                    <div class="bg-neutral-200 grow styles_VariantInfo__enTitleLine__HNqBN"></div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="col-12">
                <div class="border-complete-t mt-3 mt-lg-0">
                @if(count($product['default_variant']) > 0)
                <div class="break-words py-3">
                    <div class="d-flex align-items-center grow">
                        <p class="grow text-h5 text-neutral-900">
                            <span class="position-relative">رنگ: {{ $product['default_variant']['color']['title']  }}</span>
                        </p>
                    </div>
                </div>
                <div class="d-lg-flex flex-lg-wrap overflow-x-auto">
                    @foreach($product['colors'] as $color)
                        <div class="bg-neutral-000 d-lg-flex align-items-center justify-content-center cursor-pointer mb-2 ms-2 px-2 px-lg-0 styles_InfoSectionVariationColor__pX_3M styles_InfoSectionVariationColor__selected__MqDpU">
                        <div class="whitespace-nowrap">
                            <div class="d-flex align-items-center">
                                    <div class="rounded-circle d-flex align-items-center justify-content-center styles_InfoSectionVariationColorContent__iconWrapper__WEy3t">
                                        <div class="rounded-circle mx-auto border-complete border-none d-flex align-items-center justify-content-center styles_InfoSectionVariationColorContent__main__OUcdN" style="background: {{$color['hex_code']}};">
                                            <div class="d-flex align-items-center justify-content-center">
                                                @if ($product['default_variant']['color']['hex_code'] == $color['hex_code'])
                                                    <i  class="fas fa-check px-1" style="color: #ffffff; font-size: 13px"></i>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="d-lg-flex flex-lg-wrap overflow-x-auto">
                    <ul class="w-100 mx-lg-0 pb-lg-3 styles_InfoSection__wrapper__e2TLb border-complete-b pb-1">
                        <div class="break-words py-3">
                            <div class="d-flex align-items-center grow">
                                <p class="grow text-h5 text-neutral-900">
                                    <span class="position-relative">ویژگی&zwnj;ها</span>
                                </p>
                            </div>
                        </div>
                        @foreach($product['review']['attributes'] as $attribute)
                            <li class="d-flex align-items-start mb-1">
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center ms-1">
                                    <i class="fas fa-circle" style="font-size: 4px; color: #81858b;"></i>
                                </div>
                                <p class="text-neutral-500 text-body-1 text-nowrap">{{ $attribute['title'] }}&nbsp:</p>
                            </div>
                            <p class="text-body1-strong me-2 text-neutral-700 text-nowrap">{{ $attribute['values'][0] }}</p>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @else
                  <div class="py-8"></div>
                @endif
                  <div class="d-lg-flex flex-lg-wrap overflow-x-auto ps-lg-3">
                      <div class="rounded my-3 mx-lg-0">
                          <div class="d-flex">
                              <div class="d-flex align-items-start ms-2">
                                  <i class="fas fa-info-circle" style="font-size: 14px; color: #81858b;"></i>
                              </div>
                              <span class="ms-2 text-body-2 text-neutral-500">{{ $product['category']['return_reason_alert'] }}</span>
                          </div>
                      </div>
                  </div>

                </div>
            </div>
            <div class="col-12">
                @if(count($product['default_variant']) > 0)
                    <div class="d-flex flex-column me-lg-3 mb-lg-3 styles_InfoSection__buyBoxContainer__3nOwP">
                        <div class="d-flex flex-col gap-y-1 mx-0 lg:mx-5 py-3 px-4 lg:px-0 border-complete-t-200 text-body-2"></div>
                        <div class="relative w-100 p-4 rounded-3" style="background-color: #e2e8f0">
                            <div class="w-100  z-3 bg-neutral-000 styles_BuyBoxFooter__actionWrapper__Hl4e7">
                                <div>
                                    <div class="col-12 px-4 px-lg-0 pb-2 pb-lg-0">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex mb-4">
                                                <div class="d-flex cursor-pointer">
                                                    <i class="d-flex justify-content-between align-items-center fas fa-circle-info" style="width: 18px; height: 18px; font-size: 15px; color: #000;"></i>
                                                </div>
                                                <div class="z-4 text-body-2 styles_Tooltip__tooltip___Mj8o styles_Tooltip__tooltip--inactive__vFMA1" data-popper-escaped="true" data-popper-placement="top">
                                                    این کالا توسط فروشنده آن، {{ $product['default_variant']['seller']['title'] }}، قیمت&zwnj;گذاری شده&zwnj; است.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            @if($product['default_variant']['price']['rrp_price'] != $product['default_variant']['price']['selling_price'])
                                                <div class="col-12">
                                                    <div class="d-flex align-items-center mb-3">
                                                        <p class="ms-2 text-nowrap">قیمت اصلی</p>
                                                        <span class="line-through text-body-2 ms-1 text-neutral-300 text-nowrap" data-testid="price-no-discount">{{ number_format($product['default_variant']['price']['rrp_price'])  }}</span>
                                                        <div class="d-flex me-1" style="font-size: 8px">تومان</div>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-3 ">
                                                        <p class="ms-2 text-nowrap">درصد تخفیف</p>
                                                        <span class="line-through text-body-2 ms-1 text-neutral-300 text-nowrap" data-testid="price-no-discount">{{ number_format($product['default_variant']['price']['discount_percent'])  }} %</span>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="d-flex flex-row align-items-center">
                                                <p class="ms-2 text-nowrap">قیمت فروش کالا</p>
                                                <span class="text-neutral-800 ms-1 text-h4 text-nowrap" data-testid="price-final">{{ number_format($product['default_variant']['price']['selling_price'])  }}</span>
                                                <div class="d-flex me-1" style="font-size: 8px">تومان</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                    <div class="relative flex flex-col align-items-center" data-testid="buy-box">
                        <div class="p-4 lg:text-center">
                            <p class="text-neutral-700 text-right text-lg-center text-body-1">این کالا فعلا موجود نیست.</p>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('favicon.ico') }}" rel="icon" type="image/x-icon">
</head>
<body>
<div class="container rtl py-5 px-3">
<div class="col-12 d-lg-flex mb-3 px-2">
    <div class="col-12 mb-lg-3 mb-2">
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
<div class="col-12 d-lg-flex mt-3 px-2 mb-3">
    <div class="col-12 col-lg-4">
        <div class="w-100 overflow-hidden text-center">
            <img class="mw-100 object-fit-cover" src="{{ $product['images']['main']['url'][0] }}" alt="">
        </div>
        <div class="d-flex flex-wrap align-items-center mt-5 mb-3 w-100" height="82">
            @foreach($product['images']['list'] as $image)
                <div class="rounded border-complete-200 p-1 me-2 mb-lg-0 mb-2">
                    <div style="width: 72px; height: 72px; line-height: 0;">
                        <picture>
                            <source type="image/webp" srcset="{{ $image['webp_url'][0] }}">
                            <source type="image/jpeg" srcset="{{ $image['webp_url'][0] }}">
                            <img class="w-100 inline-block" src="{{ $image['url'][0] }}" width="72" height="72" alt="خرید و قیمت {{ $product['title_fa'] }}" title="{{ $product['title_fa'] }}" style="object-fit: contain;">
                        </picture>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="col-12 col-lg-8">
        <div class="d-lg-flex align-items-start w-100 px-lg-0">
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
        <div class="d-lg-flex align-items-start w-100 mt-3 px-2">
            <div class="pb-3 min-w-0 pb-lg-3 styles_InfoSection__wrapper__e2TLb styles_InfoSection__variantInfo__PVSw4">
                <div class="d-flex align-items-center">
                    <span class="text-neutral-300 me-2 text-body-2"></span>
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
                        <div class="d-flex ms-1">
                            <svg style="width: 16px; height: 16px; color: #e0e0e2;">
                                <use xlink:href="#dotOutline"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-2">
                        <span class="d-inline-flex align-items-center cursor-pointer text-body-2 text-secondary-500 mx-1 cursor-pointer text-body-2">
                            <span>{{ $product['comments_count'] }} دیدگاه</span>
                        </span>
                        <div class="flex text-neutral-300">
                            <svg style="width: 16px; height: 16px; color: #e0e0e2;">
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
        <div class="d-lg-flex align-items-start w-100">
            <div class="col-12 col-lg-7">
                <div class="border-complete-t mt-3 mt-lg-0">
                @if(count($product['default_variant']) > 0)
                <div class="break-words py-3">
                    <div class="d-flex items-center grow">
                        <p class="grow text-h5 text-neutral-900">
                            <span class="position-relative">رنگ: {{ $product['default_variant']['color']['title']  }}</span>
                        </p>
                    </div>
                </div>
                <div class="d-lg-flex flex-lg-wrap overflow-x-auto">
                    @foreach($product['colors'] as $color)
                        <div class="bg-neutral-000 d-lg-flex align-items-center justify-content-center cursor-pointer mb-2 me-2 px-2 px-lg-0 styles_InfoSectionVariationColor__pX_3M styles_InfoSectionVariationColor__selected__MqDpU">
                        <div class="whitespace-nowrap">
                            <div class="d-flex align-items-center">
                                    <div class="rounded-circle d-flex align-items-center justify-content-center styles_InfoSectionVariationColorContent__iconWrapper__WEy3t">
                                        <div class="rounded-circle mx-auto border-complete border-none d-flex align-items-center justify-content-center styles_InfoSectionVariationColorContent__main__OUcdN" style="background: rgb(33, 33, 33);">
                                            <div class="d-flex align-items-center justify-content-center">
                                                @if ($product['default_variant']['color']['hex_code'] == $color['hex_code'])
                                                    <i  class="fas fa-check d-flex align-items-center justify-content-center" style="width: 24px; height: 24px; color: #ffffff; font-size: 13px"></i>
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
                                <div class="d-flex align-items-center me-1">
                                    <i class="fas fa-circle" style="font-size: 4px; color: #81858b;"></i>
                                </div>
                                <p class="text-neutral-500 text-body-1">{{ $attribute['title'] }}&nbsp:</p>
                            </div>
                            <p class="text-body1-strong ms-2 text-neutral-700">{{ $attribute['values'][0] }}</p>
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
                              <div class="d-flex mt-2 align-items-start">
                                  <i class="fas fa-info-circle" style="font-size: 14px; color: #81858b;"></i>
                              </div>
                              <span class="ms-2 text-body-2 text-neutral-500">{{ $product['category']['return_reason_alert'] }}</span>
                          </div>
                      </div>
                  </div>

                </div>
            </div>
            <div class="col-12 col-lg-5">
                @if(count($product['default_variant']) > 0)
                    <div class="d-flex flex-column ms-lg-3 mb-lg-3 styles_InfoSection__buyBoxContainer__3nOwP">
                    <div class="styles_Marketable__3IHFu rounded-3 border-complete-200 bg-neutral-000 styles_InfoSection__buybox__tknJ3">
                        <div class="break-words py-3 px-5 w-100 d-flex align-items-center justify-content-between user-select-none">
                            <h3 class="grow text-h5 text-neutral-900">فروشنده</h3>
                            <span class="text-body-2 text-secondary-500 cursor-pointer"></span>
                        </div>
                        <div>
                            <a class="styles_Link__RMyqc" target="_blank" href="/seller/A9W2Y/">
                                <div class="w-100 px-4 flex" data-cro-id="pdp-seller-info-cta">
                                    <div class="py-3 flex grow flex">
                                        <div class="me-4">
                                            <div class="relative">
                                                <div class="flex">
                                                    <i class="fas fa-store d-flex justify-content-center align-items-center" style="width: 24px; height: 24px; font-size: 18px; color: var(--color-icon-high-emphasis);">
                                                    </i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex w-100">
                                            <div>
                                                <div class="flex items-center mb-2 lg:mb-1">
                                                    <span>
                                                        <p class="text-neutral-700 me-2 text-subtitle">{{ $product['default_variant']['seller']['title'] }}</p>
                                                    </span>
                                                </div>
                                                <div class="w-100 flex items-center content-center text-body-2">
                                                    <div class="pl-2 flex items-center divider">
                                                        <p class="me-1 text-body2-strong" style="color: {{ $product['default_variant']['seller']['grade']['color'] }};">{{ $product['default_variant']['statistics']['total_rate'] }}%</p>
                                                        <p class="text-neutral-500 whitespace-nowrap">رضایت از کالا</p>
                                                    </div>
                                                    <div class="pr-2 flex items-center">
                                                        <p class="text-neutral-500 me-1">عملکرد</p>
                                                        <p class="whitespace-nowrap text-body2-strong" style="color: {{ $product['default_variant']['seller']['grade']['color'] }};">{{ $product['default_variant']['seller']['grade']['label'] }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="w-100 px-4 d-flex align-items-center">
                            <div class="py-3 d-flex grow border-complete-t-200 align-items-center">
                                <div class="me-4">
                                    <div class="d-flex">
                                        <i class="fas fa-shield-alt d-flex align-items-center justify-content-center" style="width: 24px; height: 24px; font-size: 16px; color: var(--color-icon-high-emphasis);"></i>
                                    </div>
                                </div>
                                <div class="d-flex w-100">
                                    <p class="text-button-2 text-neutral-700">گارانتی اصالت و سلامت فیزیکی کالا</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 px-4 cursor-pointer" data-cro-id="pdp-shipment-info">
                            <div class="py-3 flex grow border-complete-t-200">
                                <div class="flex w-100">
                                    <div class="flex flex-col w-100 relative relative">
                                        <ul class="flex flex-col">
                                            <li class="flex me-3 items-center">
                                                <div class="flex">
                                                    <i class="d-flex justify-content-center align-items-center fas fa-shipping-fast" style="width: 14px; height: 14px; font-size: 12px; color: var(--color-icon-high-emphasis);"></i>
                                                </div>
                                                <p class="text-body-2 text-neutral-500 ms-2 ellipsis">{{ $product['default_variant']['shipment_methods']['providers'][0]['title']  }}</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="flex ms-auto text-neutral-400">
                                        <i class="d-flex align-items-center justify-content-center fas fa-chevron-left" style="width: 24px; height: 24px; font-size: 13px; color: var(--color-icon-low-emphasis);"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 px-4 d-flex align-items-center">
                            <div class="py-3 d-flex grow border-complete-t-200 align-items-center">
                                <div class="me-4">
                                    <div style="width: 24px; height: 24px; line-height: 0;">
                                        <img class="w-100 d-inline-block" src="{{ asset('img/club-point.svg') }}" width="24" height="24" alt="دیجی&zwnj;کلاب" title="" style="object-fit: contain;">
                                    </div>
                                </div>
                                <div class="d-flex w-100">
                                    <p class="text-button-2 text-neutral-700">{{ $product['default_variant']['digiclub']['point'] }} امتیاز دیجی&zwnj;کلاب</p>
                                    <div class="ms-2 mt-1">
                                        <div>
                                            <div class="flex cursor-pointer">
                                                <svg style="width: 18px; height: 18px; color: var(--color-icon-low-emphasis);">
                                                    <use xlink:href="#infoOutline"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="z-4 text-body-2 styles_Tooltip__tooltip___Mj8o styles_Tooltip__tooltip--inactive__vFMA1" style="position: absolute; inset: auto auto 0px 0px; transform: translate3d(177px, 241px, 0px);">بعد از پایان مهلت مرجوعی، برای دریافت امتیاز به صفحه ماموریت&zwnj;های کلابی سر بزنید.
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-y-1 mx-0 lg:mx-5 py-3 px-4 lg:px-0 border-complete-t-200 text-body-2"></div>
                        <div class="relative w-100 lg:px-4 lg:pb-4">
                            <div class="w-100  z-3 bg-neutral-000 styles_BuyBoxFooter__actionWrapper__Hl4e7">
                                <div>
                                    <div class="flex items-center px-4 px-lg-0 pb-2 pb-lg-0">
                                        <div class="flex items-center">
                                            <div>
                                                <div>
                                                    <div class="flex cursor-pointer">
                                                        <i class="flex justify-between items-center fas fa-circle-info" style="width: 18px; height: 18px; font-size: 15px; color: var(--color-icon-neutral-hint);"></i>
                                                    </div>
                                                </div>
                                                <div class="z-4 text-body-2 styles_Tooltip__tooltip___Mj8o styles_Tooltip__tooltip--inactive__vFMA1" data-popper-escaped="true" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; transform: translate3d(327px, 324px, 0px);">
                                                    این کالا توسط فروشنده آن، {{ $product['default_variant']['seller']['title'] }}، قیمت&zwnj;گذاری شده&zwnj; است.
                                                </div>
                                            </div>
                                            <span class="text-caption text-neutral-500 ms-2"></span>
                                        </div>
                                        <div class="flex justify-start flex-col items-end ms-auto text-h3">
                                            @if($product['default_variant']['price']['rrp_price'] != $product['default_variant']['price']['selling_price'])
                                                <div class="flex items-center justify-end w-100">
                                                    <span class="line-through text-body-2 me-1 text-neutral-300" data-testid="price-no-discount">{{ number_format($product['default_variant']['price']['rrp_price'])  }}</span>
                                                    <div class="px-1 text-white rounded-large flex items-center justify-center ProductPrice_ProductPrice__discountWrapper__1Ru_1 bg-hint-object-error shrink-0 ms-1">
                                                        <span class="text-body2-strong" data-testid="price-discount-percent">{{ $product['default_variant']['price']['discount_percent']  }}٪</span>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="flex flex-row items-center">
                                                <span class="text-neutral-800 me-1 text-h4" data-testid="price-final">{{ number_format($product['default_variant']['price']['selling_price'])  }}</span>
                                                <div class="flex ms-1" style="font-size: 8px">تومان</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div></div>
                                    <div class="flex items-center">
                                        <button class="relative flex items-center user-select-none styles_btn__Q4MvL text-button-2 styles_btn--medium__4GoNC styles_btn--primary__y0GEv rounded-3 w-100" data-cro-id="pdp-add-to-cart" data-add-to-cart-variant-id="48066121" data-testid="add-to-cart">
                                            <div class="flex items-center justify-center styles_btn__loading__d5Rcc">
                                                <svg width="24" height="24" id="e302pyQgejw1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" shape-rendering="geometricPrecision" text-rendering="geometricPrecision">
                                                    <path class="styles_Loading__circle1__K7HNJ" d="M0,3C0,1.343146,1.343146,0,3,0C4.656854,0,6,1.343146,6,3C6,4.656854,4.656854,6,3,6C1.343146,6,0,4.656854,0,3Z" transform="matrix(1 0 0 1 17 9)" opacity="0.9" fill="var(--color-icon-low-emphasis)" stroke="none" stroke-width="1"></path>
                                                    <rect class="styles_Loading__circle2__jpl_q" width="6" height="6" rx="3" ry="3" transform="matrix(1 0 0 1 9 9)" opacity="0.6" fill="var(--color-icon-low-emphasis)" stroke="none" stroke-width="1"></rect>
                                                    <rect class="styles_Loading__circle3__otcH4" width="6" height="6" rx="3" ry="3" transform="matrix(1 0 0 1 0.94007500000000 9)" opacity="0.3" fill="var(--color-icon-low-emphasis)" stroke="none" stroke-width="1"></rect>
                                                </svg>
                                            </div>
                                            <div class="flex items-center justify-center relative grow">افزودن به سبد</div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="w-100 my-3" target="_blank" href="https://about.digikala.com/newsroom/pricing-sale-and-price-monitoring-at-digikala/">
                        <div class="flex justify-between items-center lg:border-complete py-2 px-4 lg:rounded-small styles_InfoSection__sectionBorder__IOAuB styles_InfoSection__price__Tdpil">
                            <div class="flex items-center">
                                <div class="flex me-2">
                                    <i class="flex justify-between items-center fas fa-circle-info" style="width: 18px; height: 18px; font-size: 15px; color: var(--color-icon-neutral-hint);"></i>
                                </div>
                                <span class="text-neutral-600 text-body-2">فرآیند قیمت&zwnj;گذاری و نظارت بر قیمت</span>
                            </div>
                            <div class="flex">
                                <i class="flex justify-between items-center fas fa-chevron-left" style="width: 24px; height: 24px; font-size: 13px;color: var(--color-icon-low-emphasis);"></i>
                            </div>
                        </div>
                    </a>
                    <div class="w-100 flex place-items-end px-5 lg:px-0 pb-3 lg:pb-0 styles_InfoSection__betterPrice__Kq10V">
                        <div class="flex items-center lg:justify-end text-neutral-400 ms-auto cursor-pointer" data-cro-id="pdp-another-price">
                            <p class="text-caption">قیمت بهتری سراغ دارید؟</p>
                            <div class="flex ms-2">
                                <i class="flex justify-between items-center fas fa-tag" style="width: 20px; height: 20px; font-size: 15px;color: var(--color-icon-low-emphasis);"></i>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                    <div class="relative flex flex-col items-center" data-testid="buy-box">
                        <div class="p-4 lg:text-center">
                            <div class="mb-2 text-center flex items-center justify-center relative text-neutral-500 styles_HeaderTextLine__IemQk"><p class="px-4 bg-neutral-000 z-1 text-h4">ناموجود</p></div>
                            <p class="text-neutral-700 text-right text-lg-center text-body-1">این کالا فعلا موجود نیست اما می&zwnj;توانید زنگوله را بزنید تا به محض موجود شدن، به شما خبر دهیم.</p>
                            <div class="lg:bg-transparent py-3 px-5 lg:px-0">
                                <button class="relative flex items-center user-select-none styles_btn__Q4MvL text-button-1 styles_btn--large__1Muai styles_btn--primary__y0GEv rounded-medium w-full text-button-2" data-cro-id="pdp-not-found-cta">
                                    <div class="flex items-center justify-center styles_btn__loading__d5Rcc">
                                        <svg width="24" height="24" id="e302pyQgejw1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" shape-rendering="geometricPrecision" text-rendering="geometricPrecision">
                                            <path
                                                class="styles_Loading__circle1__K7HNJ"
                                                d="M0,3C0,1.343146,1.343146,0,3,0C4.656854,0,6,1.343146,6,3C6,4.656854,4.656854,6,3,6C1.343146,6,0,4.656854,0,3Z"
                                                transform="matrix(1 0 0 1 17 9)"
                                                opacity="0.9"
                                                fill="var(--color-icon-low-emphasis)"
                                                stroke="none"
                                                stroke-width="1"
                                            ></path>
                                            <rect class="styles_Loading__circle2__jpl_q" width="6" height="6" rx="3" ry="3" transform="matrix(1 0 0 1 9 9)" opacity="0.6" fill="var(--color-icon-low-emphasis)" stroke="none" stroke-width="1"></rect>
                                            <rect
                                                class="styles_Loading__circle3__otcH4"
                                                width="6"
                                                height="6"
                                                rx="3"
                                                ry="3"
                                                transform="matrix(1 0 0 1 0.94007500000000 9)"
                                                opacity="0.3"
                                                fill="var(--color-icon-low-emphasis)"
                                                stroke="none"
                                                stroke-width="1"
                                            ></rect>
                                        </svg>
                                    </div>
                                    <div class="flex items-center justify-center relative grow">
                                        <div class="flex ml-2">
                                            <i class="flex items-center justify-center fas fa-bell" style="width: 24px; height: 24px; font-size: 20px; color: var(--color-icon-white);"></i>
                                        </div>
                                        خبرم کنید
                                    </div>
                                </button>
                            </div>
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

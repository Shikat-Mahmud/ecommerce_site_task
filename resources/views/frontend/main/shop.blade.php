@extends('frontend.layouts.master')
@section('title', '- Shop')

@section('content')
<!-- Breadcrumb -->
<section
    class="section-breadcrumb mb-[50px] max-[1199px]:mb-[35px] border-b-[1px] border-solid border-[#eee] bg-[#f8f8fb]">
    <div
        class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full">
            <div class="w-full px-[12px]">
                <div class="flex flex-wrap w-full bb-breadcrumb-inner m-[0] py-[20px] items-center">
                    <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                        <h2
                            class="bb-breadcrumb-title font-quicksand tracking-[0.03rem] leading-[1.2] text-[16px] font-bold text-[#3d4750] max-[767px]:text-center max-[767px]:mb-[10px]">
                            Shop Page</h2>
                    </div>
                    <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                        <ul class="bb-breadcrumb-list mx-[-5px] flex justify-end max-[767px]:justify-center">
                            <li class="bb-breadcrumb-item text-[14px] font-normal px-[5px]"><a
                                    href="{{ route('home') }}"
                                    class="font-Poppins text-[14px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d]">Home</a>
                            </li>
                            <li class="text-[14px] font-normal px-[5px]"><i
                                    class="ri-arrow-right-double-fill text-[14px] font-semibold leading-[28px]"></i>
                            </li>
                            <li
                                class="bb-breadcrumb-item font-Poppins text-[#686e7d] text-[14px] leading-[28px] font-normal tracking-[0.03rem] px-[5px] active">
                                Shop Page</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Detail section -->
<section class="section-bnr-details pt-[50px] max-[1199px]:pt-[35px] mb-[24px]">
    <div
        class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="w-full px-[12px]">
            <div class="bnr-details-bg w-full bg-[#f8f8fb] p-[24px] rounded-[20px] border-[1px] border-solid border-[#eee] max-[767px]:p-[15px]"
                data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="flex flex-wrap mx-[-12px]">
                    <div class="min-[992px]:w-[50%] w-full px-[12px] mb-[24px]">
                        <div class="bb-bnr-details relative">
                            <div class="bb-image">
                                <img src="{{ asset('frontend/img/shop-bnr/one.jpg') }}" alt="one"
                                    class="w-full rounded-[20px]">
                            </div>
                            <div
                                class="overlay-bnr bg-[#00000080] h-full w-full absolute z-[0] top-[0] left-[0] rounded-[20px]">
                            </div>
                            <div
                                class="inner-contact w-full h-full p-[30px] absolute top-[0] right-[0] z-[1] flex flex-col justify-between items-end max-[480px]:p-[20px]">
                                <h4
                                    class="font-Poppins text-[38px] font-bold text-[#fff] leading-[1.2] tracking-[0.03rem] max-[480px]:text-[26px]">
                                    50%</h4>
                                <p
                                    class="font-Poppins text-[28px] font-medium leading-[32px] text-right text-[#fff] tracking-[0.03rem] max-[480px]:text-[16px] max-[480px]:leading-[20px]">
                                    Fresh <br> Vegetable</p>
                            </div>
                        </div>
                    </div>
                    <div class="min-[992px]:w-[50%] w-full px-[12px] mb-[24px]">
                        <div class="bb-bnr-details relative">
                            <div class="bb-image">
                                <img src="{{ asset('frontend/img/shop-bnr/two.jpg') }}" alt="two"
                                    class="w-full rounded-[20px]">
                            </div>
                            <div
                                class="overlay-bnr bg-[#00000080] h-full w-full absolute z-[0] top-[0] left-[0] rounded-[20px]">
                            </div>
                            <div
                                class="inner-contact w-full h-full p-[30px] absolute top-[0] right-[0] z-[1] flex flex-col justify-between items-end max-[480px]:p-[20px]">
                                <h4
                                    class="font-Poppins text-[38px] font-bold text-[#fff] leading-[1.2] tracking-[0.03rem] max-[480px]:text-[26px]">
                                    30%</h4>
                                <p
                                    class="font-Poppins text-[28px] font-medium leading-[32px] text-right text-[#fff] tracking-[0.03rem] max-[480px]:text-[16px] max-[480px]:leading-[20px]">
                                    Fresh & <br> Healthy Fruit</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap w-full px-[12px]">
                    <ul class="bb-shop-tags w-full flex flex-wrap justify-center m-[-5px]">
                        @if (!$categories->isEmpty())
                            @foreach ($categories as $category)
                                <li class="active-tags m-[5px]">
                                    <a href="javascript:void(0)"
                                        class="flex bg-[#fff] rounded-[15px] border-[1px] border-solid border-[#eee] py-[10px] px-[20px] transition-all duration-[0.3s] ease-in-out font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem] hover:text-[#6c7fd8] hover:border-[#6c7fd8]">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Shop section -->
<section class="section-shop pb-[50px] max-[1199px]:pb-[35px]">
    <div
        class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full mb-[-24px]">
            <div class="min-[992px]:w-[25%] w-full px-[12px] mb-[24px]">

                <!-- Filter products -->
                <form id="filterForm" action="{{ route('filter.products') }}" method="GET">
                    @csrf
                    <div
                        class="bb-shop-wrap bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[20px] sticky top-[0]">
                        <div class="bb-sidebar-block p-[20px] border-b-[1px] border-solid border-[#eee]">
                            <div class="bb-sidebar-title mb-[20px]">
                                <h3 class="font-quicksand text-[18px] font-bold text-[#3d4750]">Category</h3>
                            </div>
                            <div class="bb-sidebar-contact">
                                <ul>
                                    @if (!$categories->isEmpty())
                                        @foreach ($categories as $category)
                                            <li class="relative block mb-[14px]">
                                                <div class="bb-sidebar-block-item relative">
                                                    <input type="checkbox" name="categories[]" value="{{ $category->id }}"
                                                        class="category-checkbox w-full h-[calc(100%-5px)] absolute opacity-[0] cursor-pointer z-[999] top-[50%] left-[0] translate-y-[-50%]">
                                                    <a href="javascript:void(0)"
                                                        class="ml-[30px] block text-[#777] text-[14px] leading-[20px] font-normal capitalize cursor-pointer">{{ $category->name }}</a>
                                                    <span
                                                        class="checked absolute top-[0] left-[0] h-[18px] w-[18px] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden"></span>
                                                </div>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>

                        <div class="bb-sidebar-block p-[20px] border-b-[1px] border-solid border-[#eee]">
                            <div class="bb-sidebar-title mb-[20px]">
                                <h3 class="font-quicksand text-[18px] font-bold text-[#3d4750]">Price</h3>
                            </div>
                            <div class="bb-price-range">
                                <div class="price-range-slider relative w-full mb-[7px]">
                                    <p class="range-value m-[0]">
                                        <input type="text" id="amount" readonly
                                            class="w-full bg-[#fff] text-[#000] text-[16px] mb-[15px] font-initial border-[1px] border-solid border-[#eee] p-[10px] text-center outline-[0] rounded-[10px]">
                                    </p>
                                    <div id="slider-range" class="range-bar"></div>
                                    <input type="hidden" name="min_price" id="min_price">
                                    <input type="hidden" name="max_price" id="max_price">
                                </div>
                            </div>
                        </div>

                        <div class="bb-sidebar-block p-[20px]">
                            <div class="bb-bl-btn py-[10px] flex max-[420px]:justify-center">
                                <button type="submit"
                                    class="bg-[#6c7fd8] text-[#fff] rounded-[10px] h-[42px] w-[100%] flex justify-center items-center border-[0] p-[5px] mr-[5px] hover:bg-[#707fbf]">
                                    Filter
                                </button>
                            </div>
                        </div>
                    </div>
                </form>


            </div>
            <div class="min-[992px]:w-[75%] w-full px-[12px] mb-[24px]">
                <div class="bb-shop-pro-inner">
                    <div class="flex flex-wrap mx-[-12px] mb-[-24px]" id="product-list">
                        <div class="w-full px-[12px]">
                            <div
                                class="bb-pro-list-top mb-[24px] rounded-[20px] flex bg-[#f8f8fb] border-[1px] border-solid border-[#eee] justify-between">
                                <div class="flex flex-wrap w-full">
                                    <div class="w-[50%] px-[12px] max-[420px]:w-full">
                                        <div class="bb-bl-btn py-[10px] flex max-[420px]:justify-center">
                                            <button type="button"
                                                class="grid-btn btn-grid-100 h-[38px] w-[38px] flex justify-center items-center border-[0] p-[5px] bg-transparent mr-[5px] active"
                                                title="grid">
                                                <i class="ri-apps-line text-[20px]"></i>
                                            </button>
                                            <button type="button"
                                                class="grid-btn btn-list-100 h-[38px] w-[38px] flex justify-center items-center border-[0] p-[5px] bg-transparent"
                                                title="list">
                                                <i class="ri-list-unordered text-[20px]"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="w-[50%] px-[12px] max-[420px]:w-full">
                                        <div
                                            class="bb-select-inner h-full py-[10px] flex items-center justify-end max-[420px]:justify-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Product List -->
                        @include('frontend.partials.product_list', ['products' => $products])

                        <div class="w-full px-[12px]">
                            <div
                                class="bb-pro-pagination mb-[24px] flex justify-between max-[575px]:flex-col max-[575px]:items-center">
                                <p
                                    class="font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem] max-[575px]:mb-[10px]">
                                    Showing {{ $products->firstItem() }}-{{ $products->lastItem() }} of
                                    {{ $products->total() }} item(s)
                                </p>
                                <ul class="flex">
                                    {{ $products->links() }}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
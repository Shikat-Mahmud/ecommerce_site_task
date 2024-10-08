@if (!$products->isEmpty())
    @foreach ($products as $product)
        <div class="min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px] pro-bb-content" data-aos="fade-up"
            data-aos-duration="1000" data-aos-delay="200">
            <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                    <a href="javascript:void(0)">
                        @if (isset($product->image))
                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full"
                                    src="{{ asset('storage/' . $product->image) }}" alt="product-1">
                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full"
                                    src="{{ asset('storage/' . $product->image) }}" alt="product-1">
                            </div>
                        @else
                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full"
                                    src="{{ asset('frontend/img/new-product/1.jpg') }}" alt="product-1">
                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full"
                                    src="{{ asset('frontend/img/new-product/back-1.jpg') }}" alt="product-1">
                            </div>
                        @endif
                    </a>
                    <ul
                        class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                            <button onclick="addToWishList({{ $product->id }})" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                <i id="wishlist-icon-{{ $product->id }}" class="{{ $product->isFavorited() ? 'ri-heart-fill' : 'ri-heart-line' }} transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                            </button>
                        </li>
                        <li
                            class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                            <a href="javascript:void(0)" title="Quick View"
                                class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center"
                                data-product-id="{{ $product->id }}">
                                <i
                                    class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                            </a>
                        </li>
                        <li
                            class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                            <button onclick="addToCart({{ $product->id }})" title="Add To Cart"
                                class="w-[35px] h-[35px] flex items-center justify-center">
                                <i class="ri-shopping-cart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="bb-pro-contact p-[20px]">
                    <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                        <a href="{{ route('category.product', $product->category->id) }}"
                            class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">{{ $product->category->name }}</a>
                        
                        @php
                            $avgRating = round(App\Models\Review::where('product_id', $product->id)->avg('rating'), 1);

                            // rating stars
                            $roundedRating = ($avgRating - floor($avgRating)) > 0.8 ? ceil($avgRating) : $avgRating;
                            $fullStars = floor($roundedRating);
                            $halfStar = ($avgRating - $fullStars) > 0.3 && ($avgRating - $fullStars) <= 0.8 ? true : false;
                            $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
                        @endphp

                        <span class="bb-pro-rating">
                            @for ($i = 1; $i <= $fullStars; $i++)
                                <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                            @endfor

                            @if ($halfStar)
                                <i class="ri-star-half-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                            @endif

                            @for ($i = 1; $i <= $emptyStars; $i++)
                                <i class="ri-star-line float-left text-[15px] mr-[3px] text-[#777]"></i>
                            @endfor
                        </span>
                    </div>
                    <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                        <a href="{{ route('view.product', $product->id)}}"
                            class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">{{ $product->name }}</a>
                    </h4>
                    <p class="hidden font-Poppins text-[14px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">
                        {{ $product->description }}
                    </p>
                    <div class="bb-price flex flex-wrap justify-between">
                        <div class="inner-price mx-[-3px]">
                            <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">৳{{ $product->price }}</span>
                        </div>
                        <span class="last-items text-[14px] text-[#686e7d]">1{{ $product->unit->name }}</span>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@else
    <div class="w-full my-5 flex justify-center">
        <p>
            No Product Found!
        </p>
    </div>
@endif
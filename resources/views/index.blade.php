
<x-layout>
<section id="top-section" class="mb-30">
            <div class="max-w-[1440px] mx-auto flex min-h-72">
                <div class="flex-1">
                    <ul class="flex flex-col gap-5 mt-12 text-xl font-medium">
                        <li><a href="">Woman's Fashion</a></li>
                        <li><a href="">Men's Fashion</a></li>
                        <li><a href="">Electronics</a></li>
                        <li><a href="">Home & Lifestyle</a></li>
                        <li><a href="">Medicine</a></li>
                        <li><a href="">Sports & Outdoor</a></li>
                        <li><a href="">Baby's Toys</a></li>
                        <li><a href="">Groceries & Pets</a></li>
                        <li><a href="">Health & Beauty</a></li>
                    </ul>
                </div>
                <div class="flex-3 border-l-1 border-gray-300 pl-12 py-12">
                    <img src="assets/images/hero-image.png" alt="" class="max-h-full max-w-full w-full">
                </div>
            </div>
        </section>
        <section id="flash-sale">
            <div class="max-w-[1440px] mx-auto mb-20 overflow-hidden">
                <div class="h-12 w-full flex items-center gap-4 text-xl font-semibold text-red-700">
                    <div class="h-10 w-5 bg-red-700 inline-block rounded-sm"></div> Today's
                </div>
                <div class="mt-2 flex items-center ">
                    <h2 class="text-4xl font-semibold">Flash Sale</h2>
                    <div class="timer flex justify-start gap-5 ml-20 ">
                        <div class="flex-1 flex flex-col items-center justify-center gap-1">
                            <p class="text-sm font-medium">Days</p>
                            <div class=" text-4xl font-bold">12</div>
                        </div>
                        <span class="text-4xl mt-5 w-1 text-red-500">:</span>
                        <div class="flex-1 flex flex-col items-center justify-center gap-1">
                            <p class="text-sm font-medium">Hours</p>
                            <div class=" text-4xl font-bold">12</div>
                        </div>
                        <span class="text-4xl mt-5 w-1 text-red-500">:</span>
                        <div class="flex-1 flex flex-col items-center justify-center gap-1">
                            <p class="text-sm font-medium">Minutes</p>
                            <div class=" text-4xl font-bold">12</div>
                        </div>
                        <span class="text-4xl mt-5 w-1 text-red-500">:</span>
                        <div class="flex-1 flex flex-col items-center justify-center gap-1">
                            <p class="text-sm font-medium">Seconds</p>
                            <div class=" text-4xl font-bold">12</div>
                        </div>
                    </div>
                    <div class="nav flex items-center gap-3 ml-20 flex-grow justify-end">
                        <button class="bg-gray-200 w-12 h-12 rounded-full flex items-center justify-center"><i
                                class="bi bi-arrow-left-short text-black bg-gray-200 rounded-full text-4xl leading-none"></i></button>
                        <button class="bg-gray-200 w-12 h-12 rounded-full flex items-center justify-center"><i
                                class="bi bi-arrow-right-short text-black text-4xl leading-none"></i></button>
                    </div>
                </div>
                <div class="products flex flex-wrap gap-10 mt-10 overflow-x-auto scrollbar-hide max-w-full">
                    <!-- Product items go here -->
                </div>
                <div class="flex items-center justify-center mt-16">
                    <button class="bg-red-700 text-white px-10 py-4 cursor-pointer hover:bg-red-600">View All Products</button>
                </div>
            </div>
        </section>

        <section id="categories">
            <div class="max-w-[1440px] mx-auto mb-20 overflow-hidden">
                <div class="h-12 w-full flex items-center gap-4 text-xl font-semibold text-red-700">
                    <div class="h-10 w-5 bg-red-700 inline-block rounded-sm"></div> Today's
                </div>
                <div class="mt-2 flex items-center ">
                    <h2 class="text-4xl font-semibold">Browse By Category</h2>

                    <div class="nav flex items-center gap-3 ml-20 flex-grow justify-end">
                        <button class="bg-gray-200 w-12 h-12 rounded-full flex items-center justify-center"><i
                                class="bi bi-arrow-left-short text-black bg-gray-200 rounded-full text-4xl leading-none"></i></button>
                        <button class="bg-gray-200 w-12 h-12 rounded-full flex items-center justify-center"><i
                                class="bi bi-arrow-right-short text-black text-4xl leading-none"></i></button>
                    </div>
                </div>
                <div class="categories mt-10 flex gap-5">
                    <div
                        class="w-60 h-52 border-1 border-gray-400 flex flex-col items-center justify-center gap-3 text-center cursor-pointer hover:bg-red-700 hover:text-white">
                        <div><i class="bi bi-phone text-5xl"></i></div>
                        <p class="text-lg">Phone</p>
                    </div>
                    <div
                        class="w-60 h-52 border-1 border-gray-400 flex flex-col items-center justify-center gap-3 text-center cursor-pointer hover:bg-red-700 hover:text-white">
                        <div><i class="bi bi-phone text-5xl"></i></div>
                        <p class="text-lg">Phone</p>
                    </div>
                    <div
                        class="w-60 h-52 border-1 border-gray-400 flex flex-col items-center justify-center gap-3 text-center cursor-pointer hover:bg-red-700 hover:text-white">
                        <div><i class="bi bi-phone text-5xl"></i></div>
                        <p class="text-lg">Phone</p>
                    </div>
                    <div
                        class="w-60 h-52 border-1 border-gray-400 flex flex-col items-center justify-center gap-3 text-center cursor-pointer hover:bg-red-700 hover:text-white">
                        <div><i class="bi bi-phone text-5xl"></i></div>
                        <p class="text-lg">Phone</p>
                    </div>
                    <div
                        class="w-60 h-52 border-1 border-gray-400 flex flex-col items-center justify-center gap-3 text-center cursor-pointer hover:bg-red-700 hover:text-white">
                        <div><i class="bi bi-phone text-5xl"></i></div>
                        <p class="text-lg">Phone</p>
                    </div>
                    <div
                        class="w-60 h-52 border-1 border-gray-400 flex flex-col items-center justify-center gap-3 text-center cursor-pointer hover:bg-red-700 hover:text-white">
                        <div><i class="bi bi-phone text-5xl"></i></div>
                        <p class="text-lg">Phone</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="best-selling">
            <div class="max-w-[1440px] mx-auto mb-20 overflow-hidden">
                <div class="h-12 w-full flex items-center gap-4 text-xl font-semibold text-red-700">
                    <div class="h-10 w-5 bg-red-700 inline-block rounded-sm"></div> This Month
                </div>
                <div class="mt-2 flex items-center ">
                    <h2 class="text-4xl font-semibold">Best Selling Products</h2>
                    
                    <div class="nav flex items-center gap-3 ml-20 flex-grow justify-end">
                        <button class="font-medium rounded-sm bg-red-700 px-10  py-4 flex text-white items-center justify-center cursor-pointer">View All</button>
                    </div>
                </div>
                <div class="products flex gap-10 mt-10 overflow-x-auto scrollbar-hide justify-between">

                    <div class="group w-72 h-104 flex flex-col gap-3 text-lg">
                        <div class="relative w-72 flex aspect-square bg-gray-200 items-center justify-center">
                            <img src="assets/images/product-image.png" alt="">
                            <div class="absolute text-white top-0 left-0 m-3 bg-red-700 text-sm px-2 py-1 rounded-sm">-40%</div>
                            <div class="absolute top-0 right-0 m-3 flex flex-col gap-2">
                                <button class="bg-white rounded-full w-10 h-10 flex items-center justify-center cursor-pointer"><i class="bi bi-heart text-xl"></i></button>
                                <button class="bg-white rounded-full w-10 h-10 flex items-center justify-center cursor-pointer"><i class="bi bi-eye text-xl"></i></button>
                            </div>
                            <div class="absolute bottom-0 left-0 w-full h-12 bg-black opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <button class="add-to-cart-button w-full h-full text-white cursor-pointer">Add To Cart</button>
                            </div>
                        </div>
                        <p class="font-semibold">HAVIT HV-G92 Gamepad</p>
                        <p class="text-red-700 font-semibold">$12.99 <span
                                class="text-gray-300 line-through decoration-2">$15.99</span></p>
                        <div class="flex items-center gap-2">
                            <i class="bi bi-star-fill text-yellow-600"></i>
                            <i class="bi bi-star-fill text-yellow-600"></i>
                            <i class="bi bi-star-fill text-yellow-600"></i>
                            <i class="bi bi-star-fill text-yellow-600"></i>
                            <i class="bi bi-star-fill text-yellow-600"></i>
                            <span class="text-gray-500 font-semibold">(88)</span>
                        </div>
                    </div>
                    <div class="group w-72 h-104 flex flex-col gap-3 text-lg">
                        <div class="relative w-72 flex aspect-square bg-gray-200 items-center justify-center">
                            <img src="assets/images/product-image.png" alt="">
                            <div class="absolute text-white top-0 left-0 m-3 bg-red-700 text-sm px-2 py-1 rounded-sm">-40%</div>
                            <div class="absolute top-0 right-0 m-3 flex flex-col gap-2">
                                <button class="bg-white rounded-full w-10 h-10 flex items-center justify-center cursor-pointer"><i class="bi bi-heart text-xl"></i></button>
                                <button class="bg-white rounded-full w-10 h-10 flex items-center justify-center cursor-pointer"><i class="bi bi-eye text-xl"></i></button>
                            </div>
                            <div class="absolute bottom-0 left-0 w-full h-12 bg-black opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <button class="add-to-cart-button w-full h-full text-white cursor-pointer">Add To Cart</button>
                            </div>
                        </div>
                        <p class="font-semibold">HAVIT HV-G92 Gamepad</p>
                        <p class="text-red-700 font-semibold">$12.99 <span
                                class="text-gray-300 line-through decoration-2">$15.99</span></p>
                        <div class="flex items-center gap-2">
                            <i class="bi bi-star-fill text-yellow-600"></i>
                            <i class="bi bi-star-fill text-yellow-600"></i>
                            <i class="bi bi-star-fill text-yellow-600"></i>
                            <i class="bi bi-star-fill text-yellow-600"></i>
                            <i class="bi bi-star-fill text-yellow-600"></i>
                            <span class="text-gray-500 font-semibold">(88)</span>
                        </div>
                    </div>
                    <div class="group w-72 h-104 flex flex-col gap-3 text-lg">
                        <div class="relative w-72 flex aspect-square bg-gray-200 items-center justify-center">
                            <img src="assets/images/product-image.png" alt="">
                            <div class="absolute text-white top-0 left-0 m-3 bg-red-700 text-sm px-2 py-1 rounded-sm">-40%</div>
                            <div class="absolute top-0 right-0 m-3 flex flex-col gap-2">
                                <button class="bg-white rounded-full w-10 h-10 flex items-center justify-center cursor-pointer"><i class="bi bi-heart text-xl"></i></button>
                                <button class="bg-white rounded-full w-10 h-10 flex items-center justify-center cursor-pointer"><i class="bi bi-eye text-xl"></i></button>
                            </div>
                            <div class="absolute bottom-0 left-0 w-full h-12 bg-black opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <button class="add-to-cart-button w-full h-full text-white cursor-pointer">Add To Cart</button>
                            </div>
                        </div>
                        <p class="font-semibold">HAVIT HV-G92 Gamepad</p>
                        <p class="text-red-700 font-semibold">$12.99 <span
                                class="text-gray-300 line-through decoration-2">$15.99</span></p>
                        <div class="flex items-center gap-2">
                            <i class="bi bi-star-fill text-yellow-600"></i>
                            <i class="bi bi-star-fill text-yellow-600"></i>
                            <i class="bi bi-star-fill text-yellow-600"></i>
                            <i class="bi bi-star-fill text-yellow-600"></i>
                            <i class="bi bi-star-fill text-yellow-600"></i>
                            <span class="text-gray-500 font-semibold">(88)</span>
                        </div>
                    </div>
                    <div class="group w-72 h-104 flex flex-col gap-3 text-lg">
                        <div class="relative w-72 flex aspect-square bg-gray-200 items-center justify-center">
                            <img src="assets/images/product-image.png" alt="">
                            <div class="absolute text-white top-0 left-0 m-3 bg-red-700 text-sm px-2 py-1 rounded-sm">-40%</div>
                            <div class="absolute top-0 right-0 m-3 flex flex-col gap-2">
                                <button class="bg-white rounded-full w-10 h-10 flex items-center justify-center cursor-pointer"><i class="bi bi-heart text-xl"></i></button>
                                <button class="bg-white rounded-full w-10 h-10 flex items-center justify-center cursor-pointer"><i class="bi bi-eye text-xl"></i></button>
                            </div>
                            <div class="absolute bottom-0 left-0 w-full h-12 bg-black opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <button class="add-to-cart-button w-full h-full text-white cursor-pointer">Add To Cart</button>
                            </div>
                        </div>
                        <p class="font-semibold">HAVIT HV-G92 Gamepad</p>
                        <p class="text-red-700 font-semibold">$12.99 <span
                                class="text-gray-300 line-through decoration-2">$15.99</span></p>
                        <div class="flex items-center gap-2">
                            <i class="bi bi-star-fill text-yellow-600"></i>
                            <i class="bi bi-star-fill text-yellow-600"></i>
                            <i class="bi bi-star-fill text-yellow-600"></i>
                            <i class="bi bi-star-fill text-yellow-600"></i>
                            <i class="bi bi-star-fill text-yellow-600"></i>
                            <span class="text-gray-500 font-semibold">(88)</span>
                        </div>
                    </div>
                    
            </div>
        </section>

        <section id="selling point">
            <div class="flex justify-center gap-20">
                <div class="w-72 h-72 flex flex-col items-center justify-center gap-3 text-center">
                    <div class="bg-gray-200 rounded-full p-3 w-20 h-20">
                        <div class="bg-black rounded-full p-2 w-full h-full">
                            <i class="bi bi-truck text-3xl text-white"></i>
                        </div>
                    </div>
                    <div>
                        <p class="text-lg font-bold mb-0.25">FREE AND FAST DELIVERY</p>
                        <p class="mt-0 text-sm">Free delivery for all orders over $140</p>
                    </div>
                </div>
                <div class="w-72 h-72 flex flex-col items-center justify-center gap-3 text-center">
                    <div class="bg-gray-200 rounded-full p-3 w-20 h-20">
                        <div class="bg-black rounded-full p-2 w-full h-full">
                            <i class="bi bi-headset text-3xl text-white"></i>
                        </div>
                    </div>
                    <div>
                        <p class="text-lg font-bold mb-0.25">24/7 CUSTOMER SERVICE</p>
                        <p class="mt-0 text-sm">Friendly 24/7 customer support</p>
                    </div>
                </div>
                <div class="w-72 h-72 flex flex-col items-center justify-center gap-3 text-center">
                    <div class="bg-gray-200 rounded-full p-3 w-20 h-20">
                        <div class="bg-black rounded-full p-2 w-full h-full">
                            <i class="bi bi-shield-check text-3xl text-white"></i>
                        </div>
                    </div>
                    <div>
                        <p class="text-lg font-bold mb-0.25">MONEY BACK GUARANTEE</p>
                        <p class="mt-0 text-sm">We return money within 30 days</p>
                    </div>
                </div>
            </div>
        </section>

    <script src="scripts/index.js"></script>
</x-layout>
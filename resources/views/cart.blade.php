<x-layout>
        <div class="max-w-[1440px] mx-auto flex justify-center items-center flex-col">
            <div class="breadcrumbs flex gap-2 w-full justify-start my-16">
                <p>Cart</p>
            </div>

            <section class="carts w-full">
                <table class="w-full ">
                    <thead>
                        <tr class="border-b-1 border-gray-200 text-lg  h-16">
                            <th class="text-left">Product</th>
                            <th class="text-left">Price</th>
                            <th class="text-left">Quantity</th>
                            <th class="text-left">Sub Total</th>
                        </tr>
                    </thead>
                    <tbody class="cart-items"></tbody>
                </table>
            </section>
            <section class="cart-total flex justify-end w-full mt-10">
                    <div class="border-2 p-6 w-1/3">
                        <h3 class="font-semibold text-xl mb-2">Cart Total</h3>
                        <table>
                            <tr class="h-12 border-b-1 border-gray-200">
                                <th class="text-left font-medium w-full">Subtotal</th>
                                <td>$200</td>
                            </tr>
                            <tr class="h-12 border-b-1 border-gray-200">
                                <th class="text-left font-medium w-full">Shipping</th>
                                <td>$10</td>
                            </tr>
                            <tr class="h-12  border-gray-200">
                                <th class="text-left font-medium w-full">Total</th>
                                <td>$210</td>
                            </tr>
                        </table>

                        <button class="bg-red-700 px-8 py-2 text-white rounded text-center">Process to checkout</button>
                </div>

            </section>
        </div>

    <script src="/scripts/cart.js"></script>
    </x-layout>
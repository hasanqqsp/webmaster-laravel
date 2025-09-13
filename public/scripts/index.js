const BASE_API_URL = "https://fakestoreapi.com";

document.addEventListener("DOMContentLoaded",()=> {
    const productContainer = document.querySelector(".products");
    let products = [];
    fetch(`${BASE_API_URL}/products`)
        .then(response => response.json())
        .then(products => {
            productContainer.innerHTML = "";
            products = products;
           products.slice(0,10).forEach(product => {
                const productElement = document.createElement("div");
                productElement.classList.add("group", "w-72", "h-104", "flex", "flex-col", "gap-3", "text-lg");
                productElement.innerHTML = `<div class="relative w-72 flex aspect-square bg-gray-200 items-center justify-center">
                            <img src="${product.image}" alt="" class="aspect-square object-contain">
                            <div class="absolute text-white top-0 left-0 m-3 bg-red-700 text-sm px-2 py-1 rounded-sm">${product.category.toUpperCase()}</div>
                            <div class="absolute top-0 right-0 m-3 flex flex-col gap-2">
                                <button class="bg-white rounded-full w-10 h-10 flex items-center justify-center cursor-pointer"><i class="bi bi-heart text-xl"></i></button>
                                <button class="bg-white rounded-full w-10 h-10 flex items-center justify-center cursor-pointer"><i class="bi bi-eye text-xl"></i></button>
                            </div>
                            <div class="absolute bottom-0 left-0 w-full h-12 bg-black opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <button class="add-to-cart-button w-full h-full text-white cursor-pointer" data-product-id=${product.id}>Add To Cart</button>
                            </div>
                        </div>
                        <p class="font-semibold">${product.title}</p>
                        <p class="text-red-700 font-semibold">$${(Math.round(product.price * 100) / 100).toFixed(2)} <span
                                class="text-gray-300 line-through decoration-2">${product.price}</span></p>
                        <div class="flex items-center gap-2">
                            ${Array(5).fill(0)
                                .map((_,i) => i < Math.round(product.rating.rate) 
                                ? `<i class="bi bi-star-fill text-yellow-600"></i>` : `<i class="bi bi-star text-yellow-600"></i>`).join('')}
                            
                            <span class="text-gray-500 font-semibold">(${product.rating.count})</span>
                        </div>`;
                productContainer.appendChild(productElement);
           }
           
        )
        const addToCartButtons = document.querySelectorAll(".add-to-cart-button");
        addToCartButtons.forEach(button => {
            button.addEventListener("click", () => {
                const existingCart = JSON.parse(localStorage.getItem("cart") || "[]");
                const productId = button.getAttribute("data-product-id");
                const productInCart = existingCart.find(item => item.id == productId);
                if (productInCart) {
                    productInCart.quantity += 1;
                }
                else {
                    existingCart.push({ id: productId, quantity: 1 });
                }
                localStorage.setItem("cart", JSON.stringify(existingCart));
                alert("Product added to cart!");
            });
        });

})
})
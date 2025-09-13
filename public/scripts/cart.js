const BASE_API_URL = "https://fakestoreapi.com";
document.addEventListener("DOMContentLoaded", () => {
    const cartContainer = document.querySelector(".cart-items");
    let products = [];
    fetch(`${BASE_API_URL}/products`).then(response => response.json()).then(data => {
        products = data;
        const existingCart = JSON.parse(localStorage.getItem("cart") || "[]");
        let total = 0;
        console.log(existingCart);
        existingCart.forEach(cartItem => {
            const product = products.find(p => p.id == cartItem.id);
            if (product) {
                const subTotal = product.price * cartItem.quantity;
                total += subTotal;
                const cartRow = document.createElement("tr");
                cartRow.classList.add("border-b-1", "border-gray-200", "h-24", "text-lg", "align-middle");
                cartRow.innerHTML = `
                        <td class="flex h-full gap-4 items-center">
                            <img src="${product.image}" alt="product" class="h-24 aspect-square object-contain">
                            <p class="text-lg">${product.title}</p>
                        </td>
                        <td>$100</td>
                        <td>
                            <input type="number" value=${cartItem.quantity} min="1" class="w-16 h-10 text-center  border-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500">
                        </td>
                        <td>$100</td>
                    `
                cartContainer.appendChild(cartRow);
            }
        });});
})
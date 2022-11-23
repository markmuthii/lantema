// let cartProducts = localStorage.getItem("lantema-cart") ?? [];

const checkoutItems = document.querySelector("#checkoutItems");
const checkoutTotal = document.querySelector("#checkoutTotal");
const placeOrderButton = document.querySelector("#placeOrder");

function updateCheckoutHTML() {
  cartProducts = JSON.parse(localStorage.getItem("lantema-cart")) ?? [];

  if (cartProducts.length > 0) {
    let result = cartProducts.map((product) => {
      return `
      <li class="pb-3 mb-3 border-bottom">
        <div class="row align-items-center">
          <div class="col-4 col-md-2 col-lg-2">
            <img class="img-fluid border" src="${product.image}" alt="...">
          </div>
          <div class="col-8">
            <p class="mb-1">
              <span class="text-dark fw-500">${
                product.name
              } <span class="small text-muted">X ${
        product.quantity
      } </span></span> 
              <span class="m-0 text-muted w-100 d-block">KSH ${
                product.price * product.quantity
              }</span>
            </p>
          </div>
        </div>
      </li> 
        `;
    });

    checkoutItems.innerHTML = result.join("");
    checkoutTotal.innerHTML = countTotal();
  } else {
    checkoutItems.innerHTML = "<h6>Your cart is empty.</h6>";
    checkoutTotal.innerHTML = 0;
    placeOrderButton.classList.toggle("disabled");
  }
}

updateCheckoutHTML();

placeOrderButton.addEventListener("click", (e) => {
  cartProducts = JSON.parse(localStorage.getItem("lantema-cart")) ?? [];

  $.post(
    baseUrl + "/checkout",
    { products: cartProducts, total: countTotal() },
    (data, status) => {
      if (data.success == true) {
        // The order has been succesfully placed

        // Clear the cart data
        localStorage.setItem("lantema-cart", JSON.stringify([]));

        updateCheckoutHTML();
        updateShoppingCartHTML();
      } else {
        // There was an error adding the order details
        // Show an error prompt
      }
    }
  );
});

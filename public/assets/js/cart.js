let cartProducts;

const parentElement = document.querySelector("#miniCartItems");
const cartSumPrice = document.querySelector("#miniCartTotal");
const addToCartButtons = document.querySelectorAll(".addToCart");
const cartItemCount = document.querySelector("#cartItemCount");
const cartItemCountBadge = document.querySelector("#cartItemCountBadge");
const miniCartTotal = document.querySelector("#miniCartTotal");
const checkoutBtn = document.querySelector("#checkoutButton");

addToCartButtons.forEach((button) => {
  button.addEventListener("click", (e) => {
    cartProducts = JSON.parse(localStorage.getItem("lantema-cart")) ?? [];
    const id = e.target.dataset.id;
    const name = e.target.dataset.name;
    const price = e.target.dataset.price;
    const image = e.target.dataset.image;

    let productData = {
      id,
      name,
      price: +price,
      image,
      quantity: 1,
    };

    updateProductsInCart(productData);
    updateShoppingCartHTML();
  });
});

updateShoppingCartHTML();

function updateProductsInCart(product) {
  productExists = false;
  if (cartProducts.length > 0) {
    for (let i = 0; i < cartProducts.length; i++) {
      if (cartProducts[i].id == product.id) {
        productExists = true;
        cartProducts[i].quantity += 1;
        break;
      }
    }
  }
  if (!productExists) cartProducts.push(product);

  localStorage.setItem("lantema-cart", JSON.stringify(cartProducts));
}

function updateShoppingCartHTML() {
  cartProducts = JSON.parse(localStorage.getItem("lantema-cart")) ?? [];

  if (cartProducts.length > 0) {
    let result = cartProducts.map((product) => {
      return `
        <li class="py-2">
          <div class="row align-items-center">
            <div class="col-4">
              <img class="img-fluid border" src="${product.image}" alt="${product.name}">
            </div>
            <div class="col-8">
              <p class="mb-2">
                <span class="text-dark fw-500">${product.name}</span>
                <span class="m-0 text-muted w-100 d-block">KSH ${product.price}</span>
              </p>
              <div class="d-flex align-items-center">
                <div class="cart-qty d-inline-flex">
                <div class="dec qty-btn qty_btn">-</div>
                <input class="cart-qty-input form-control" type="text" name="qtybutton" value="${product.quantity}">
                <div class="inc qty-btn qty_btn">+</div>
              </div>
              <button class="small text-dark ms-auto" onclick="removeItemFromCart(${product.id})"><i class="bi bi-x"></i> Remove</button>
            </div>
          </div>
        </li> 
        `;
    });

    parentElement.innerHTML = result.join("");
    checkoutBtn.classList.remove("disabled");
    miniCartTotal.innerHTML = countTotal();
    cartProducts = JSON.parse(localStorage.getItem("lantema-cart")) ?? [];
    cartItemCount.innerHTML = cartProducts.length;
    cartItemCountBadge.setAttribute("data-cart-items", cartProducts.length);
  } else {
    parentElement.innerHTML = "<h6>Your cart is empty.</h6>";
    miniCartTotal.innerHTML = 0;
    cartItemCount.innerHTML = 0;
    cartItemCountBadge.setAttribute("data-cart-items", 0);
    checkoutBtn.classList.toggle("disabled");
  }
}

function countTotal() {
  cartProducts = JSON.parse(localStorage.getItem("lantema-cart")) ?? [];
  total = 0;

  if (cartProducts.length > 0) {
    for (let i = 0; i < cartProducts.length; i++) {
      total += cartProducts[i].price * cartProducts[i].quantity;
    }
  }
  return total;
}

function removeItemFromCart(id) {
  cartProducts = JSON.parse(localStorage.getItem("lantema-cart")) ?? [];

  for (let i = 0; i < cartProducts.length; i++) {
    if (cartProducts[i].id == id) {
      cartProducts.splice(i, 1);
    }
  }

  localStorage.setItem("lantema-cart", JSON.stringify(cartProducts));

  updateShoppingCartHTML();

  if (window.updateCheckoutHTML) {
    updateCheckoutHTML();
  }
}

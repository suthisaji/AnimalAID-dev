jQuery(document).ready(function($) {
  var cartWrapper = $(".cd-cart-container");
  var _cartList = [];
  if (cartWrapper.length > 0) {
    var cartBody = cartWrapper.find(".body");
    var cartList = cartBody.find("ul").eq(0);
    var cartTotal = cartWrapper.find(".checkout").find("span");
    var cartTrigger = cartWrapper.children(".cd-cart-trigger");
    var cartCount = cartTrigger.children(".count");
    var addToCartBtn = $(".cd-add-to-cart");

    addToCartBtn.on("click", function(event) {
      event.preventDefault();
      addToCart($(this));
    });

    cartTrigger.on("click", function(event) {
      event.preventDefault();
      toggleCart();
    });

    cartWrapper.on("click", function(event) {
      if ($(event.target).is($(this))) toggleCart(true);
    });

    cartList.on("click", ".delete-item", function(event) {
      event.preventDefault();
      removeProduct($(event.target).parents(".product"));
    });
    cartList.on("change", "select", function(event) {
      quickUpdateCart();
    });
  }

  function toggleCart(bool) {
    var cartIsOpen =
      typeof bool === "undefined" ? cartWrapper.hasClass("cart-open") : bool;

    if (cartIsOpen) {
      cartWrapper.removeClass("cart-open");
      cartList.find(".deleted").remove();

      setTimeout(function() {
        cartBody.scrollTop(0);
        if (
          Number(
            cartCount
              .find("li")
              .eq(0)
              .text()
          ) == 0
        )
          cartWrapper.addClass("empty");
      }, 500);
    } else {
      cartWrapper.addClass("cart-open");
    }
  }

  function addToCart(trigger) {
    var datas = {
      price: trigger.data("price"),
      img: trigger.data("img"),
      name: trigger.data("name")
    };
    var cartIsEmpty = cartWrapper.hasClass("empty");

    addProduct(datas);
    updateCartCount(cartIsEmpty);
    updateCartTotal(trigger.data("price"), true);
    cartWrapper.removeClass("empty");
  }

  function addProduct(datas) {
    var isOldItem = _cartList.find(item => item.name === datas.name);
    if (isOldItem) {
      isOldItem.quantity += 1;
    } else {
      _cartList.push({
        name: datas.name,
        img: datas.img,
        price: datas.price,
        quantity: 1
      });
    }
    cartList.html("");
    _cartList.forEach(item => {
      var productAdded = $(
        `<li class="product">
          <div class="product-image">
              <a href="#0">
                  <img src="${item.img}" alt="placeholder"/>
              </a>
          </div>
          <div class="product-details">
              <strong class="product-name">
                  ${item.name}
              </strong>
              <span class="price">${item.price} บาท</span>
          <div class="actions">
              <span class="delete-item">
                  ลบ <i class="fa fa-trash-o" aria-hidden="true"></i>
              </span>
              <div class="quantity">
                <label>x${item.quantity}</label>
              </div>
          </div>
          </div>
          </li>`
      );
      cartList.prepend(productAdded);
    });
  }

  function removeProduct(product) {
    cartList.find(".deleted").remove();

    var name = product
      .find(".product-name")
      .text()
      .trim();
    _cartList = _cartList.filter(item => item.name !== name);
    var topPosition =
        product.offset().top - cartBody.children("ul").offset().top,
      productQuantity = Number(
        product
          .find(".quantity")
          .find("label")
          .text()
          .replace("x", "")
      ),
      productTotPrice =
        Number(
          product
            .find(".price")
            .text()
            .replace(" บาท", "")
        ) * productQuantity;
    product.css("top", topPosition + "px").addClass("deleted");

    updateCartTotal(productTotPrice, false);
    updateCartCount(true, -productQuantity);
  }

  function quickUpdateCart() {
    var quantity = 0;
    var price = 0;

    cartList.children("li:not(.deleted)").each(function() {
      var singleQuantity = Number(
        $(this)
          .find("select")
          .val()
      );
      quantity = quantity + singleQuantity;
      price =
        price +
        singleQuantity *
          Number(
            $(this)
              .find(".price")
              .text()
              .replace("$", "")
          );
    });

    cartTotal.text(price.toFixed(2));
    cartCount
      .find("li")
      .eq(0)
      .text(quantity);
    cartCount
      .find("li")
      .eq(1)
      .text(quantity + 1);
  }

  function updateCartCount(emptyCart, quantity) {
    if (typeof quantity === "undefined") {
      var actual =
        Number(
          cartCount
            .find("li")
            .eq(0)
            .text()
        ) + 1;
      var next = actual + 1;

      if (emptyCart) {
        cartCount
          .find("li")
          .eq(0)
          .text(actual);
        cartCount
          .find("li")
          .eq(1)
          .text(next);
      } else {
        cartCount.addClass("update-count");

        setTimeout(function() {
          cartCount
            .find("li")
            .eq(0)
            .text(actual);
        }, 150);

        setTimeout(function() {
          cartCount.removeClass("update-count");
        }, 200);

        setTimeout(function() {
          cartCount
            .find("li")
            .eq(1)
            .text(next);
        }, 230);
      }
    } else {
      var actual =
        Number(
          cartCount
            .find("li")
            .eq(0)
            .text()
        ) + quantity;
      if (actual < 0) {
        actual = 0;
      }
      var next = actual + 1;

      cartCount
        .find("li")
        .eq(0)
        .text(actual);
      cartCount
        .find("li")
        .eq(1)
        .text(next);
    }
  }

  function updateCartTotal(price, bool) {
    bool
      ? cartTotal.text((Number(cartTotal.text()) + Number(price)).toFixed(2))
      : cartTotal.text((Number(cartTotal.text()) - Number(price)).toFixed(2));
  }
});

// showAdminTable(1);

// AJAX FOR DELETING ITEMS FROM CART
$(document).ready(function () {
  
  $('#items').on('click', '.delete', function () {
    var productid = this.value;
    if (confirm("Do you want to remove this item from your cart?")) {
      $.ajax({
        type: "POST",
        url: 'ajax/item_remove.php',
        data: {
          productid: productid
        },
        success: function (response) {
          //
          var result = JSON.parse(response);
          var output = "";
          if (result.length > 0) {
            $.each(result, function (key, value) {
              output += `<div class='item flex-row'>
              <div class='item-left'>
                <img src='${value['src']}' alt='${value['alt']}'>
              </div> 
              <div class='item-mid'>${value['name']}<br/>
                $${value['price']}
              </div>
              <div class='item-right'>
              <button class='delete' value='${value['id']}'>Remove</button>
              </div>
            </div>`;
              $("#items").html(output);
            })
          } else {
            output = "You have no items in your cart";
            $("#items").html(output);
          }

        }
      })
    }
  })
})
//AJAX CART END

//AJAX FOR COMMENT EDIT
$("#update-comment").on('change', function(){
  var id = this.id;
  var value = this.value;
  $.ajax({
    url: 'ajax/comment_update.php',
    type: 'POST',
    data: {
      id:id,
      value: value
    },
    success: function(response){
      var data = JSON.parse(response);
      $("#update-heading").val(data[0]['heading']);
      $("#update-content").val(data[0]['content']);
      $("#update-date").val(data[0]['date_created']);
      $("#update-c-userid").val(data[0]['userid']);
      $("#update-c-productid").val(data[0]['productid']);
    }
  })
})
//END

//AJAX FOR RATING 
$(".vote").on('click', function(){
  var value = this.value;
  var productid = this.id;
  $.ajax({
    url: "ajax/rating.php",
    type: "POST",
    data : {
      value: value,
      productid: productid
    },
    success: function(response){
      var data = JSON.parse(response);
      if (jQuery.type(data)=='string'){
        $("#denied").html(data);
      }
      else {
        $("#user-rating").html(data['rating']);
      }
      
    }
  })
})
//END

//AJAX FOR GENDER FILTER 
$('[name=radio-filter]').on('click', function () {
  var gender = $(this).val();
  $.ajax({
    type: "POST",
    url: "ajax/gender.php",
    data: {
      gender: gender
    },
    success: function (response) {

      var products = JSON.parse(response);
      $(".products").empty();
      var text = "";
      if (products.length < 1) {
        text = `<h1>No products found for selected gender</h1>`;
        $(".products").append(text);
      }
      $.each(products, function (key, value) {

        text = `<div class='product'><a href='details?productid=${products[key]['productid']}'><img src='/${products[key]['src']}' alt='${products[key]['alt']}'><div class='product-name'>${products[key]['name']}</div></a><p>$${products[key]['price']}</p></div>`;
        $(".products").append(text);
      })
    }
  })
})
// END

//EDIT CART AJAX//
$("#update-cart").on("change", function () {
  var cartid = this.value;
  $.ajax({
    url: "ajax/cart_update.php",
    data: {
      cartid: cartid
    },
    type: "POST",
    success: function (response) {

      var result = JSON.parse(response);

      $("#update-userid").val(result[0]['userid']);
      $("#update-cartid").val(result[0]['cartid']);
    }
  })
})

//END

//EDIT USER AJAX
$("#update-user").on('change', function () {
  var userid = this.value;
  $.ajax({
    url: 'ajax/user_update.php',
    type: "POST",
    data: {
      userid: userid
    },
    success: function (response) {
      var result = JSON.parse(response);
      $("#update-first").val(result[0]['first_name']);
      $("#update-last").val(result[0]['last_name']);
      $("#update-email").val(result[0]['email']);
      $("#update-password").val(result[0]['password']);
      $("#update-roleid").val(result[0]['roleid']);
    }
  })

})

//END

//EDIT PRODUCT AJAX 
$("#update-product").on('change', function () {
  var productid = this.value;
  $.ajax({
    url: "ajax/product_update.php",
    method: "POST",
    data: {
      productid: productid
    },
    success: function (response) {
      var result = JSON.parse(response);
      $("#update-name").val(result[0]['name']);
      $("#update-desc").val(result[0]['description']);
      $("#update-price").val(result[0]['price']);
      $("#update-cat").val(result[0]['categoryid']);
      $("#update-gender").val(result[0]['genderid']);
      $("#update-image").val(result[0]['imageid']);
    }
  })
})

//END

//EDIT IMAGE AJAX
$("#update-images").on('change', function () {
  var imageid = this.value;
  $.ajax({
    url: "ajax/image_update.php",
    type: "POST",
    data: {
      imageid: imageid
    },
    success: function (response) {
      var result = JSON.parse(response);
      $("#update-src").val(result[0]['src']);
      $("#update-alt").val(result[0]['alt']);
    }
  })
})
//EDIT

//CHANGE BENETIFS ON CLICK
showBenefits(1);

function showBenefits(n) {

  let benefits = document.getElementsByClassName('benefit-bg');

  for (let i = 0; i < benefits.length; i++) {
    
    benefits[i].style.display = 'none';

  }
  benefits[n - 1].style.display = 'block';

}
//END

//ADD LISTENERS
addListeners();

function addListeners() {
  document.getElementById('util').addEventListener('click', function () {

    showBenefits(1);

    addDark(this, 'dark');

    removeManageAndBlister();

  });
  document.getElementById('blister').addEventListener('click', function () {

    showBenefits(2);

    addDark(this, 'dark1');

    removeUtilAndManage();

  });
  document.getElementById('manage').addEventListener('click', function () {

    showBenefits(3);

    addDark(this, 'dark2');

    removeUtilAndBlister();
  });

  window.addEventListener('scroll', function () {
    scroll();
  })
}
//ADD DARKENED BACKGROUNDS TO BENEFITS BUTTONS
function addDark(element, className) {

  let lista = element.classList;

  if (!lista.contains(className)) {

    element.classList.add(className);

  }
}
//END

//REMOVING DARK BACKGROUND FROM NON-CLICKED BUTTONS
function removeManageAndBlister() {

  let btnBlister = document.getElementById('blister');
  let btnManage = document.getElementById('manage');

  btnBlister.classList.remove('dark1');
  btnManage.classList.remove('dark2');
}

function removeUtilAndBlister() {

  let btnUtil = document.getElementById('util');
  let btnBlister = document.getElementById('blister');

  btnUtil.classList.remove('dark');
  btnBlister.classList.remove('dark1');
}

function removeUtilAndManage() {

  let btnUtil = document.getElementById('util');
  let btnManage = document.getElementById('manage');

  btnUtil.classList.remove('dark');
  btnManage.classList.remove('dark2');
}


//SLIDE IN / OUT WHEN SCROLLING
function scrollFirst(posY) {

  if (posY > 850) {

    document.getElementById("trailText").classList.add('slideToRight');
    document.getElementById("trailSocks").classList.add('slideToLeft');

  }

}

function scrollSecond(posY) {

  if (posY > 1300) {

    document.getElementById("mountainText").classList.add('slideToLeft');
    document.getElementById("mountainSocks").classList.add('slideToRight');

  }
}

function scrollThird(posY) {

  if (posY > 1800) {

    document.getElementById("roadText").classList.add('slideToRight');
    document.getElementById("roadSocks").classList.add('slideToLeft');

  }
}

function scroll() {

  let posY = window.scrollY || window.scrollTop || document.getElementsByTagName("html")[0].scrollTop;

  scrollFirst(posY);
  scrollSecond(posY);
  scrollThird(posY);

}



function showAdminTable(n) {

  let tables = document.getElementsByClassName('admin-table');

  for (let i = 0; i < tables.length; i++) {

    tables[i].style.display = 'none';

  }
  tables[n - 1].style.display = 'block';

}
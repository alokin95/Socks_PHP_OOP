// AJAX FOR DELETING ITEMS FROM CART
$(document).ready(function(){
  
  $('#items').on('click','.delete', function(){
    var productid = this.value;
    console.log(productid);
    if (confirm("Do you want to remove this item from your cart?")){
    $.ajax({
      type: "POST",
      url: 'views/test.php',
      data: {
        productid : productid
      },
      success: function(response){
         $("#items").html(response);
      }
    })
  }
  })
})
//AJAX CART END

//CHANGE BENETIFS ON CLICK
showBenefits(1);

function showBenefits(n){

  let benefits = document.getElementsByClassName('benefit-bg');

  for (let i = 0; i < benefits.length; i++){

    benefits[i].style.display = 'none';
    //benefits[i].style.opacity = 1;
  }
  benefits[n-1].style.display = 'block';
  //benefits[n-1].style.opacity = 1;
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

  window.addEventListener('scroll', function(){
    scroll();
  })
}
//ADD DARKENED BACKGROUNDS TO BENEFITS BUTTONS
function addDark(element, className){

  let lista = element.classList;

  if (!lista.contains(className)){

    element.classList.add(className);

  }
}
//END

//REMOVING DARK BACKGROUND FROM NON-CLICKED BUTTONS
function removeManageAndBlister(){

  let btnBlister = document.getElementById('blister');
  let btnManage = document.getElementById('manage');

  btnBlister.classList.remove('dark1');
  btnManage.classList.remove('dark2');
}

function removeUtilAndBlister(){

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
function scrollFirst(posY){

  if (posY > 850) {

    document.getElementById("trailText").classList.add('slideToRight');
    document.getElementById("trailSocks").classList.add('slideToLeft');

  }

}

function scrollSecond(posY){

  if (posY > 1300) {

    document.getElementById("mountainText").classList.add('slideToLeft');
    document.getElementById("mountainSocks").classList.add('slideToRight');

  }
}

function scrollThird(posY){

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


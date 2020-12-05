$(document).ready(function(){
		
});

  //QUANTITY
  $('.minus').click(function() {
    var quantity = parseInt($('.number').html());
    quantity -= 1;
    if (quantity < 1) {
      quantity = 1;
    }
    updateQuantity(quantity);
    updatePrice(quantity);
  });

  $('.plus').click(function() {
    var quantity = parseInt($('.number').html());
    quantity += 1;
    updateQuantity(quantity);
    updatePrice(quantity);
  });

  function updatePrice(quantity) {
    var price = 20;
    price = price * quantity;
    $('#price').html("S/." + price);
  }

  function updateQuantity(quantity) {
    $('.number').html(quantity);
  }
  
  
  
  
  
  
  
  
  //QUANTITY
  $('.minus1').click(function() {
    var quantity1 = parseInt($('.number1').html());
    quantity1 -= 1;
    if (quantity1 < 1) {
      quantity1 = 1;
    }
    updateQuantity1(quantity1);
    updatePrice1(quantity1);
  });

  $('.plus1').click(function() {
    var quantity1= parseInt($('.number1').html());
    quantity1 += 1;
    updateQuantity1(quantity1);
    updatePrice1(quantity1);
  });

  function updatePrice1(quantity1) {
    var price1 = 20;
    price1 = price1 * quantity1;
    $('#price1').html("S/." + price1);
  }

  function updateQuantity1(quantity1) {
    $('.number1').html(quantity1);
  }
  
  
  
  
  
   //QUANTITY
  $('.minus2').click(function() {
    var quantity2 = parseInt($('.number2').html());
    quantity2 -= 1;
    if (quantity2 < 1) {
      quantity2 = 1;
    }
    updateQuantity2(quantity2);
    updatePrice2(quantity2);
  });

  $('.plus2').click(function() {
    var quantity2= parseInt($('.number2').html());
    quantity2 += 1;
    updateQuantity2(quantity2);
    updatePrice2(quantity2);
  });

  function updatePrice2(quantity2) {
    var price2 = 20;
    price2 = price2 * quantity2;
    $('#price2').html("S/." + price2);
  }

  function updateQuantity2(quantity2) {
    $('.number2').html(quantity2);
  }
  
  
  
  
  
  
  
  
  //QUANTITY
  $('.minus4').click(function() {
    var quantity4 = parseInt($('.number4').html());
    quantity4 -= 1;
    if (quantity4 < 1) {
      quantity4 = 1;
    }
    updateQuantity4(quantity4);
    updatePrice4(quantity4);
  });

  $('.plus4').click(function() {
    var quantity4= parseInt($('.number4').html());
    quantity4 += 1;
    updateQuantity4(quantity4);
    updatePrice4(quantity4);
  });

  function updatePrice4(quantity4) {
    var price4 = 20;
    price4 = price4 * quantity4;
    $('#price4').html("S/." + price4);
  }

  function updateQuantity4(quantity4) {
    $('.number4').html(quantity4);
  }
  
  
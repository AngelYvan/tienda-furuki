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
    var price = 23;
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
    var price1 = 23;
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
    var price2 = 23;
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
    var price4 = 23;
    price4 = price4 * quantity4;
    $('#price4').html("S/." + price4);
  }

  function updateQuantity4(quantity4) {
    $('.number4').html(quantity4);
  }
  
  
  
  
  
  
  
  //QUANTITY
  $('.minus5').click(function() {
    var quantity5 = parseInt($('.number5').html());
    quantity5 -= 1;
    if (quantity5 < 1) {
      quantity5 = 1;
    }
    updateQuantity5(quantity5);
    updatePrice5(quantity5);
  });

  $('.plus5').click(function() {
    var quantity5= parseInt($('.number5').html());
    quantity5 += 1;
    updateQuantity5(quantity5);
    updatePrice5(quantity5);
  });

  function updatePrice5(quantity5) {
    var price5 = 23;
    price5 = price5 * quantity5;
    $('#price5').html("S/." + price5);
  }

  function updateQuantity5(quantity5) {
    $('.number5').html(quantity5);
  }
  
  
  
  
  
  
  
  
  
  
  
  //QUANTITY
  $('.minus6').click(function() {
    var quantity6 = parseInt($('.number6').html());
    quantity6 -= 1;
    if (quantity6 < 1) {
      quantity6 = 1;
    }
    updateQuantity6(quantity6);
    updatePrice6(quantity6);
  });

  $('.plus6').click(function() {
    var quantity6= parseInt($('.number6').html());
    quantity6 += 1;
    updateQuantity6(quantity6);
    updatePrice6(quantity6);
  });

  function updatePrice6(quantity6) {
    var price6 = 23;
    price6= price6 * quantity6;
    $('#price6').html("S/." + price6);
  }

  function updateQuantity6(quantity6) {
    $('.number6').html(quantity6);
  }
  
  
  
  
  
  
  
  //QUANTITY
  $('.minus7').click(function() {
    var quantity7 = parseInt($('.number7').html());
    quantity7 -= 1;
    if (quantity7 < 1) {
      quantity7 = 1;
    }
    updateQuantity7(quantity7);
    updatePrice7(quantity7);
  });

  $('.plus7').click(function() {
    var quantity7= parseInt($('.number7').html());
    quantity7 += 1;
    updateQuantity7(quantity7);
    updatePrice7(quantity7);
  });

  function updatePrice7(quantity7) {
    var price7 = 23;
    price7= price7 * quantity7;
    $('#price7').html("S/." + price7);
  }

  function updateQuantity7(quantity7) {
    $('.number7').html(quantity7);
  }
  
  
  
  
  
  
  
  
  
  
  
  
  //QUANTITY
  $('.minus8').click(function() {
    var quantity8 = parseInt($('.number8').html());
    quantity8 -= 1;
    if (quantity8 < 1) {
      quantity8 = 1;
    }
    updateQuantity8(quantity8);
    updatePrice8(quantity8);
  });

  $('.plus8').click(function() {
    var quantity8= parseInt($('.number8').html());
    quantity8 += 1;
    updateQuantity8(quantity8);
    updatePrice8(quantity8);
  });

  function updatePrice8(quantity8) {
    var price8 = 23;
    price8= price8 * quantity8;
    $('#price8').html("S/." + price8);
  }

  function updateQuantity8(quantity8) {
    $('.number8').html(quantity8);
  }
  
  
  
  
  
//QUANTITY
  $('.minus9').click(function() {
    var quantity9 = parseInt($('.number9').html());
    quantity9 -= 1;
    if (quantity9 < 1) {
      quantity9 = 1;
    }
    updateQuantity9(quantity9);
    updatePrice9(quantity9);
  });

  $('.plus9').click(function() {
    var quantity9= parseInt($('.number9').html());
    quantity9 += 1;
    updateQuantity9(quantity9);
    updatePrice9(quantity9);
  });

  function updatePrice9(quantity9) {
    var price9 = 23;
    price9= price9 * quantity9;
    $('#price9').html("S/." + price9);
  }

  function updateQuantity9(quantity9) {
    $('.number9').html(quantity9);
  }  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
 //QUANTITY
  $('.minus10').click(function() {
    var quantity10 = parseInt($('.number10').html());
    quantity10 -= 1;
    if (quantity10 < 1) {
      quantity10 = 1;
    }
    updateQuantity10(quantity10);
    updatePrice10(quantity10);
  });

  $('.plus10').click(function() {
    var quantity10= parseInt($('.number10').html());
    quantity10 += 1;
    updateQuantity10(quantity10);
    updatePrice10(quantity10);
  });

  function updatePrice10(quantity10) {
    var price10 = 23;
    price10= price10 * quantity10;
    $('#price10').html("S/." + price10);
  }

  function updateQuantity10(quantity10) {
    $('.number10').html(quantity10);
  }   
  
  
  

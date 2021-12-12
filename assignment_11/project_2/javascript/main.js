function totalRent(days) {
  var i = 1,
    rent = 0,
    base_price = 100;

  while (i <= days) {
    if (i <= 10) {
      rent += base_price;
    } 
    
    else if (i > 10 && i <= 20) {
      rent += base_price - (base_price / 100) * 20;
    }
    
    else {
      rent += base_price - (base_price / 100) * 50;
    }
    i++;
  }
  return rent;
}

var days = 21;
var rent = totalRent(days);
document.write("<h2>Rent for " + days + " days is: " + rent + " Taka Only.</h2>");

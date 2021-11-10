function totalRent(days) {
 var base_rent = 100, rentPerDay;
 if(days <=10) {
  rentPerDay = base_rent;
 }
 else if(days > 10 && days <=20) {
  rentPerDay = base_rent - ((base_rent/100)*20);
 }
 else {
  rentPerDay = base_rent - ((base_rent/100)*50);
 }
 var total_rent = rentPerDay*days;
 return total_rent;
}

var days = 21;
var rent = totalRent(days);
document.write("<h2>Rent for " + days + " days is: "+ rent + " Taka Only.</h2>");
function totalPrice(watch, laptop, phone) {
 var total = watch+laptop+phone;
 return total;
}


var total_price = totalPrice(4999, 70500, 20000); //sequence: watch, laptop, phone
document.write("<h2>Total Price: "+total_price+ " BDT</h2>");
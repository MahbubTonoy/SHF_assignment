function totalPrice(watch, laptop, phone) {
  let total = watch + laptop + phone;
  return total;
}

let watch = 5999;
let laptop = 70500;
let phone = 20000;

let total_price = totalPrice(watch, laptop, phone);

document.write("<h2>Watch = " + watch + "BDT</h2>");
document.write("<h2>Laptop = " + laptop + "BDT</h2>");
document.write("<h2>Phone = " + phone + "BDT</h2><hr/>");
document.write("<h2>Total Price = " + total_price + " BDT</h2>");
let display = document.querySelector(".display span");

function btnInput(input) {
 display.innerHTML += input;
}

function erase() {
 let temp = display.innerHTML.substring(0, display.innerHTML.length-1);
 display.innerHTML = temp;
}

function reset() {
 display.innerHTML = "";
}

function action() {
 try {
  let math = eval(display.innerHTML);
  display.innerHTML = math;
 } catch(err) {
  alert("Math Error");
 }
}
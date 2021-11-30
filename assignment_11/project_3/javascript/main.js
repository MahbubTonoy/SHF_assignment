var friends = [
  "Cartoon Fahid",
  "Masud Rana",
  "Lucy Reza",
  "Maria Dewan",
  "Md Abdul Alim",
  "Md Serazul Islam",
  "RA Shawon",
  "A.N. Pronoy",
  "Anwar Hossain",
  "MD Mohsinul Haque",
  "Saiimum",
  "Hridoy Ahad",
  "Jannat Chaiti",
  "Mahdee Al Amin",
  "Mbs Mahedi Hasan",
  "Shawon Ahmed Rubel",
  "Sakib Raz"
];
document.write("<h2>My Friend List</h2><ul>");
for(let name of friends) {
  document.write("<li>"+name+"</li>");
}
document.write("</ul>");
function greaterNameFinder(friendsArray) {
 var targetIndex = 0;

 for(var i = 1; i < friendsArray.length; i++) {


  if(friendsArray[i].length > friendsArray[targetIndex].length) {
   targetIndex = i;
  }

 }

 return friendsArray[targetIndex];
}


var greaterName = greaterNameFinder(friends);

document.write("<h2>Greater Name of My Friendlist is: <i>"+greaterName+"</i></h2>");
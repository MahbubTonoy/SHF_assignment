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
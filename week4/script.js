if (!sessionStorage.getItem('alertShown')) {          
    alert("Welcome to my personal profile!");         
    sessionStorage.setItem('alertShown', 'true');   }

let name = "Jon Morieshi";
let age = 20;
let occupation = "Student";

console.log("Name:", name);
console.log("Age:", age);
console.log("Occupation:", occupation);

let availableForHire = false;

if (availableForHire) {
  console.log("I am available for hire.");
} else {
  console.log("I am not available for hire at the moment.");
}


let greeting = "Hello, Welcome to my Personal Website!";
console.log(greeting);


var d = new Date();
var b = d.getDate();            
var c = d.getFullYear();       
var e = d.getHours();           
var g = d.getMinutes();        
var h = d.getMonth() + 1;                   

console.log("Month: " + h);
console.log("Day of the month: " + b);
console.log("Year: " + c);
console.log("Hour: " + e);
console.log("Minutes: " + g);


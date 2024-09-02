// write a javascript program to reverse a string using do while loop.
let str = "hello world";
let reverseString = "";
let i = str.length - 1;
do {
    reverseString += str[i];
    i--;

} while (i >= 0);
console.log(reverseString);
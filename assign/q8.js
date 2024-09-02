/*Write a javascript program to create an array of strings and remove the first
element from the array. Then add a new string to the beginning of the array.
Using shift() and unshift().*/
const animals = ["cat", "dog", "horse"];
animals.shift();
console.log(animals);
animals.unshift("tiger")
console.log(animals);
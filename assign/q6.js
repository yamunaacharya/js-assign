// Write a javascript program to create an array of numbers and use forEach() to print
// all the even numbers in the array.
let num = [1, 5, 7, 3, 8, 2, 6, 10];
let even = [];

num.forEach((num) => {
    if (num % 2 === 0) {
        even.push(num);
    }
})

console.log(even); 
/*Write a function that takes a number as an argument and returns its factorial.
Test the function with different numbers*/
function Factorials(num) {
    let result = 1;
    for (let i = num; i >= 1; i--) {
        result = result * i;
    }
    return result;
}

let result = Factorials(7);
console.log(result);
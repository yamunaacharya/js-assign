/*Write a function named calculate BMI that takes a person's weight in kilograms
and height in meters as arguments and returns their BMI (body mass index). Test
the function with different weight and height values and log the returned value to
the console.*/
function calculateBMI(weight, height) {
    let bmi = weight / (height * height);
    return bmi;
}

let bmi1 = calculateBMI(45, 1.75); 
console.log(bmi1); 

let bmi2 = calculateBMI(50, 1.69); 
console.log(bmi2); 
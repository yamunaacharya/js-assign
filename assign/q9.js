//Write a javascript program to create an array of strings and use map() to create a
//new array where each string is capitalized. Print the new array.
const string =  ['pamela', 'shanti', 'yamuna'];
const capitalizedArray = string.map(capitalize);
function capitalize(str){
    newArray = str.charAt(0).toUpperCase() + str.slice(1)
    return newArray;
}
console.log(capitalizedArray);
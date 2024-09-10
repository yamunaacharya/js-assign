// Write a javascript program to create an array of strings and use the filter()
// method to filter out strings that start with the letter &#39; A &#39;. 
// Print the filtered array.

const str = ["usa", "australia", "canada", "albenia", "portugal", "austria", "norway"];

const filteredArray = str.filter(function (str) {
    return str[0] == 'a';
});

console.log(filteredArray);
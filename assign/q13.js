// Write a javascript program to create an array of objects representing students
// where each object has a name and age property.Use the map() method to create a 
// new array containing only the ages of the students.Print the new array.

// Array of student objects
const students = [
    { name: "taylor", age: 34 },
    { name: "olivia", age: 20 },
    { name: "gracie", age: 13 },
    { name: "selena", age: 33 },
];

const agesArray = students.map(function (student) {
    return student.age;
});

console.log(agesArray);
/*Write a javascript program to create an array of objects representing people,
where each object has a name and age property. Use push() to add a new
person to the array, and use pop() to remove the last person from the array.*/
let people = [
    { name: "hari", age: 20 },
    { name: "ram", age: 21 },
    { name: "shyam", age: 22 }
];
people.push({ name: "sita", age: 18 });
console.log(people);

people.pop();
console.log(people);
// Write a javascript program to create an array of objects representing books,where each 
// object has a title and author property.Use splice() to remove thesecond book from the 
// array.Print the modified array.
const books = [
    { title: "Romeo&Juilet", author: "William Shakespeare" },
    { title: "Time Machine", author: "h.g wells" },
    { title: "Odyssey", author: "Homer" }
];

books.splice(1, 1);
console.log(books);
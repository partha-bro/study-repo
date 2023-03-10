var sum = function (nums) {
    return nums.reduce(function (num, acc) { return num + acc; }, 0);
};
console.log("Function using typescript: ".concat(sum([4, 2])));
var user = {
    name: 'Arjun',
    age: 28
};
console.log("Type alias :  ".concat(user.name, ",").concat(user.age));
function printId(id) {
    // narrowing
    if (typeof id === 'string')
        console.log({ 'String-type': id.toUpperCase() });
    else
        console.log({ 'Interger-type': id });
}
printId('hello');
printId(6);
var book1 = {
    name: 'Atomic Habits',
    price: 1200,
    format: 'mp3',
    fileSize: 1024,
    duration: 2
};
console.log({ Interface_example: book1 });
var myCar = {
    name: 'TATA',
    model: 'Nexon',
    price: 800000
};
console.log(myCar);
// Generics
function logAnything(arg) {
    return arg;
}
console.log(logAnything(12345));
console.log(logAnything('Typescript'));
console.log(logAnything([6, 7, 8, 9, 0]));
// generic example
var arr = [1, 23, 4, 'dfgdf'];
console.log(arr);

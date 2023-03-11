"use strict";
var __awaiter = (this && this.__awaiter) || function (thisArg, _arguments, P, generator) {
    function adopt(value) { return value instanceof P ? value : new P(function (resolve) { resolve(value); }); }
    return new (P || (P = Promise))(function (resolve, reject) {
        function fulfilled(value) { try { step(generator.next(value)); } catch (e) { reject(e); } }
        function rejected(value) { try { step(generator["throw"](value)); } catch (e) { reject(e); } }
        function step(result) { result.done ? resolve(result.value) : adopt(result.value).then(fulfilled, rejected); }
        step((generator = generator.apply(thisArg, _arguments || [])).next());
    });
};
const sum = (nums) => {
    return nums.reduce((num, acc) => num + acc, 0);
};
console.log(`Function using typescript: ${sum([4, 2])}`);
const user = {
    name: 'Arjun',
    age: 28
};
console.log(`Type alias :  ${user.name},${user.age}`);
function printId(id) {
    // narrowing
    if (typeof id === 'string')
        console.log({ 'String-type': id.toUpperCase() });
    else
        console.log({ 'Interger-type': id });
}
printId('hello');
printId(6);
const book1 = {
    name: 'Atomic Habits',
    price: 1200,
    format: 'mp3',
    fileSize: 1024,
    duration: 2
};
console.log({ Interface_example: book1 });
const myCar = {
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
function getOldest(people) {
    return people.sort((a, b) => b.age - a.age)[0];
}
const people = [{ age: 15 }, { age: 40 }, { age: 25 }];
console.log(getOldest(people));
const players = [
    { name: 'Ram', age: 40 },
    { name: 'Lakhaman', age: 26 },
    { name: 'Sita', age: 32 }
];
console.log(getOldest(players));
const fetchData = (path) => __awaiter(void 0, void 0, void 0, function* () {
    const response = yield fetch(`http://example.com${path}`);
    const data = yield response.json();
    return data;
});
(() => __awaiter(void 0, void 0, void 0, function* () {
    const users = yield fetchData('/users');
    users[0].name;
    const posts = yield fetchData('/posts');
    posts[0].title;
}))();
const buy = (item) => {
    return `I want buy this ${item.name} ${item.model}.`;
};
const mobile = {
    name: 'Moto',
    model: 'G71 5G',
    os: 'Android'
};
console.log(buy(mobile));

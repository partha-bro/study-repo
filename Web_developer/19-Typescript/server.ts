const sum = (nums: Array<number>): number => {
    return nums.reduce((num,acc)=>num+acc,0)
}

console.log(`Function using typescript: ${sum([4,2])}`)

// type alias
type User = {
    name : string,
    age : number,
    address?: string
}

const user : User = {
    name: 'Arjun',
    age: 28
}

console.log(`Type alias :  ${user.name},${user.age}`)

type ID = number | string

function printId(id: ID): void {
    // narrowing
    if(typeof id === 'string') console.log({'String-type':id.toUpperCase()})
    else console.log({'Interger-type':id})
}

printId('hello')
printId(6)

// Interfaces
interface Book {
    name: string;
    price: number;
}

interface Ebook extends Book {
    fileSize: number,
    format: string
}

interface AudioBook extends Ebook {
    duration: number
}

const book1 : AudioBook = {
    name: 'Atomic Habits',
    price: 1200,
    format: 'mp3',
    fileSize: 1024,
    duration: 2
}

console.log({Interface_example: book1})

// merge interface
interface Car {
    name: string,
    model: string 
}

interface Car {
    price: number
}

const myCar : Car = {
    name: 'TATA',
    model: 'Nexon',
    price: 800000
}

console.log(myCar);

// Generics
function logAnything<T> (arg: T): T {
    return arg
}

console.log(logAnything(12345))
console.log(logAnything('Typescript'))
console.log(logAnything([6,7,8,9,0]))

// generic example


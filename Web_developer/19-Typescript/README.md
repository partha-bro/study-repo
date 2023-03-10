# Typescript
    TypeScript is JavaScript with syntax for types.
    TypeScript is a strongly typed programming language that builds on JavaScript, giving you better tooling at any scale.

## Features
    1. JavaScript with syntax for types.
    2. This is very useful for developers only [find out typo/syntax/ not definded/etc errors]
    3. This is only run in only development mode not produnction mode

## Install
    $ npm install -g typescript

## Use
    The file extenstion of typescript is .ts and first it will convert to js file then run the file.
    $ touch file.ts
    $ tsc file.ts      // convert ts file to js file
    $ node file.js

## Type of Variable
    1. number
    2. string
    3. Array<number> | number[]
    4. Array<string> | string[]
    5. boolean
    6. void     // nothing return
    7. any

    example:
        const sum = (nums: Array<number>): number => {      // return type of this function
            return nums.reduce((num,acc)=>num+acc,0)
        }

        console.log(sum([4,2]))

## Type alias
    Make a custome type of data type.
    NOTE: Make sure custom type of first leter is Capital like
        type User = {
            name: string,
            age: number,
            address?: string
        }

        // it means basically User is a custom data type of object that has name of string type and age of number type

        USE: const obj : User = {
            name: 'Arjun',
            age: 28
        }

## Optional property
    We use ? notation for otional property if you add that property or not there is no error in typescript
    like: type User = {
            name: string,
            age: number,
            address?: string        // it is your choice to add value or ignore
        }

## Oprator 
### or/union oprator with narrowing
    type ID = number | string       // here ID may be number or string datatype
```
type ID = number | string

function printId(id: ID): void {
    // narrowing
    if(typeof id === 'string') console.log({'String-type':id.toUpperCase()})
    else console.log({'Interger-type':id})
}

printId('hello')
printId(6)
```



## Interfaces
    This is a shape of object, we can use to create an object based on that interface. It is same as class.
```
interface BankAccount {
    accountNumber: number;
    accountHolder: string;
    balance: number;
    isActive: boolean;
    transcations: Array<Transaction>
}

const sendTranscation: Transaction = {
    payeeAccount: 123,
    payerAccount: 456
}
const recieveTranscation: Transaction = {
    payeeAccount: 456,
    payerAccount: 123
}

const bankAccount : BankAccount = {
    accountNumber: 951,
    accountHolder: 'Arjun',
    balance: 357,
    isActive: true,
    transcations: [sendTranscation,recieveTranscation]
}

console.log({Interface_example: bankAccount})
```

## Inherits interface properties
    It means child interface inherits all properties of parent.
```
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
```

## Merge Interface
    If both the interface name should be same then all properties merge.
```
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
```

## Generics
    It is denotes using <whatever comes the type> that will argument and return od same data type
```
    Syntax:
        function logAnything<T> (arg: T): T {
            return arg
        }

        function logAnything<T extends interface> (arg: T): T {
            return arg
        }
```
```
function logAnything<T> (arg: T): T {
    return arg
}

console.log(logAnything(12345))
console.log(logAnything('Typescript'))
console.log(logAnything([6,7,8,9,0]))
```
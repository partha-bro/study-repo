# Typescript
    TypeScript is JavaScript with syntax for types.
    TypeScript is a strongly typed programming language that builds on JavaScript, giving you better tooling at any scale.

## Features
    1. JavaScript with syntax for types.
    2. This is very useful for developers only [find out typo/syntax/ not definded/etc errors]
    3. This is only run in only development mode not produnction mode

## Install
    $ npm install -g typescript

## Configure
    make a typescript configuration using below command
        $ tsc init
    To run the typescript file
        $ tsc

    In tsconfig.json file we have two option like 
        "outDir": "./dist/",            // use for output directory of ts files to js files
        "include": ["src/**/*"],        // include all files inside the src folder
        "exclude": ["node_modules"]     // exclude node_modules for typescript compile

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
    8. type alias
    9. interface

    example:
        const sum = (nums: Array<number>): number => {      // return type of this function
            return nums.reduce((num,acc)=>num+acc,0)
        }

        console.log(sum([4,2]))

## Type alias
    Make a custome type of data type.
    NOTE: Make sure custom type of first leter is Capital like
        type TUser = {
            name: string,
            age: number,
            address?: string
        }

        // it means basically User is a custom data type of object that has name of string type and age of number type

        USE: const obj : TUser = {
            name: 'Arjun',
            age: 28
        }

## Optional property
    We use ? notation for otional property if you add that property or not there is no error in typescript
    like: type TUser = {
            name: string,
            age: number,
            address?: string        // it is your choice to add value or ignore
        }

## Oprator 
### or/union oprator with narrowing
    type TID = number | string       // here ID may be number or string datatype
```
type TID = number | string

function printId(id: TID): void {
    // narrowing
    if(typeof id === 'string') console.log({'String-type':id.toUpperCase()})
    else console.log({'Interger-type':id})
}

printId('hello')
printId(6)
```



## Interfaces
    This is a shape of object, we can use to create an object based on that interface. It is same as class.
    Syntax:
        interface INameOfInterface {
            property_1 : number/string/boolean
            property_2 : number[]/string[]/Any custom type or interface[] or Array<number>
            function( arg1:type, arg2:type ): return_type
        }
```
interface ITransaction {
    payeeAccount: number,
    payerAccount: number
}

interface IBankAccount {
    accountNumber: number;
    accountHolder: string;
    balance: number;
    isActive: boolean;
    transcations: Array<ITransaction>
}

const sendTranscation: ITransaction = {
    payeeAccount: 123,
    payerAccount: 456
}
const recieveTranscation: ITransaction = {
    payeeAccount: 456,
    payerAccount: 123
}

const bankAccount : IBankAccount = {
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
interface IBook {
    name: string;
    price: number;
}

interface IEbook extends IBook {
    fileSize: number,
    format: string
}

interface IAudioBook extends IEbook {
    duration: number
}

const book1 : IAudioBook = {
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
interface ICar {
    name: string,
    model: string 
}

interface ICar {
    price: number
}

const myCar : ICar = {
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

## Generic function of inherits properties
    In below code, in generic function we don't use extends then typescript doesnot know about .age property, so we define that because whatever objec comes that have age property. 
```
interface HasAge {
    age: number
}

function getOldest<T extends HasAge>(people : T[]):T {
    return people.sort((a,b)=>b.age - a.age )[0]
}

const people : HasAge[] = [{age:15},{age:40},{age:25}] 

console.log(getOldest(people))

interface Player {
    name: string,
    age: number
}

const players : Player[] = [
    {name:'Ram',age:40},
    {name:'Lakhaman',age:26},
    {name:'Sita',age:32}
]

console.log(getOldest(players))
```

## Generic function called using type
    In below code, we can also call a function with interface/type alias
```
interface IUser {
    id: number,
    name: string,
    age: number
}

interface IPost {
    id: number,
    title: string,
    description: string
}

const fetchData = async <T>(path: string): Promise<T[]> => {
    const response = await fetch(`http://example.com${path}`)
    const data = await response.json()
    return data
}

(async ()=>{
    const users = await fetchData<IUser>('/users')
    users[0].name

    const posts = await fetchData<IPost>('/posts')
    posts[0].title
})()
```

## Structural typing or Duck typing
    TypeScript's type system is based on Structural typing. In a structurally typed system, a type is considered to be compatible with another type if the type has all the properties and methods of that type. But JavaScript is a duck-typed language. Since Typescript Compiles to JavaScript, you can take the benefit of duck typing also.

```
Example: 
interface Mobile {
    name: string,
    model:string
}

const buy = (item : Mobile): string => {
    return `I want buy this ${item.name} ${item.model}.`
}

const mobile = {
    name: 'Moto',
    model: 'G71 5G',
    os: 'Android'
}

console.log(buy(mobile))

NOTE: Here mobile object does not same with function argument interface but it has atleast similar properties so they have no error, it is called Structural typing or Duck typing
```
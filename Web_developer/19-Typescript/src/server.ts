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

// generic function of inherits properties
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

// generic function called using type
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

// Structural typing or Duck typing
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
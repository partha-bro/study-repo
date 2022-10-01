// Let & Const
const pi = 3.141

console.log(pi);

let x = 'My Ex'
x = 06
console.log(x);

// let x = 12

// Arrow Function
const add = (a,b) => a+b
console.log(add(2,4))

// spread op
const arr = [1,2,3,4,5,6]
const obj = {
    name: 'arjun',
    age: 28
}

const newObj = {...obj}
newObj.age = 30
console.log({newObj},{obj});

// Rest parameter
const sum = (...add) => {
    console.log(add);
}

sum(1,2,3,4,5,6)

// Class OOPs
class Person{
    constructor(name){
        this.name = name
    }
    setName(name){
        this.name = name
    }
    getName(){
        return this.name
    }
}

const person1 = new Person('Ram')
console.log(person1.getName());
console.log(person1.setName('Lakhman'));
console.log(person1.getName());

// Desucturing array & Object
const [a,b,c,d,e,f] = arr
console.log(a,b,c,d,e,f);
const {name,age} = obj
console.log(name,age);

// Object Literals
const getName = 'Arjun'
const getAge = 28
const info = {getName,getAge}
console.log(info);

// Higher Order Function map,filter,reduce
const city = ['Delhi','Noida','Bhubaneswar','Puri']
console.log(city.map(c=>c.toUpperCase()))
console.log(city.filter(c=>c==='Puri'))
console.log(city.reduce((acc,cur)=>acc+'<=>'+cur))

// map data type
const map = new Map()
map.set(6,[2,4])
map.set([1,2],[6,8])
console.log(map);
console.log(map.size);
map.delete(6)
console.log(map);
map.clear()
console.log(map);

// set data type
const set = new Set()
set.add(6)
set.add(7)
set.add(6)
set.add(8)
console.log(set);
console.log(set.size);
set.delete(6)
console.log(set);
set.clear()
console.log(set);

// Import & Export
const mul = require('./calc')
console.log(mul(10200,12));
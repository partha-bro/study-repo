console.log(`Welcome to javascript...`);

//! Primitive Data Types NNUBBSS 
//! let variable = 'value'
let a = 1
let b = null
let c = undefined
let d = true
let e = 'Arjun'

const pi = 3.141

console.log(a,typeof a)
console.log(b,typeof b)
console.log(c,typeof c)
console.log(d,typeof d)
console.log(e,typeof e)
console.log(pi, typeof pi)

//! Non-Primitive Datatype Object
let obj = {
    name: 'Arjun',
    age: 27
}

console.log(obj)

obj.name = 'Partha'
obj.age = 2023-1995

console.log(obj)

console.log("true"-"false");
//! NaN : Not a Number
console.log(true+true);

console.log(isNaN(12));
console.log(isNaN("Hello"));

/*  Expressions and operators
    - Assignment op     [ =, =+, =-, =*, =/ ]
    - Arithmetic op     [ +, -, *, /, %, ++, -- ]
    - Comparision op    [ !=, ==, !==, ===, <, <=, >, >= ]
    - Logical op        [ !, &&, || ]
    - String (concatenantion) op [ + ]
    - Conditional (ternary) op [ condition ? true statement : false statement ]
*/

/* Control Statement and loops
    - If..else
    - switch statement
    - while loop
    - do while loop
    - for loop
    - for in loop
    - for of loop
*/

//! - If..else
if(12%2 != 0){
    console.log('12 divisible by 2')
}else if(12%6 == 0){
    console.log('12 divisible by 6')
}else{
    console.log('12 is not divisible by 2')
}

//! - switch statement
switch ('SUB') {
    case "ADD":
            console.log(2+3)
        break;
    case 'SUB':
            console.log(2-3)
        break;
    default:
        console.log('Case not match')
        break;
}

//! - while loop
let age = 27
while (age<30) {
    console.log(age)
    age++
}

//! - do while loop
age = 27
do{
    console.log(age)
    age++
}while(age>30)

let arr = [ 'first','second','third','four','five','six' ]
//! for loop
for (let index = 0; index < arr.length; index++) {
    const element = arr[index];
    console.log(element);
}

//! for in loop
for (let key in arr){
    console.log(key);
    console.log(arr[key]);
}
//! for of loop
for (let element of arr){
    console.log(element);
}
//! forEach loop
arr.forEach(
    (val)=>{
        console.log(val)
    })

//! Note in condition False value : 0, "", undefined, null, NaN
if(0) console.log(true)
else console.log(false)

obj = {
    name: 'Arjun',
    work: 'MERN Developer',
    age: 28
}

//! for in loop use in object and array
for (const key in obj) {
    console.log(key);
        const element = obj[key]
        // const element = obj.key
        console.log(element);
}

//! Find out leap year
const checkLeapYear = (year) => {

    //three conditions to find out the leap year
    if ((0 == year % 4) && (0 != year % 100) || (0 == year % 400)) {
        console.log(`${year} is a leap year`)
    } else {
        console.log(`${year} is not a leap year`)
    }
}

checkLeapYear(2024)

//? Array in JS
/*
    length of array
    - array.length
    Finding an Element in an array
    - indexOf()
    - lastIndexOf()
    - includes()
    filter element in array
    - find()
    - findIndex()
    Higher Order Function
    - map()
    - filter()
    - reduce()
    Input element to an array
    - push()
    - unshift()
    Delete element from an array
    - pop()
    - shift()
    CURD element an array
    - splice()
    Extracting element from an array
    - slice()
    Other useful methods
    - concat()
    - sort()
    - reverse()
    Convert string to array
    - split()
    Convert array to string
    - join()
*/
arr = new Array()
arr = ['Ram','Lakhaman','Hanuman','Ravan']

//! arr length
console.log('Array Length: '+arr.length);

//! Array search 
// indexOf() :-> Forward search data and find out that index from first to last, 
// it will return index number, if not exists then print -1
console.log(arr.indexOf('Hanuman',0));
console.log(arr.indexOf('Sita',0));
// lastIndexOf() :-> Backward search data and find out that index from last to first, 
// it will return index number, if not exists then print -1
console.log(arr.lastIndexOf('Hanuman',3));
console.log(arr.lastIndexOf('Sita',3));
// includes() :-> it return true when element exists
console.log(arr.includes('Ravan'));
console.log(arr.includes('Sita'));

//! Array filter
arr = [200,300,350,400,450,500,550,600]
// find() :-> it similar to filter high order function 
// but it only returns one element value, if not filter any value then print undefinded
const findData = arr.find(e=>e>450)
console.log(findData);
// findIndex() :-> it similar to filter high order function 
// but it only returns index number, if not filter any value then print -1
const findIndexData = arr.findIndex(e=>e>450)
console.log(findIndexData);
// filter() :-> it similar to filter high order function 
// but it only returns one element value,  if not filter any value then print empty array []
const filterData = arr.filter(e=>e>450)
console.log(filterData);

//! Array Sort
// sort() :-> it sort the array elements in ascending order
//              it returns a sorted array
arr = ['Ram','Lakhaman','Hanuman','Ravan']
console.log(arr.sort())
arr = [10,45,35,25,10000]
// number convers to string so 10,10000,25,35,45
console.log(arr.sort())

//! reverse()
arr = ['Ram','Lakhaman','Hanuman','Ravan']
console.log(arr.reverse())
arr = [10,45,35,25,10000]
// number convers to string so 10,10000,25,35,45
console.log(arr.reverse())

//! arr1.concat(arr2)
console.log('concate: '+[1,2,3].concat([2,3,4,5]))

//! slice( startIndex, index-1)
console.log('slice: '+[1,2,3,4,5].slice(1,4))

//! Array push() or unshift()
// push() :-> it push elements in last index
// it will return the new length of an array
arr = [ 'first','second','third','four' ]
console.log(arr.push('five','six'));
console.log(arr);
// unshift() :-> it push elements in first index
// it will return the new length of an array
console.log(arr.unshift(-1,0));
console.log(arr);

//! Array pop() or shift()
// pop() :-> it remove element in last index
// it will return the delete element
console.log(arr.pop());
console.log(arr);
// shift() :-> it delete element in first index
// it will return the delete element
console.log(arr.shift());
console.log(arr);

//! Array Splice()
// splice() :-> Adds and removes elements from an array
// it returns the delete element in an array, if not delete any element then it returns empty array
arr = [ 'Jan', 'march', 'April', 'June', 'July']
console.log(arr);
// 1: Add Dec at the end of an array?
arr.splice(arr.length,0,"Dec")
console.log(arr);
// 2: update march to March (update)?
const marchDeleteIndex = arr.indexOf('march')
console.log(arr.splice(marchDeleteIndex,1,"March"))
console.log(arr);
// 3: Delete June from an array()?
const juneDeleteIndex = arr.lastIndexOf('June')
console.log(arr.splice(juneDeleteIndex,1))
console.log(arr);
// 4: What is the return value of splice method?
const delElement = arr.splice(2,2)
console.log({delElement});

//! Problem 1
// Find the square root of each element in an array?
arr = [25,36,49,64,81]
const squreRoot = arr.map(element=>Math.sqrt(element))
console.log({squreRoot});

//! Problem 2
// Multiply each element by 2 and return only those elements which are greater than 10?
arr = [2,3,4,6,8]
const mulGtr10 = arr.map(e=>e*2).filter(e=>e>10)
console.log({mulGtr10});

//! reduce()
arr = [2,3,4,6,8]
console.log('Reduce()',arr.reduce((elem,accumulator)=>elem+accumulator,0))

//! convert array to string and vice versal
// split()
let str = "Ram is a good king"
arr = str.split(' ')
console.log('split: '+arr[0]+':'+arr[arr.length-1])
// join()
arr = [ 'Jan', 'march', 'April', 'June', 'July']
str = arr.join(', ')
console.log('join: '+str)

//? String in JS
/*
    Escape Character
    - \", \\, \n, \t
    Length of String
    - string.length
    Finding a String in a string
    - indexOf()
    - lastIndexOf()
    - includes()
    Searching for a String in a String
    - search()
    Extracting String Parts
    - slice()
    - substring()
    - substr()
    Replacing String Content
    - replace()
    Extracting String Characters
    - charAt()
    - charCodeAt()
    - string[index]
    Other useful methods
    - concat()
    - trim()
    - toLowerCase()
    - toUpperCase()
*/
str = "Ram is a good king and Sita is a queen of Ayodhya."
console.log(str); 

//! Escape Character
str = "\"Ram is a good king\" \n \tand \n \"Sita is a queen of Ayodhya.\""
console.log(str);
console.log({stringLength:str.length});

//! Finding a String in a string
console.log('king starting index number: '+str.indexOf('king'))
console.log('queen starting index number: '+str.lastIndexOf('queen'))
console.log('queen present in string: '+str.includes('queen'))

//! Searching for a String in a String
console.log('Ayodhya search index number: '+str.search('Ayodhya'))

//! Extracting String Parts
// slice(start,end)
// substring(start,end)
// substr(start,no of char)
const kingIndex = str.indexOf('king')
console.log('slice: '+str.slice(kingIndex,kingIndex+4))
console.log('substring: '+str.substring(kingIndex,kingIndex+4))
console.log('substr: '+str.substr(kingIndex,4))

//! Replacing String Content
console.log('replace: '+str.replace('good','kind'))

//! Extracting String Characters
console.log('charAt: '+str.charAt(15))
console.log('charCodeAt: '+str.charCodeAt(15))
console.log('str[]: '+str[15])

//! Other useful methods
console.log('Lower Case: '+str.toLowerCase())
console.log('Upper Case: '+str.toUpperCase())
console.log('Concat: '+str.concat('...The End...'))
console.log('trim: '+str.trim())

//! Date and Time 
/*
    - new Date()
    - toString()
    - toLocaleString()
    - toLocaleDateString()
    - toLocaleTimeString()
    Date Methods
    - getFullYear()
    - getMonth()
    - getDay()
    Time Methods
    - getTime()
    - getHours()
    - getMinutes()
    - getSeconds()
*/
const date = new Date()

console.log('date to string: '+date.toString());
console.log('date to local string: '+date.toLocaleString());
console.log('date to local Date string: '+date.toLocaleDateString());
console.log('date to local Time string: '+date.toLocaleTimeString());

// Date Methods get for geting and set for set value
console.log('get Full Year: '+date.getFullYear());
console.log('get Month: '+date.getMonth());
console.log('get Day: '+date.getDay());

// Time Methods get for geting and set for set value
console.log('get Time: '+date.getTime());
console.log('get Hours: '+date.getHours());
console.log('get Minites: '+date.getMinutes());
console.log('get Seconds: '+date.getSeconds());

//! Math Object
/*  
    - Math.PI
    - Math.random
    - Math.pow
    - Math.sqrt
    - Math.round
    - Math.floor
    - Math.ceil
    - Math.trunc
    - Math.abs
    - Math.min
    - Math.max
*/
console.log('Pi: '+Math.PI);
console.log('Random: '+Math.random());
console.log('Power: '+Math.pow(4,2));
console.log('Squre Root: '+Math.sqrt(16));
console.log('Round: '+Math.round(2.3));
console.log('Round: '+Math.round(2.6));
console.log('Floor: '+Math.floor(2.6));
console.log('ceil: '+Math.ceil(2.6));
console.log('Trunc number: '+Math.trunc(Math.PI));    // it return only integer value
console.log('Absolute number: '+Math.abs(-6));
console.log('Minimum number: '+Math.min(12,65,87,-20,34,67));
console.log('Maximum number: '+Math.max(12,65,87,-20,34,67));

// Find out random number between 0 to 10
console.log('Random Number: '+Math.floor(Math.random()*10));
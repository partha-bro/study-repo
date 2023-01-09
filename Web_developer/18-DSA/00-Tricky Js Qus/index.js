console.log("JavaScript logical and tricky questions")

// NOTE: First write output in comment after that run Qukka file to see result
// Source: https://github.com/learning-zone/javascript-coding-practice

// Q1. Output of below function
{
    const fruit = () => {
        console.log(name)
        console.log(price)

        var name = 'apple'
        let price = 20
    }
    fruit()
}



// Q2. Useing var, what is the output
{
    for(var i=0;i<3;i++){
        setTimeout(()=>{
            console.log(i)
        },1)
    }
}

// Q3. Using let, what is the output
{
    for(let i=0;i<3;i++){
        setTimeout(()=>{
            console.log(i)
        },1)
    }
}

// Q4. what is the output
{
    console.log(true)
    console.log(typeof true)
    console.log(+true)
    console.log(typeof +true)
}

// Q5. what is the output
{
    console.log('Arjun')
    console.log(!'Arjun')
    console.log(!!'Arjun')
    console.log(typeof 'Arjun')
    console.log(typeof !'Arjun')
}

// Q6. what is the output
{
    let data = "size"
    const bird = {
        size: "small"
    }
    console.log(bird[data]);
    console.log(bird["size"]);
    console.log(bird.size);
    console.log(bird.data);
}

// Q7. what is the output
{
    let c = { name: "peter"}
    let d

    d = c
    c.name = "arjun"
    console.log(d.name);
    console.log(c.name);
}

// Q8. what is the output
{
    var ab
    var ab=10
    console.log(ab);
}

// Q9. what is the output
{
    let y
    let y=10
    console.log(y);
}

// Q10. what is the output
{
    let a = 3
    let b = new Number(3)

    console.log(a == b);
    console.log(a === b);
}

// Q11. what is the output
{
    let name
    nmae = {}
    console.log(name)
}

// Q12. what is the output
{
    function fruit(){
        console.log('Woof!')
    }
    fruit.name = 'apple'
    fruit()
    console.log(fruit.name)
}

// Q13. what is the output
{
    const sum = (a,b) => {
        return a+b
    }

    console.log(sum(1,"2"))
}

// Q14. what is the output
{
    let num = 0
    console.log(num++);
    console.log(++num);
    console.log(num);
}

// Q15. what is the output
{
    const getAge = (...args) => {
        console.log(typeof args);
    }

    getAge(21)
}

// Q16. what is the output
{
    const getAge = () => {
        'use strict'
        age = 21
        console.log(age)
    }
    getAge()
}

// Q17. what is the output
{
    const sum = eval('10*10+5')
    console.log(sum)
}

// Q18. How long is cool_secret accessible?
{
    sessionStorage.setItem('cool_secret',123)
}

// Q19. what is the output
{
    const obj = { 1:'a',2:'b',3:'c', z:2}

    console.log(obj.hasOwnProperty('1'))
    console.log(obj.hasOwnProperty(1))
    console.log(obj.hasOwnProperty('z'))
    console.log(obj.hasOwnProperty(z))
}

// Q20. what is the output
{
    const obj = { a:'one',b:'two',a:'repeat'}
    console.log(obj);
}

// Q21. what is the output
{
    for(i=0;i<5;i++){
        if(i === 3) continue
        console.log(i)
    }
}

// Q22. what is the output
{
    const foo = () => console.log('first');
    const bar = () => setTimeout( ()=> console.log('second'));
    const baz = () => console.log('third');

    bar()
    foo()
    baz()
}

// Q23. what is the output
{
    <div onclick="console.log('first div')">
        <div onclick="console.log('second div')">
            <button oclick="console.log('button')">
                Click!
            </button>
        </div>
    </div>
}

// Q24. what is the output
{
    const person = { name: 'Arjun' }
    
    function sayHi(age) {
        return `${this.name} is ${age}`
    }

    console.log(sayHi.call(person, 21))
    console.log(sayHi.bind(person, 21))
    console.log(sayHi.bind(person, 21)())
}

// Q25. what is the output
{
    function sayHi() {
        return (() => 0)()
    }

    console.log( typeof sayHi());
}

// Q26. what is the output
{
    function sayHi() {
        return (() => 0)
    }

    console.log( typeof sayHi());
}

// Q27. what is the output
{
    console.log(typeof 1);
    console.log(typeof typeof 1);
}

// Q28. what is the output
{
    const numbers = [1,2,3]
    numbers[6] = 11
    console.log(numbers);
}

// Q29. what is the output
{
    const numbers = [1,2,3]
    numbers[3] = numbers
    console.log(numbers);
}

// Q30. what is the output
{
    /*
    Everything in javascript is either a _________
    a) primitive or Object
    b) function or Object
    c) only Object
    d) number or Object
    */
}

// Q31. what is the output
{
    console.log(!!null);
    console.log(!!"");
    console.log(!!1);
}

// Q32. what is the output
{
    console.log(setTimeout(()=>console.log('first'),1000));
    console.log(setTimeout(()=>console.log('second'),500));
    console.log(setTimeout(()=>console.log('third'),1000));
}

// Q33. what is the output
{
    let str = "Arjun"
    let arr = [1,2,3,4]
    let obj = {name:'arjun'}
    console.log([...str])
    console.log([...arr])
    console.log({...obj})
}

// Q34. what is the output
{
    let data = 3 + 4 + '5'
    console.log(typeof data)
    console.log(typeof 3 + 4 + 6 + '5')
    console.log(typeof (3 + 4 + 6 + '5'))
}

// Q35. what is the output
{
    console.log(typeof [])
    console.log(typeof []==[])
}

// Q36. what is the output
{
    let data = [1,2,3].map(num=>{
        if(typeof num === 'number') return
        return num*2
    })
    console.log(data);
}

// Q37. what is the output
{
    function getName(member) {
        member.name = 'Arjun'
    }
    const person = {name:'Partha'}
    getName(person)
    console.log(person);
}

// Q38. what is the output
{
    function Car() {
        this.make = 'tata'
        return { make: 'Kia'}
    }
    const myCar = new Car()
    console.log(myCar.make);
}

// Q39. what is the output
{
    (() =>{
        let x = ( y = 100)
    })()

    // console.log(x);
    console.log(typeof x);
}

// Q40. what is the output
{
    (() =>{
        let x = y = 100
    })()

    console.log(y);
    console.log(typeof y);
}

// Q41. what is the output
{
    let xy = 100;
    (()=>{
        var xy = 20
    })()
    console.log(xy)
}

// Q42. what is the output
{
    console.log(!true - true);
    console.log(true - !true);
}

// Q43. what is the output
{
    console.log(true + +"10");
}

// Q44. what is the output
{
    let str = "Hello"
    let arr = [1,2,3,4,5,6]
    let obj = { name: "arjun"}
    console.log(...str);
    console.log(...arr);
    console.log([...arr]);
    console.log({...obj});
    console.log(...obj);
}

// Q45. what is the output
{
    console.log(typeof NaN);
}

// Q46. what is the output
{
    const set = new Set([1,2,1,2,3,4])
    console.log(set);
}

// Q47. what is the output
{
    let obj = { name: 'Arjun', age: 28}
    console.log(delete obj.name);
    console.log(obj);
    console.log(delete obj);

    let arr = [ 'name','Arjun', 'age', 28 ]
    console.log(arr.length);
    console.log(delete arr[1]);
    console.log(arr);
    console.log(arr.length);
    console.log(delete arr);
}

// Q48. Merge 2 object
{
    let data = { name: 'Arjun', age: 28, skill: 'MERN'}
    let info = { city: 'Puri', mail: 'sarathi.partha95@gmail.com'}
    // code how to merge 2 object
   
}

// Q49. what is the output
{
    let data = { name: 'Arjun', age: 28, skill: 'MERN'}
    let info = { city: 'Puri', mail: 'sarathi.partha95@gmail.com'}
    data = {data, ...info}
   console.log(data);
}

// Q50. what is the output
{
    const result = false || {} || 20 || null
    console.log(result);
}

// Q51. what is the output
{
    const result =  false || '' || null
    console.log(result);
}

// Q52. what is the output
{
    console.log(Promise.resolve(5));
}

// Q53. what is the output
{
    /*
    What JSON.parse() method will do
        A: Parses JSON to a JS Value
        B: Parses a JS object to JSON
        C: Parses any JS value to JSON
        D: Parses JSON to a JS object only
    */
}

// Q54. what is the output
{
    let name = 'Sidhu'
    let age = 25
    function getName() {
        console.log(age);
        console.log(name)
        let name = 'anil'
    }
    getName()
}

// Q55. what is the output
{
    console.log(`${(x => x)('I Love')} to program`);
}

// Q56. what is the output
{
    const name = 'Code step by step'
    console.log(!typeof name === 'object');
    console.log(!typeof name === 'string');
}

// Q57. what is the output
{
    const name = "subscribe"
    const age = 21
    console.log(isNaN(name));
    console.log(isNaN(age));
}

// Q58. what is the output
{
    let person = { name: 'Arjun' }
    Object.seal(person)
    person.name = 'Partha'
    person.age = 28
    console.log(person);
}

Q59. what is the different between map and forEach function
{
    
}

// Q60. what is the output
{
    let result = 3 ** 3
    let result2 = Math.pow(3,3)
    console.log(result);
    console.log(result2);
}

// Q61. what is the output
{
        console.log(0.1+0.2 == 0.3)
        console.log(0.1+0.2)
    console.log(+'')
    console.log(+false)
    console.log(+true)
    console.log(+ '10')
    console.log(+ {})
    console.log(+ [])
    console.log(+ undefined)
    console.log(+ null)
    console.log(-2)
    console.log(-(-2))
    console.log(1 + + "1" === 2)
    console.log(+"1" + + "1" === 2)
    console.log("1" + "1" ===  "11")
    let b = 2
    console.log(--b === 1)
    console.log(--b)
}

// Q62. what is the output
{
    const firstPromise = new Promise(
        (resolve,reject) => {
            setTimeout(resolve, 500, 'one')
        }
    )

    const secondPromise = new Promise(
        (resolve,reject) => {
            setTimeout(resolve, 100, 'two')
        }
    )

    Promise.race([firstPromise,secondPromise]).then(resolve => console.log(resolve))
}

// Q63. what is the output
{
    let person = { name:'Arjun' }
    const members = [person]
    person = null
    console.log(members);
}

// Q64. what is the output
{
    let g = 0;
    g = 1 && g++
    console.log(g);
}

// Q65. waht is the output
{
    var a = 1.2;
    console.log(typeof a); 
}

// Q66. What is the output
{
    const name = "Swarna";
    age = 21;

    console.log(delete name);
    console.log(delete age);
}

// Q67. What is the output
{
    const name = "Akhil Sunder";
    console.log(name);
    console.log(name.padStart(13));
    console.log(name.padStart(15,'-'));
    console.log(name.padStart(2));
    console.log(name.padEnd(15,'-'));
}

// Q68. What is the output
{
    console.log(String.raw`Hello\nworld`);
    console.log(`Hello\nworld`);
}

// Q69. What is the output
{
    console.log(isNaN(true));
    console.log(isNaN(1));
    console.log(isNaN(''));
    console.log(isNaN('string'));
    console.log(isNaN(null));
}

// Q70. What is the output
{
    console.log(false == "0"); 
    console.log(false === "0");
}

// Q71. What is the output
{
    var x = 10;
    if (x) {
    let x = 4;
        console.log(x)
    }
    console.log(x); 
}

// Q72. What is the output
{
    var x = 10;
    const fn = (x) => {
    let x = 4;
        console.log(x)
    }
    console.log(fn(x)); 
}

// Q73. Which of these values are falsy?
{
    0;
    new Number(0);
    ("");
    (" ");
    new Boolean(false);
    undefined;
    NaN;
}

// Q74. What is the output
{
    const info = {
        [Symbol("a")]: "b",
      };
      
      console.log(info);
      console.log(Object.keys(info));
}

// Q75. What is the output
{
    const output = `${[] && "Im"}possible!
You should${"" && `n't`} see a therapist after so much JavaScript lol`;
}

// Q76. What is the output
{
    if(2 == true) 

    if(2 == false)
}

// Q77. What is the output
{
    const length = 4;
    const numbers = [];

    for (var i = 0; i < length; i++);
    {
    numbers.push(i + 1);
    }

    console.log(numbers);
}

// Q78. What is the output
{
    const num = parseInt("7*6", 10);
    console.log(num);
}

// Q79. What is the output
{
    console.log(Number(2) === Number(2));
    console.log(Boolean(false) === Boolean(false));
    console.log(Symbol("foo") === Symbol("foo"));
}

// Q80. What is the output
{

}

// Q81. What is the output
{

}
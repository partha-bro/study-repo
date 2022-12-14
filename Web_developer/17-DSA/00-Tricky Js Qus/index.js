console.log("JavaScript logical and tricky questions")

// NOTE: First write output in comment after that run Qukka file to see result
// Source: https://www.youtube.com/watch?v=riloPTtAuAM

// Q1. Output of below function
{
    const fruit = () => {
        console.log(name)
        // console.log(price)

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
    // let y=10
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
    // getAge()
}

// Q17. what is the output
{
    const sum = eval('10*10+5')
    console.log(sum)
}

// Q18. How long is cool_secret accessible?
{
    // sessionStorage.setItem('cool_secret',123)
}

// Q19. what is the output
{
    const obj = { 1:'a',2:'b',3:'c', z:2}

    console.log(obj.hasOwnProperty('1'))
    console.log(obj.hasOwnProperty(1))
    console.log(obj.hasOwnProperty('z'))
    // console.log(obj.hasOwnProperty(z))
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
    // <div onclick="console.log('first div')">
    //     <div onclick="console.log('second div')">
    //         <button oclick="console.log('button')">
    //             Click!
    //         </button>
    //     </div>
    // </div>
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

// please 84 question time: 1:38:56
//! OOPs in JS

//? 3 important words to understand
/*
    1. Object
    2. Class
    3. Inheritance
    4. Prototype
*/

//! Prototype & Inheritance [Old in ES5]
// Prototypes are the mechanism by which JavaScript objects inherit features from one another.
class Car {
    constructor(name,model,color){
        this.name = name
        this.model = model
        this.color = color
    }
}


Car.prototype.getStatus = function() {
    return  this.name
}

const audiCar = new Car('Audi','E01','Black')
console.log(audiCar)

//! class and object create 
class Employee {
    constructor(name,age){
        this.name = name
        this.age = age
    }
    getPosition(){
        return {position:'Employee'}
    }
}

const emp1 = new Employee('Partha',27)
console.log(emp1)
console.log(emp1.getPosition())

//! Static Method
// Static class methods are defined on the class itself.
// You cannot call a static method on an object, only on an object class.

class Bike {
    static noType = 2
    constructor(name) {
      this.name = name;
    }
    static hello() {
      return "Hello!!";
    }
  }
  
const myBike = new Bike("KTM 390");
// console.log(myBike.hello())  // its error, because object can not call static method
console.log(Bike.hello())
console.log(Bike.noType)

//! 4 concept of oops
/*
    1. Encapsulation means "both property and methods in single unit like Class"
    2. Abstaction   means  ""
    3. Inheritance  means  "inherits property or method child to parent"
    4. Polymerphisim means "many forms"
        - method overloading
        - method overridding
*/

//! Inheritance
//* super()
// The super() method refers to the parent class.
// By calling the super() method in the constructor method, we call the parent's constructor method and gets access to the parent's properties and methods.

//* this.anyParentClassMethodOrproperty
// this keyword is meant for onw class
//* super.anyParentClassMethodOrproperty
// super keyword is meant for parent class

class Manager extends Employee{
    constructor(name,age){
        super(name,age)         
        this.work = 'Manager'
    }

    getMessage(){
        return super.getPosition()
    }
}


const mgr1 = new Manager('Partha',30)
console.log(mgr1);
console.log(mgr1.getMessage());


//! private and public property
// we can use # for private property or method and 
// private property/method can not access outside the class or object
// private property must be defined, before assign any value
class Programmer extends Employee{
    #location = ''
    constructor(name,age,location){
        super(name,age)         
        this.work = 'MERN Stack Developer'      // public property
        this.#location = location               // private property
    }
    #getLocation(){
        return this.#location
    }
    getWork(){
        return `=> ${this.name} is ${this.work} at ${this.#getLocation()}.`
    }
}
const pro1 = new Programmer('Arjun',28,'Noida')
console.log(pro1);
console.log(pro1.getWork());

//! Mixins in JavaScript
/*
    The definition of mixins can be stated as mixins is a class 
    that contains methods that can be used by other classes without 
    inheriting from that class. The methods in mixin provide certain 
    behavior which is not used alone but can be used to add these behaviors 
    to other classes.
*/

let DoodleSpeak = {
    doodleHello() {
       return 'Hello! ' + this.name;
    },
    doodleBye() {
       return 'Good Bye! ' + this.name;
    },
 };
 class DoodleHome {
    constructor(name) {
       this.name = name;
    }
 }

 // copy the methods from 
 Object.assign(DoodleHome.prototype, DoodleSpeak);
 
 doodly = new DoodleHome("Doodly");
 mixi = new DoodleHome("Mixi")

 console.log(doodly.doodleHello())
 console.log(mixi.doodleHello())

 console.log(doodly.doodleBye())
 console.log(mixi.doodleBye())
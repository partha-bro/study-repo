# Javascript

	is a scripting language that enables you to create dynamically updating content, control multimedia, animate images, and pretty much everything else. (Okay, not everything, but it is amazing what you can achieve with a few lines of JavaScript code.)

	JS describes how HTML elements should be behave.

	1. 3 Types of method to apply in HTML pages 
			a. Inline javascript
				Use javascript within the tags
				Ex: <button onclick="alert('message')">Click me</button>
			b. Internal javascript
				Use javascript code within head tag using script tag
			c. External javascript
				Allow external javascript code in HTML page using script tag in head tag/last of body tag
				<script type="text/javascript" src="js/script.js"></script>

	Note: Always use internal or external js code last of html body.

	2. Debug and error find out using browser console
		console.log('message'): we can send some message to console using console.log('message');
		debugger: 				we can debug any function or code in chrome developer tool console tab
			type 	debugger
					shift+enter	// goto the next line
					functionName(parm,parm);
					hit enter

	3. comments
		There are two types of comment denominator
		1. Single Line Comment 	//
		2. Multi Line Comment	/* */

	3.1 PopUp 
			alert()
			prompt()

	3.2 Data Types
			number:
				123
			string:
				"partha"
			boolean:
				true or false
	
	3.3 typeof()
			Method use to find out the datatype of variables.

			typeof(123);		=> 'number'
			typeof("partha")	=> 'string'
			typeof(true)		=> 'bolean'

	3.4 variable let/var/const

		LET
			Let statement is block-scoped and not a Global scope local variable used for initializing a statement. This statement can be used in function as it is function-scoped and one of the main character of let statement is that it can be reassigned.
			let name = "Sankalp";
			name = "Sankee";
			console.log(name); // will print: Sankee
		
		VAR
			Var statement is also used for variable declaration and it is Global scoped variable. Variable declared with var is defined throughout the program.Var is defined throughout the function but not if its declared in a block as it is not block-scoped.
			if (true) {
			var firstName = 'Sankalp'
			let age = 18
			}
			console.log(firstName) // Will print: Sankalp
			console.log(age) // Will print: ReferenceError
			Var statement can be reassigned.
			var name = 'Sankalp'
			name = 'sankee'
			console.log(name) // will print: sankee

		CONST
			When we declare a variable with let, we can reassign its value later on. Thats great but what if we dont want to reassign its value, for those, we have const. Const is function-scoped and block-scoped and it is not defined throughout the program as it is not global-scoped. If you try to reassign const variable it will throw a type error.
			const name = 'Sankalp';
			name = 'Sankee'
			console.log(name) // will print: TypeError
			const variables in objects and arrays.
			You cannot overwrite an object but yes you can change its properties.
			const person = {
			name: "Sankalp",
			age: 18,
			};

			person = {
			name: "Sankee", //  this will throw TypeError
			};
			reassigning a value of keys is possible as mentioned
			const person = {
			name: "Sankalp",
			age: 18,
			};

			person.name = "Sankee";
			console.log(person.name); // will print: Sankee
			In arrays, you cannot assign an array to a const variable.
			const list = [];

			list = ["abc"]; // will throw TypeError
			But you can push items to the array.
			const list = [];

			list.push("ABC");
			console.log(list); // will print: ['ABC]

	4. Concatenation string
		By using "+" symbol to combine two or more string in one.

	5. Length of char
			variable or datatype use length property to find length number.

			var name = 'js';
			alert(name.length);  // 2 result

			NOTE: Make sure length is lowercase. Otherwise code will not work.

	5.1 String split

		it split the string into array

		Ex:-
			let words = 'hello'

			words.split("") 	=> ["h","e","l","l","o"]
			words.split("l")	=> ["he","","o"]
			words.split("o")	=> ["hell",""]

		NOTE: split() is directy propersonal/reverse to join(). 

		Q. How to find out how many times a char is present in that string?
		A. console.log( str.split("l").length - 1 )
			Here l is present two times.

	5.2 String Replace
		It replace the string.

		var str = "Hello"
		str.replace("H","B")	// returns Bello

	6. Type Casting

		parseInt(number) 	=> it converts string to number
		number.toString()	=> it converts number to string
		
	7. upper case and lower case change

		value.toUpperCase();
		value.toLowerCase();

	8. Arithmatic oprator
			+
			-
			*
			/
			%
			++
			--
			+=
			-+
			*=
			/=

	9. Functions
			function functionName ( argumenats,... ){
				//..code
				return()
			}

	
	9.1 Higher Order functions
		Higher order functions are functions that can take other functions as inputs.

		syntax: 
			function functionName( parm1, parm2, ..., etc, anotherFunction_without_parathesis){
				//code
			}
		
		example:
			function add(num1, num2) {
				return "Add result: " + (num1+num2);
			}

			function multiply(num1, num2) {
				return "multiply result: " + (num1*num2);
			}

			function calculator(num1, num2, oprator) {
				return oprator(num1,num2);
			}

			calculator(3,4,add);
			calculator(3,4,multiply);
			
	10. Math functions

			Math.abs(value)		: it return the absolute integer number
				Math.abs(-2)	=> 2
			Math.floor(value)	: it round the number to down integer number
				Math.floor(1.6) => 1 will be result
			Math.ceil(value)	: it round the number to up integer number
				Math.ceil(1.6)  => 2 will be result
			Math.round(value)	: it round the number to nearest integer number
				Math.round(1.6) => 2 will be result
				Math.round(1.4) => 1 will be result
			Math.pow(base,exponential)	: to the power of number
				Math.pow(2,2) : 2 to the power 2 is 4 will be result
			Math.random()		: it return a random number between 0 to 1	

			Q. How to find random number in 10?
			A. Math.floor((Math.random()*10))

	11. Arrays
		An array store same or different types of datatype values.

		Declare an array:
			var array_name = new Array();
			var array_name = ["value_1","value_2"];

		Assign the array:
			array_name[0] = value_1;
			array_name[1] = value_2;
	 
	 	Length of an array using length property:
		 	array_name.length;


	Methods in Array.
		0. indexOf() 
			It method use to find index of items in array
			ex:- array_name.indexOf('item1') 	// returns a index value , but if item is not present then it return -1
			
		1. includes() method use to know about value is present in array or not. it is only return boolean value
			array_name.includes('value');	// true or false

		2. push()
		Add a new value to array in end:
			array_name.push('value_3');		// return a index number of insert value

		3. pop()
		delete last value to array in end:
			array_name.pop();				// return a item of deleted value

		4. splice('start_index','no_of_items_to_delete','insert item1','insert item2','insert item3','insert item4')
		Delete/add in any index an item from an array:
			empty the entire array: array_name.splice(0); 		// return an array of deleted values

			array_name.splice(start_index_position,no_of_values,content);
			ex:- array_name.splice(1,2);	delete 2 data and starting from index 1
			ex:- array_name.splice(1,0,"value_4");	no delete data and adding new value in index 1
		
		5. slice('start index','last index + 1' )
			It returns a sub array from main array
			ex:- array_name.slice(1,5)  // return an array of index 1 to 4

				example: "Arjun".slice(2,5);	// 'jun' will be result
				"Arjun".slice(2,4);		// 'ju' will be result
				"Arjun".slice(2);		// 'jun' will be result

		6. reverse()
			It reverse the original array.
			array_name.reverse()	// returns an reverse array

		7. join()
			It join the items using separator notation
			array_name.join(',') 	// returns all items concate in comma separator as a string

		8. split()
			it split the string into array
			"a,b,c,d".split(",")	// ["a","b","c","d"]

		9. concate()
			It concate or join two array in one array.
			array_1.concate(array_2)	// returns an single array of both array items

		10. sort()
			It sort an array
			array_name.sort()
	
	12. If Statement
			if( condition ){
				statements;
			}else{
				statements;
			}
		
		11.1 Comparators and Equality
				===
				!==
				>
				<
				>=
				<=
				==

		11.2 Combining Comparators
				&& 	AND		true AND true  	// true
				||	OR		true OR false  	// true
				! 	NOT		!true			// false
		
### Leap Year: Exactly divisible by 4 except for century years.
					formula: Year is evenly divisible by 4
							 except that year is evenly divisible by 100
							 unless this year is also evenly divisible by 400
							
			code: var year = prompt('Enter your year:');

				if ((year%4 == 0  && year%100 != 0)  ||  year%400 == 0 ){
					alert(year + ' is a leap year');
				}else{
					alert(year + ' is not a leap year');
				}

	13. Random numbers
			Math.random() 				=> it function use to random number between 0 to 1 Eg. 0.2547895583
			Math.random() * 10 			=> it multify the number for get number between 0.000 to 9.999 not include 10.
			(Math.random() * 10) + 1	=> it means random between 1 to your multiple number
			Math.floor((Math.random() * 10) + 1);	=> Remove the fraction number of random number

	14. Challenge: How many fingers am i holding up?

	15. Loops
		for( intialize, condition, increment/decrement ){
			// statement;
		}

		arrayVars.forEach( (arrayVar)=>{
			arrayVar.key_1;
			arrayVar.key_2;
		});
	
		Initialize
		While( condition ){
			statement;
			increment;
		}

		Initialize
		do{
			statement;
			increment;
		}While( condition )

		
	15.1 Switch statement

		switch (key) {
            case value:
                
                break;
        
            default:
                break;
        }

	16. Deep Copy of object.
		We can not copy object properties to another variable in javascript. it cannot happen.

		So we convert it object to string and string to object

		JSON.stringify(object)		==> this is convert object to string type object

		JSON.parse(string)			==> this is convert string type object to actual object

		Source: https://www.youtube.com/watch?v=AS0CgLWNGAQ&list=PL2PkZdv6p7Zm98C3RdyXZF1O83tjCB-sC&index=46

	17. Promise

		Promises are used to handle asynchronous operations in JavaScript. They are easy to manage when dealing with multiple asynchronous operations where callbacks can create callback hell leading to unmanageable code.

		A Promise has four states: 
			fulfilled: Action related to the promise succeeded
			rejected: Action related to the promise failed
			pending: Promise is still pending i.e. not fulfilled or rejected yet
			settled: Promise has fulfilled or rejected

		Syntax:
			var promise = new Promise(function(resolve, reject){
				//do something
				resolve(data) 

				reject(err)
			});

			promise.then( (data)=>{
				// do code
			}).catch ( (err)=>{
				// do code
			})

		Example:
			var promise = new Promise(function(resolve, reject) {
			const x = "geeksforgeeks";
			const y = "geeksforgeeks"
			if(x === y) {
				resolve();
			} else {
				reject();
			}
			});
			
			promise.
				then( ()=> {
					console.log('Success, You are a GEEK');
				}).
				catch( ()=> {
					console.log('Some error has occurred');
				}).finally( ()=>{
					console.log('Complete')
				})

	More than one promise handle
	Promise.all()
		Ex: const p1 = Promise.all([1 promise, 2 promise,...]).then( (data)=>console.log(data)).catch( (err)=>console.log(err))
	Promise.any()
		Ex: const p1 = Promise.any([1 promise, 2 promise,...]).then( (data)=>console.log(data)).catch( (err)=>console.log(err))
	Promise.resolve()
		Ex: const p4 = Promise.resolve('Success')
			p4.then( (data)=>console.log(data)).catch( (err)=>console.log(err))
	Promise.reject()
		Ex: const p5 = Promise.reject('Error Occur')
			p5.then( (data)=>console.log(data)).catch( (err)=>console.log(err))

	18. Async/Await

		An async function is a function declared with the async keyword, and the await keyword is permitted within it. The async and await keywords enable asynchronous, promise-based behavior to be written in a cleaner style, avoiding the need to explicitly configure promise chains.
	Example:
	const fun = async ()=> {
		console.log('calling...')

		try{
			const response = await fetch('https://jsonplaceholder.typicode.com/photos')
			const data = await response.json()
			console.log(data)
		} catch (err){
			console.log('error',err)
		}
		
	}

	fun()

	19. Fetch
		The Fetch API provides an interface for fetching resources (including across the network). It will seem familiar to anyone who has used XMLHttpRequest, but the new API provides a more powerful and flexible feature set.

		The fetch() method takes one mandatory argument, the path to the resource you want to fetch. It returns a Promise that resolves to the Response to that request — as soon as the server responds with headers — even if the server response is an HTTP error status.

	Syntax:	
		fetch( URL, optionsObject ).then ( (HTTPResponse)=>{}).catch( (ErrorResponse)=>{})

	Ex:
		fetch('https://jsonplaceholder.typicode.com/photos')
		.then( response=>response.json())
		.then( data=>console.log(data))

	20. axios npm package

		Promise based HTTP client for the browser and node.js

		- Install
			$ npm install axios

		- Performing a GET request
			const axios = require('axios').default;

			// Make a request for a user with a given ID
			axios.get('/user?ID=12345')
			.then(function (response) {
				// handle success
				console.log(response);
			})
			.catch(function (error) {
				// handle error
				console.log(error);
			})
			.then(function () {
				// always executed
			});

		- use async/await?
			async function getUser() {
				try {
					const response = await axios.get('/user?ID=12345');
					console.log(response);
				} catch (error) {
					console.error(error);
				}
			}
		
		- Performing a POST request

			axios.post('/user', {
				firstName: 'Fred',
				lastName: 'Flintstone'
			})
			.then(function (response) {
				console.log(response);
			})
			.catch(function (error) {
				console.log(error);
			});

		Example:
			axios.get('https://jsonplaceholder.typicode.com/todos/1')
			.then(response=>console.log(response.data))

		NOTE: In fetch we can retrive data from promise using json() method
				In axios, we can retrive data from promise using data property

	21. Local Storage

		the user wants to save some data in local storage.

		Syntax:
			localStorage.setItem('key','value')
			localStorage.getItem('key')
			localStorage.removeItem('key')
			localStorage.clear()

	22. Session Storage

		the user wants to save some data in Session storage.

		Syntax:
			sessionStorage.setItem('key','value')
			sessionStorage.getItem('key')
			sessionStorage.removeItem('key')
			sessionStorage.clear()

	NOTE: localStorage vs sessionStorage

	23. localForage

		localForage is a fast and simple storage library for JavaScript. localForage improves the offline experience of your web app by using asynchronous storage (IndexedDB or WebSQL) with a simple, localStorage-like API.

		- Install
			npm install localForage

		- Uses
			localforage.setItem('key', 'value', function (err) {
				// if err is non-null, we got an error
				localforage.getItem('key', function (err, value) {
					// if err is non-null, we got an error. otherwise, value is the value
				});
			});

	24. 

## Fibonacci series: // 0,1,1,2,3,5,8,13,21,...
		var fibboNumber = [];

		function fibonacciSeries( num ){

			
			if(num == 1){
				fibboNumber.push(0);
			}else if(num == 2){
				fibboNumber.push(0,1);
			}else{
				fibboNumber = [0,1];

				for (let index = 2; index <= num; index++) {
				
					fibboNumber.push(fibboNumber[fibboNumber.length-2] + fibboNumber[fibboNumber.length-1] );
				}
			}
			return fibboNumber;
		}

		console.log(fibonacciSeries(10));

## The Document Object Model (DOM)

	1. Accessing Elements
		There are basically 3 main types of element to accessing element

		1. document.getElementById('')
		2. document.getElementsByClass('')
		3. document.getElementsByTagName('')

		4. document.querySelector('')
			in this method always select one 1st tag, if multiple selector/elements are available.
			example: document.querySelector('tagname')
					document.querySelector('tagname#id_name')
					document.querySelector('#id_name')
					document.querySelector('#class_name')
					document.querySelector('#id_name .multiple_selector_name')
						etc.

		5. document.querySelectorAll('')[index_number]

		The difference between Id and Class/TagName are 
		Id select only one Element to manupulate.
		Class/TagName select more than one Elements to manupulate. so we can access in array format.
		like: document.getElementsByTagName("p")[2].style.color="red";

		NOTE: document.getElementsByTagName("p")[2].style.color="red"; //will not work

	2. Responding to a click
		onclick property/object

	3. Manupulating Style of css
		syntax:
				document.querySelector('element_sector').style.propertyWithCamelStyle = 'value is string';

		style.backgroundColor = "value" as a string		
		style.color = "value" as a string
		style.fontSize = "value" as a string
		style.display = "none/block/inline"
		etc

	3.1 How to add or remove class in element using js?

		Add a new class: class name is from css style or bootstrap
			document.querySelector('selector_item').classList.add('class_name');
		Remove a class:
			document.querySelector('selector_item').classList.add('class_name');
		Toggle classes:
			document.querySelector('selector_item').classList.toggle('class_name');

	3.2 How to we change text or content inside html element?
			There are three ways to change inside html element:
				textContents	: it is all text contained by an element and all its children that are for formatting purposes only.
				innerText		: it returns all text contained by an element and all its child elements.
				innerHtml		: it returns all text, including html tags, that is contained by an element.

		Example:
				<p class="main">Hello, <b>world</b></p>

				<script>
					document.querySelector('.main').innerHTML    //'Hello, <b>world</b>'
					document.querySelector('.main').innerText    //'Hello, world'
					document.querySelector('.main').textContent  //'Hello, world'
				</script>
	
	3.3 How to change or manupulate attribute of html element?

			Using below property:
				document.querySelector('element_selector').attributes;								=>	result will be in array of all attributes define in that element
				document.querySelector('element_selector').getAttribute('attribute_name');			=>	it gives the value of that attribute
				document.querySelector('element_selector').setAttribute('attribute_name', 'value');			=>	it set the value of that attribute of element

		Example:
			document.querySelector('p').attributes;						// NamedNodeMap {0: class, class: class, length: 1} array of attributes
			document.querySelector('p').classList;						// DOMTokenList ['main', value: 'main'] array of class
			document.querySelector('p').setAttribute('id','green');		// set id='green' in that p tag
			document.querySelector('p').getAttribute('class');			// 'main'  class_name
	
## Advanced DOM
	
	1. Event Listerner
		use addEventListner() method to use events in element.

		document.querySelector('selector').addEventListner('event_name_as_string',function_name_without_parathesis);

		example:
			document.querySelector('button').addEventListener( 'click', handleClick );

			// Error Occur if function name with parathesis()
				document.querySelector('button').addEventListener( 'click', handleClick() );

		example with anonymos function:
				document.querySelector('button').addEventListener('click',function (){
					alert('i got clicked.');
				});

	2. How to play audio file in javascript?

		create an object of Audio Constructor function, that can have audio file location and call play method to play it.

		syntax: 
			var object = new Audio('location of audio file');
			object.play();

		example:
			var audio = new Audio('sounds/tom-1.mp3');
        	audio.play();

	3. this keyword

		In JavaScript, the this keyword refers to an object.
		Which object depends on how this is being invoked (used or called).

		How to multiple button have same class and how to use it in perticular button of element is seleceted.

		document.querySelectorAll('button').addEventListener('click',function(){
			document.querySelector(this).style.color = 'red';
		});

	4. Objects

		JavaScript variables can also contain many values.
		Objects are variables too. But objects can contain many values.
		Object values are written as name : value pairs (name and value separated by a colon).

		example:
			let person = {
				firstName:"John", 
				lastName:"Doe", 
				age:50, 
				eyeColor:"blue"
			};

			console.log(person.firstName);

	5. Constructor Function

		This function is constructor function, it means it automatically call when an object is declare.
		this function name is always capitalize, not camel/lower case/upper case

		Example:
			// constructor function
			function Person ( Name, Age) {
				this.name = Name,
				this.age = age
			}

			// create an object
			const person1 = new Person('John',23); 
			const person2 = new Person('Partha',27); 

	5.1 Adding Properties And Methods in an Object

		You can add properties or methods in an object like this:

		// constructor function
		function Person () {
			this.name = 'John',
			this.age = 23
		}

		// creating objects
		let person1 = new Person();
		let person2 = new Person();

		// adding property to person1 object
		person1.gender = 'male';

		// adding method to person1 object
		person1.greet = function () {
			console.log('hello');
		}

		person1.greet();   // hello

		// Error code
		// person2 doesn't have greet() method
		person2.greet();

	5.2 Create Objects: Constructor Function Vs Object Literal

			Object Literal is generally used to create a single object. The constructor function is useful if you want to create multiple objects. 

			For example,
			// using object literal
			let person = {
				name: 'Sam'
			}
			// using constructor function
			function Person () {
				this.name = 'Sam'
			}

			let person1 = new Person();
			let person2 = new Person();

	6. JavaScript keyboard events

		There are three different keyboard events in JavaScript:

		keydown		: Keydown happens when the key is pressed down, and auto repeats if the key is pressed down for long.
		keypress	: This event is fired when an alphabetic, numeric, or punctuation key is pressed down.
		keyup		: Keyup happens when the key is released.

		example: 
			document.addEventListener('keypress', function(event){
				//code
				console.log(event);
				console.log(event.key);
			});

			The above syntax says: keypress event is on entrire document with anonymous function with event object. However we can know about which key is press then simple use event.key property.

	7. Timeout 

		To use some time to execute specific code then we can use
			setTimeout( function_name/anonymous function, milisecond);

		example: 
			setTimeout(function (){
        		document.querySelector('.'+buttonClicked).classList.remove('pressed');
    		}, 500);

		Notes
			The setTimeout() is executed only once.

			If you need repeated executions, use setInterval() instead.

				setInterval(function () {
					element.innerHTML += "Hello"
					}, 1000);

			Use the clearTimeout( 'arrgument is return of setTimeout()/setInterval() id') method to prevent the function from starting.

			To clear a timeout, use the id returned from setTimeout():

			let myTimeoutId = setTimeout(function, milliseconds);
			// Then you can to stop the execution by calling clearTimeout():

			clearTimeout(myTimeoutId);

### Challenge: Test your Reaction! Click on the boxes and circle as quickly as you can!	

## ECMAScript [ ES6 ]

	ECMAScript is a JavaScript standard meant to ensure the interoperability of web pages across different web browsers.
	It is standardized by Ecma International according to the document ECMA-262. 
	ECMAScript is commonly used for client-side scripting on the World Wide Web, and it is increasingly being used for writing server applications and services using Node.js.

	1. What's the difference between JavaScript and ECMAScript?

		“ECMAScript is a standard.”

		“JavaScript is a standard.”

		“ECMAScript is a specification.”

		“JavaScript is an implementation of the ECMAScript standard.”

		“ECMAScript is standardized JavaScript.”

		“ECMAScript is a language.”

		“JavaScript is a dialect of ECMAScript.”

		“ECMAScript is JavaScript.”
	
	2. let and const

		LET
			Let statement is block-scoped and not a Global scope local variable used for initializing a statement. This statement can be used in function as it is function-scoped and one of the main character of let statement is that it can be reassigned.
			let name = "Sankalp";
			name = "Sankee";
			console.log(name); // will print: Sankee
		
		CONST
			When we declare a variable with let, we can reassign its value later on. Thats great but what if we dont want to reassign its value, for those, we have const. Const is function-scoped and block-scoped and it is not defined throughout the program as it is not global-scoped. If you try to reassign const variable it will throw a type error.
			const pi = 3.141;

	2.5. Javascript ES6 - Import, Export and Modules

		Note: we can not use import without mention "type":"module" in package.json

		Import keyword is use for import files
			Single import:
				import anyName from 'moduleName/jsFileName'
			Multiple import:
				import {variableName, fun1, fun2} from 'moduleName/jsFileName'
			All import at once:
				import * as objName from 'moduleName/jsFileName'

				Access: objName.default
						objName.fun1()
						objName.fun2()

		Export keyword is use to what data is to be import in imported file

			Single export:
				export default varableName
				export default function functionName(){}

			Multiple data export:
				let variableName
				function fun1(){}
				function fun2(){}

				//Wrong: export { variableName, fun1(), fun2() } 
				//Right: export {variableName, fun1, fun2}

			NOTE: We can not use parathesis in export, because that function is call inside the same file. 


	Q. Import js files/modules 
		in vanella javascript	: const anyName = require('moduleName')
		in ES6 javascript		: import anyName from 'moduleName'

	Q. How to render value of a variable in html tag?

		Use {} bracket to render js variable to value
		Example
			const pia = 3.141
			reactDom.render(<p>pi value is pia</p>, document.getElementById('root'))	// display in browser: pi value is pia

			reactDom.render(<p>pi value is {pia}</p>, document.getElementById('root'))	// display in browser: pi value is 3.141

	3. Destructuring assignment

		The destructuring assignment syntax is a JavaScript expression that makes it possible to unpack values from arrays, or properties from objects, into distinct variables.

		syntax:
			// Array destructuring
				let a, b, rest;
				[a, b] = [10, 20];
				console.log(a); // 10
				console.log(b); // 20

				[a, b, ...rest] = [10, 20, 30, 40, 50];
				console.log(a); // 10
				console.log(b); // 20
				console.log(rest); // [30, 40, 50]

				({ a, b } = { a: 10, b: 20 });
				console.log(a); // 10
				console.log(b); // 20

				// Stage 4(finished) proposal
				({a, b, ...rest} = {a: 10, b: 20, c: 30, d: 40});
				console.log(a); // 10
				console.log(b); // 20
				console.log(rest); // {c: 30, d: 40}

			//Object destructuring
				const user = {
					id: 42,
					isVerified: true
				};

				const {id, isVerified} = user;

				console.log(id); // 42
				console.log(isVerified); // true
				
			Example:
				const animals = [
					{ name: "catName", sound: "meow"},
					{ name: "dogName", sound: "woo woo"},
					{ name: "crowName", feeding: { 
						food: 2,
						water: 3
					}}
				];

				console.log(animals);

				// array destructure
				const [ cat, dog, crow ] = animals
				console.log(cat);           // Result : {name: "catName", sound: "meow"}

				// object destructure
				const { name, sound } = dog
				console.log(sound);         // Result : woo woo 

				// NOTE: In array destructirng, any name variable is allowed but 1st varable 1st value assign
				//        In object destructring, assign name must match with object properties
				//        But we can assign custom name using in object destructring

				// Custom name assign in object destructring
				const { name: catName, sound: catSound} = cat
				console.log(catSound);      // Result : meow 

				// Default value assign if value is not in js onbject, in object destructring
				const { name: crowName, sound: crowSound = "data is not present" } = crow
				console.log(crowSound);     // Result : data is not present 

				// Nested destructure
				const { feeding : {food, water} } = crow
				console.log(food);			// Result : 2

	4. Template Strings/ String Literals

		Template literals are enclosed by the backtick (` `) character instead of double or single quotes.
		The default function just concatenates the parts into a single string. If there is an expression preceding the template literal, this is called a tagged template.

		Example:
			let name = `partha`;
			let name2 = 'partha';
			console.log(`hi i am ${name}`);		// hi i am partha
			console.log(`hi i am ${name2}`);	// hi i am partha

			More than one variables render using ES6 in react
				Using {`${name} ${name2}`}

			Example
				return (
					<div className="App">
					<h1>Hello {`${fname} ${lname}`}</h1>
					<p>Your lucky number is: {num}</p>
					</div>
				);

		NOTE: If we use single/double quotation then it takes as a string.

	5. Default Arguments

		It means we cann't pass any value as an argument then it assign default value;
		Example:
			function functionName( pram_1 = 'value'){
				// code
			}

	6. Object Properties

		New in JavaScript with ES6/ES2015, if you want to define an object who's keys have the same name as the variables passed-in as properties, you can use the shorthand and simply pass the key name.

		Here’s how you can declare an object with the new ES6 / ES2015 syntax:

			let cat = 'Miaow';
			let dog = 'Woof';
			let bird = 'Peet peet';

			let someObject = {
				cat,
				dog,
				bird
			}

			console.log(someObject);

			//{
			//  cat: "Miaow",
			//  dog: "Woof",
			//  bird: "Peet peet"
			//}
			And here’s how to do the same thing with the older ES5 syntax:

			var cat = 'Miaow';
			var dog = 'Woof';
			var bird = 'Peet peet';

			var someObject = {
				cat: cat,
				dog: dog,
				bird: bird
			}


	7. Arrow Function

		An arrow function expression is a compact alternative to a traditional function expression, but is limited and can't be used in all situations.

		Difference:
			function:
				1. Good for multi-line logic
				2. Creates a new scope
				 
			Arrow function:
				1. Good for single-line returns
				2. Doesn't create a scope


		Differences & Limitations:

			-> Does not have its own bindings to this or super, and should not be used as methods.
			-> Does not have new.target keyword.
			-> Not suitable for call, apply and bind methods, which generally rely on establishing a scope.
			-> Can not be used as constructors.
			-> Can not use yield, within its body.

		Comparing traditional functions to arrow functions:

			// Traditional Anonymous Function
			function (a){
				return a + 100;
			}

			// Arrow Function Break Down

			// 1. Remove the word "function" and place arrow between the argument and opening body bracket
			(a) => {
				return a + 100;
			}

			// 2. Remove the body braces and word "return" -- the return is implied.
			(a) => a + 100;

			// 3. Remove the argument parentheses
			a => a + 100;

			// Traditional Anonymous Function
			function (a, b){
				return a + b + 100;
			}

			// Arrow Function (arguments & no return)
			(a, b) => a + b + 100;

			// Traditional Anonymous Function (no arguments)
			let a = 4;
			let b = 2;
			function (){
				return a + b + 100;
			}

			// Arrow Function (no arguments & no return)
			let a = 4;
			let b = 2;
			() => a + b + 100;

	8. Spread Operator	

		Spread syntax (...) allows an iterable such as an array expression or string to be expanded in places where zero or more arguments (for function calls) or elements (for array literals) are expected, or an object expression to be expanded in places where zero or more key-value pairs (for object literals) are expected. 

		const citrus = ["Lime", "Lemon", "Orange"];
		const fruits = ["Apple", ...citrus, "Banana", "Coconut"];

		console.log(fruits) // ["Apple", "Lime", "Lemon", "Orange", "Banana", "Coconut"]

		const fullName = {
		fName: "James",
		lName: "Bond"
		};

		const user = {
		...fullName,
		id: 1,
		username: "jamesbond007"
		};

		console.log(user);  // {fName: "James", lName: "Bond", id: 1, username: "jamesbond007"}

	9. Rest Parameter

		The rest parameter syntax allows a function to accept an indefinite number of arguments as an array, providing a way to represent variadic functions in JavaScript.

		Note: the Rest parameter always use last argument of a function.

		Example:
			function sum(...theArgs) {
				return theArgs.reduce((previous, current) => {
					return previous + current;
				});
			}

			console.log(sum(1, 2, 3));		// expected output: 6

			console.log(sum(1, 2, 3, 4));	// expected output: 10

	10. Javascript ES6 Map_Filter_Reduce Higher Order Function

    1. Map Method -> The map() method creates a new array populated with the results of calling a provided function on every element in the calling array. 
    Syntax:
        array.map( ('singleItem','index')=>{} )
        array.map( callBack Function with no paranthesis or anonymous function with argument(anyvariableName) )  and it returns an array of result

    Example:
        let numbers = [3, 56, 2, 48, 5];
        const resultDoubleNum = numbers.map( 
            (num)=>{
                return num*2
            }
        )
        console.log(resultDoubleNum)    // Result = [6, 112, 4, 96, 10]

    2. Filter Method -> The filter() method creates a new array with all elements that pass the test implemented by the provided function.
    Syntax:
        array.filter( ('singleItem','index')=>{} )
         array.filter( callBack Function with no paranthesis or anonymous function with argument(anyvariableName) )  and it returns an array of result that condition true

    Example:
        let numbers = [3, 56, 2, 48, 5];
        const resultFilterLessthan10 = numbers.filter(
            (num)=>{
                return num < 10
            }
        )
        console.log(resultFilterLessthan10) // Result = [3, 2, 5]

    3. Reduce Method -> Accumulate a value by doing something to each item in an array.

         The reduce() method executes a user-supplied "reducer" callback function on each element of the array, in order, passing in the return value from the calculation on the preceding element. The final result of running the reducer across all elements of the array is a single value.

        The first time that the callback is run there is no "return value of the previous calculation". If supplied, an initial value may be used in its place. Otherwise the array element at index 0 is used as the initial value and iteration starts from the next element (index 1 instead of index 0).

        Perhaps the easiest-to-understand case for reduce() is to return the sum/concatenation of all the elements in an array:

    Syntax:
        array.reduce( callBack Function with no paranthesis or anonymous function with argument( accumulate,arrayValue) )  and it returns a result
        const storeValue = array.reduce(
            (accumulator, arrayIterationValue)=> accumulator + arrayIterationValue, accumulatorAssignValue
        )   

    Example: of sum
        let numbers = [3, 56, 2, 48, 5];
        const accumulatorNum = numbers.reduce(
            (accumulator, num)=> accumulator + num,0
        )
        console.log(accumulatorNum)     // Result = 114

    Example: of concatination
        const reduceName = Emojipedia.reduce(
            (accumulator,emoji)=> accumulator+" : "+emoji.name,""
        )
        console.log(reduceName);    // Result =  : Tense Biceps : Person With Folded Hands : Rolling On The Floor, Laughing 

    4. Find Method -> The find() method returns the first element in the provided array that satisfies the provided testing function. If no values satisfy the testing function, undefined is returned. 
    Syntax:
        array.find( callBack Function with no paranthesis or anonymous function with argument(anyvariableName) )  and it returns the value of conditipon true once it find then break the function and out

    Example:
        let numbers = [3, 56, 2, 48, 5];
        const numGreaterThan10 = numbers.find(
            (num)=>{
                return num > 10
            }
        )
        console.log(numGreaterThan10)   // Result = 56

    5. FindIndex Method -> The findIndex() method returns the index of the first element in the array that satisfies the provided testing function. Otherwise, it returns -1, indicating that no element passed the test. 

    Syntax:
        array.findIndex( callBack Function with no paranthesis or anonymous function with argument(anyvariableName) )  and it returns the index of conditipon true once it find then break the function and out

    Example:
        let numbers = [3, 56, 2, 48, 5];
        const numGreaterThan10Index = numbers.findIndex(
            (num)=>{
                return num > 10
            }
        )
        console.log(numGreaterThan10Index)  // Result = 1

    6. substring() -> It returns the part of the string between the start and end indexes, or to the end of the string. 

    Syntax:
        stringValue.substring( startIndex, EndIndex )  // Result String is from startIndex to endIndex -1

    Example:
        let str = "This is a coding tutorial"
        const substr = str.substring(0,6)
        console.log(substr)     // Result = "This i"

## React Conditional Rendering with the Ternary Operator & AND Operator

    1. And Operator: &&
        Syntax: 
            && in JS
                ( Expresion && Expression )

            && in React
                ( Condition && Expression )
                    like: true && Expressipn

    2. Ternary Operator:
        Syntax:
            Condition ? Do If True : Do If False
        Example:
            const App = () => {
                return (
                    <div className="container">
                    { (isLoggedIn === true)? <h1>Hello User</h1> : <Login /> }
                    </div>
                );
            }

            export default App;
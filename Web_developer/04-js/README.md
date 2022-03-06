# Javascript

	Javascript is a client-side programming language, which we can use making for interactive website.

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
		we can send some message to console using console.log('message');

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
			This method use to find out the datatype of variables.

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

	6. slice() method
		This method uses to cut the string into slices.

		syntax: variableName.slice( startPosition , endPosition);

		startposition : starting position of string
		endPosition   : not include end position [ endposition - 1 ]

		example: "Arjun".slice(2,5);	// 'jun' will be result
				"Arjun".slice(2,4);		// 'ju' will be result
				"Arjun".slice(2);		// 'jun' will be result

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
			
	10. Math functions

			Math.floor(value)	: it round the number to down integer number
				Math.floor(1.6) : 1 will be result
			Math.ceil(value)	: it round the number to up integer number
				Math.ceil(1.6)  : 2 will be result
			Math.round(value)	: it round the number to nearest integer number
				Math.round(1.6) : 2 will be result
				Math.round(1.4) : 1 will be result
			Math.pow(base,exponential)	: to the power of number
				Math.pow(2,2) : 2 to the power 2 is 4 will be result	
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

		includes() method use to know about value is present in array or not. it is only return boolean value

			array_name.includes('value');	// true or false

		Add a new value to array in end:
			array_name.push('value_3');

		delete last value to array in end:
			array_name.pop();

		Delete/add in any index an item from an array:
			array_name.splice(start_index_position,no_of_values,content);
			ex:- array_name.splice(1,2);	delete 2 data and starting from index 1
			ex:- array_name.splice(1,0,"value_4");	no delete data and adding new value in index 1
	
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

### Challenge: Test your Reaction! Click on the boxes and circle as quickly as you can!	
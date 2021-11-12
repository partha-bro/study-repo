# Course Name: The Complete Web Developer Course 2.0

## Javascript

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

	4. Accessing Elements
		There are basically 3 main types of element to accessing element

		1. document.getElementById('')
		2. document.getElementsByClass('')
		3. document.getElementsByTagName('')

		The difference between Id and Class/TagName are 
		Id select only one Element to manupulate.
		Class/TagName select more than one Elements to manupulate. so we can access in array format.
		like: document.getElementsByTagName("p")[2].style.color="red";

	5. Responding to a click
		onclick property/object

	6. Concatenation string
		By using "+" symbol to combine two or more string in one.

	7. Manupulating Style
		style.color = value
		style.fontSize = value
		style.display = none/block/inline
		etc
	
	8. Challenge: make three circle with different color and when we click that is disapear

	9. Variables
		var variables_name;

	10. Arrays
		An array store same or different types of datatype values.

		Declare an array:
			var array_name = new Array();
			var array_name = ["value_1","value_2"];

		Assign the array:
			array_name[0] = value_1;
			array_name[1] = value_2;
	 
	 	Length of an array:
		 	console.log(array_name.length);

		Add a new value to array in end:
			array_name.push('value_3');

		Delete/add in any index an item from an array:
			array_name.splice(start_index_position,no_of_values,content);
			ex:- array_name.splice(1,2);	delete 2 data and starting from index 1
			ex:- array_name.splice(1,0,"value_4");	no delete data and adding new value in index 1
	
	11. If Statement
			if( condition ){
				statements;
			}else{
				statements;
			}

	12. Random numbers
			Math.random() 				=> it function use to random number between 0 to 1 Eg. 0.2547895583
			Math.random() * 10 			=> it multify the number for get number.
			(Math.random() * 10) + 1	=> it means random between 1 to your multiple number
			Math.floor((Math.random() * 10) + 1);	=> Remove the fraction number of random number

	13. Challenge: How many fingers am i holding up?

	14. Loops
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

	15.	Functions
		function function_name( arguments ){
			statements;
			return statement;
		}	

	16. JS timing event
		find the crrent time in milliseconds:
			var variable_name = new Date().getTime();
		We can convert millisecond to second by devide 1000;

	17. setTimeout() Method
		Executes a function, after waiting a specified number of milliseconds.
		syntax:
			setTimeout(function, milliseconds);

		NOTE: In function parameter we connot write () function brakets, only function name.

### Challenge: Test your Reaction! Click on the boxes and circle as quickly as you can!	
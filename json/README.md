# JSON

	1. What is Json?
		 A. It stands for Javascript Object Notation.
		 	it is used for store and exchange data.

	2. Example?
		A. JSON - 
		{
			"students" : [
				{"name":"Ram","age":23,"city":"Agra"},
				{"name":"Sonam","age":22,"city":"Delhi"}
			]
		}

		XML  -  
		<students>
			<student>
				<name>Ram</name><age>23</age><city>Agra</city>
			</student>
			<student>
				<name>Sonam</name><age>22</age><city>Delhi</city>
			</student>
		</students>

	3. Difference Between JSON and XML?

		JSON - 
			1. Javascript Object Notation
			2. Text based format
			3. Light weight
			4. Doesn't support comments and namespaces

		XML - 
			1. Extensible markup language
			2. Markup language
			3. Heavier
			4. Support comments and namespaces

	4. Javascript Object vs JSON

		javascript object - HERE firstname treats as key so no use of "" but we can use.
			var person = { firstname : "Arjun", lastname : "bro" }
			alert( person.firstname + + person.lastname );

		JSON - HERE firstname treats as text so always use of ""
			var person = { "firstname" : "Arjun", "lastname" : "bro" }
			alert( person.firstname + + person.lastname );

		NOTE: JSON only use "" qoutation but js object has use both '' & "".

	5. What are the data types use in JSON and example?
		A.	There are six types like
			1. string
			2. number
			3. boolean
			4. array
			5. object
			6. null

		Example:
			{
				"name" : "Arjun Bro",						// string
				"age" : 25,									// number
				"married" : false,							// boolean
				"kids" : ,									// null
				"hobbies" : [ "music", "computer"],			// array
				"vehicle" : {								// object
					{"type" : "car","vname":"swift"},
					{"type" : "bike","vname":"apache"}
				}
			}

	6. What are the advantages and disadvantages of JSON?
		A. Advantages:
			1. Human Readable Format
			2. Language Independent
			3. Support all programming language
			4. Easy to organised and access
			5. It is light-weight

		  Disadvantage:
		  	Can not use it for transfor video, audio,images or any other binary information.
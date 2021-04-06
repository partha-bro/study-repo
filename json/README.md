# JSON

## What is Json?

	 A. It stands for Javascript Object Notation.
	 	it is used for store and exchange data.

	 	NOTE: json file access in ajax jquery method.
	 	Syntax:
	 			// When page load document is ready to perform
	 			$(document).ready(function(){

	 			// call ajax method of jquery
			      $.ajax({

			    // url of json data or fetch json object using json_encode()
			        url: 'fetch_data.php',

			    // type of data transfer
			        type: 'POST',

			    // data transfer to url path using key:value 
			        data: { id : 2},

			    // datatype is mention about what type of data is retun
			        dataType: 'JSON',

			    // after the data is fetch what can we do with it.
			        success: function(data){
			          $.each(data, function(key, value){
			            $('#load').append(value.id + " " + value.student_name + "<br/>");
			          });
			        }
			      });
			    });
		Example of json call in ajax using jquery:
			$(document).ready(function(){
		      $.ajax({
		        url: 'fetch_data.php',
		        type: 'POST',
		        data: { id : 2},
		        dataType: 'JSON',
		        success: function(data){
		          $.each(data, function(key, value){
		            $('#load').append(value.id + " " + value.student_name + "<br/>");
		          });
		        }
		      });
		    });
## Example?

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

## Difference Between JSON and XML?

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

## Javascript Object vs JSON

	javascript object - HERE firstname treats as key so no use of "" but we can use.
		var person = { firstname : "Arjun", lastname : "bro" }
		alert( person.firstname + + person.lastname );

	JSON - HERE firstname treats as text so always use of ""
		var person = { "firstname" : "Arjun", "lastname" : "bro" }
		alert( person.firstname + + person.lastname );

	NOTE: JSON only use "" qoutation but js object has use both '' & "".

## What are the data types use in JSON and example?

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

## What are the advantages and disadvantages of JSON?

	A. Advantages:
		1. Human Readable Format
		2. Language Independent
		3. Support all programming language
		4. Easy to organised and access
		5. It is light-weight

	  Disadvantage:
	  	Can not use it for transfor video, audio,images or any other binary information.

## What is json_encode() & json_decode()?

	A. json_encode() takes the multidimension array and converts into json object.
		Syntax: json_encode(array, JSON_PRETTY_PRINT)
		JSON_PRETTY_PRINT : parameter for beautiful readable format, it is only use for write in another file, not for fetch/work.

	B. json_decode() takes the json object and converts into php array/object.
		Syntax: json_decode(json object,assoc)
		but we can use value of associated array, the value is true/false like:

			json_decode(json object,true)  it returns php array
			json_decode(json object,false)  it returns php object

## How to read/fetch and write json data in another file?

	A. file_get_contents(filename): function to retrive the data.
	B. file_put_contents(filename,data): function to write the data.

	example:
		$path_json = '../01.intro/data.json';
		  $json_data = file_get_contents($path_json);
		  $arr = json_decode($json_data,true);
		  echo "<pre>";
		  print_r($arr);

## Create dynamic JSON file

	A. Create JSON file with MuSQL Data
		step 1: fetch data from mysql in array
		step 2: convert array to json object with beautiful data save
					$json_encode_object = json_encode($result, JSON_PRETTY_PRINT);
		step 3: make a file name
		step 4: put the json object in new file
					file_put_contents($full_path, $json_encode_object)
	B. Create JSON file with Form Data
		step 1: Input data from users by form
		step 2: make an array of user input data
		step 3: make sure file is exists and fetch the data from that file
		step 4: convert json object to array
		step 5: Now push the step 2 result array data to converted array
		step 6: convert the array to json object
		step 7: put that convert object data to that file.

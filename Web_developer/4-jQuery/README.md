# Course Name: The Complete Web Developer Course 2.0

## jQuery

### What is jQuery?
	jQuery is a fast, small, and feature-rich javascript library, 
	it makes things like HTML document traversal and manipulation, event handling, animation and Ajax much simpler with an easy-to-use API that works across a browsers. 

### Latest version of jQuery: v3.6.0
	syntax: 
		$("selector").event(function(){
			code...;
		});

### How to know jQuery file is loaded.
	a. This condion is used for knowing that jQuery is attached successfully or not
	b. jQuery is a variable in "jquery-3.6.0.min.js" file
	eg.
		if( typeof jQuery == 'undefined' ){
			alert('jQuery is not installed.')
		}else{
			console.log('jQuery is installed correctly.');
		}

### Detecting a click
	syntax: 
		$("selector").click(function(){
			code...;
		});

### Content change
	syntax:
		$("selector").html('Value');

### Hover any element
	$('button').hover(function(){
		$("#text").html('Button is hover.');

	});

### Change any attibute content
	$('button').click(function(){        
		$('iframe').attr('src','http://dsdigital.com/');
	});

### Change color
	$("selector").css('property','value');
	$("#text").css('color','red');
	$("#text").css('background-color','yellow');

NOTE: $("#text").css('background-color','yellow'); => In this command we can set a color to text id.
		$("#text").css('background-color'); => In this command we can Get a color from text id.

### "this" keyword
	this keyword is represent current event

### Fading Content
		fadeOut()
		fadeIn()
		fadeToggle()	: this is use as fadeIn and fadeOut method

		syntax: $('selector').fadeIn('value',callback function(){

		});

### Animating Content
	animate({array of css properties},time in millisecond,callback function);
	syntax:
		// Animate Content
			$('#div_animate').click(function(){
				$(this).animate({
					width:"200px",
					height:"200px",
					margin:"10px"
				},2000, function(){
					$(this).css('backgroundColor','blue');
				});
			});
	
### Regular Exprestion
	A regular expresion is denoted as 
	syntax: /any input/parameter
	eg:		/is/	=>	is word/char of regular expresion
			/IS/i	=> i for non-casesensitive of IS word
			/IS/g	=> All the IS present in the string

	match() method use to find the correct regular expresion.
	e.g. 	var regex = /E/ig;
			var string = $('#regex_text').html();
			var result = string.match(regex);
			$('#result').html(result);
	
	NOTE: the method return regular expreson from matched string if true.
		or null return if false.

### jQuery Inbuild Methods
	13. How to find numeric value in jQuery function?
		$.isNumeric()
	14. How to find ajax in jQuery function?
		$.ajax()


## jQuery-UI

	jQuery UI is a curated set of user interface interactions, effects, widgets, and themes built on top of the jQuery JavaScript Library.

### Draggable 
	Enable draggable functionality on any DOM element. Move the draggable object by clicking on it with the mouse and dragging it anywhere within the viewport.

	draggable() method.

	1.1 Constrain movement along an axis: x [vertically]
		draggable({ axis:"x" })
	1.2 Constrain movement along an axis: y [horizentaly]
		draggable({ axis:"y" })

	1.3 Constrain movement inside the parent DOM Element
		draggable({ containment: "parent" })
	1.4 Constrain movement inside any DOM Element
		draggable({ containment: "any_ids_of_DOM_element" })

### Resizable
	This method allows to resize the element freely.

	resizable() method.

### Droppable
	This method allows to other DOM element drop in respective element

	$('selector').droppable({
		drop: function( event,ui ){
			// after drop complete...CODE
		}
	});

### Accordion
	Displays collapsible content panels for presenting information in a limited amount of space.

	accordion() method

	NOTE: this method call by div and that div contain tittle in <h3> tag and content in anathor <div> with <p> tag

	example:
			HTML:
				<div id="accordion">
					<h3>title 1</h3>
					<div>
						<p>content 1</p>
					</div>
					<h3>title 2</h3>
					<div>
						<p>content 2</p>
					</div>
				</div>

			JS:
				$('#accordion').accordion();


### Sortables
	Reorder elements in a list or grid using the mouse.

	sortable() method

	systax:
			HTML:
				<ol/ui id="sortable">
					<li>option 1</li>
					<li>option 2</li>
					<li>option 3</li>
					<li>option 4</li>
				</div>

			JS:
				$('#sortable').sortable();

# Project: 
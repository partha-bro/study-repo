# Course Name: The Complete Web Developer Course 2.0

## jQuery

### What is jQuery?
	jQuery is a fast, small, and feature-rich javascript library, 
	it makes things like HTML document traversal and manipulation, event handling, animation and Ajax much simpler with an easy-to-use API that works across a browsers. 

### Latest version of jQuery: v3.6.0
	syntax: 
		$("selector").event(function(){
			// code...;
		});

### what is $(document)?

	$(document) means the jQuery is select entire document of the html page.

### How to use jQuery CDN and where to paste it?

	jQuery CDN paste last of html page but above in all custom javascript <script> tags.

	CDN URL: 	<!-- jquery plugin -->
    			<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	NOTE: Always use jQuery script/CDN in last html page.
		if we are trying to use jQuery file or CDN in <head> tag then we should use below syntax to run jQuery code:

			$(document).ready(function() {
				$("selector").event(function(){
					// code...;
				});
			});

### $ symbole is use to select the element using id/class/tag.

	document.querySelector('') and document.querySelectorAll('') both are replaced by $('') or jQuery('') method.

### Use style in html dom 
	
		then call css('proprty','value') method

	$("selector").css('property','value');
	$("#text").css('color','red');
	$("#text").css('background-color','yellow');

NOTE: $("#text").css('background-color','yellow'); => In command we can set a color to text id.
		$("#text").css('background-color'); => In command we can Get a color from text id.

### Change any attibute content     
		$('iframe').attr('src','http://dsdigital.com/');

### How to add class and remove class in Dom using jQuery?

	$('selector').addClass('className');

	$('selector').removeClass('className');

### How to change simple text and html code in DOM?

	text() method use to change only text of that Dom.

	html() method use to change text with html tag to interpreter of that Dom.

	example:
		$('h3').text('text changes using text() method');

		$('h4').html('<em>html code with text</em>');

### Add Event Listener

	Syntax:
		$("selector").event(function(){
			// code...;
		});

	Event:
		.click( function(){
			// code
		});

		.keypress( function(event){
			//code
		});

	NOTE: To avoid perticular event method and use general method for event is on(),

		use on( 'eventName' , anonymous function);

		example:
			$('h2').on('mouseover', function(){
				$('h2').attr('align','right');
			});

### Adding and removing DOM element 

	add a new element using jQuery in below methods

	before(): add new element before targeting selector

			syntax: 	$('selector').before('<tag>new html code</tag>');

			result on html page like
					<tag>new html code</tag> //next line selector code
					selector code

	after(): add new element after targeting selector

			syntax: 	$('selector').after('<tag>new html code</tag>');

			result on html page like
					selector code				//next line new add element
					<tag>new html code</tag>

	prepend(): add new element after opening tag of selector

			syntax: 	$('selector').prepend('<tag>new html code</tag>');

			result on html page like
					opening tag selector code<tag>new html code</tag> text content

	append(): add new element before closing tag of selector

			syntax: 	$('selector').append('<tag>new html code</tag>');

			result on html page like
					opening tag selector code text content<tag>new html code</tag>closing tag

	
	removing DOM element using remove() method:

	Example:
		$('h5').before('<button>before element</button>');
		$('h5').after('<button>after element</button>');
		$('h5').prepend('<button>prepend element</button>');
		$('h5').append('<button>append element</button>');
		$('#remove').remove();

### jQuery Effect

	animate()		Runs a custom animation on the selected elements
		NOTE: only use number value to css property to animate the element

	syntax:
		$('selector').animate({ property:numberValue });

	Example:
		$('#animate').click(function(){
			$('img').animate({
				'margin-top' : '50px',
				'height' : '500px',
				'width' : '800px'
			});
		});

	fadeIn()		Fades in the selected elements
	fadeOut()		Fades out the selected elements
	fadeToggle()	Toggles between the fadeIn() and fadeOut() methods

	slideDown()		Slides-down (shows) the selected elements
	slideToggle()	Toggles between the slideUp() and slideDown() methods
	slideUp()		Slides-up (hides) the selected elements

	stop()			Stops the currently running animation for the selected elements

	hide()			Hides the selected elements
	show()			Shows the selected elements
	toggle()		Toggles between the hide() and show() methods

	

	Example:
		$('body').append('<img src="https://cdn.pixabay.com/photo/2015/12/12/22/35/snowman-1090261__340.jpg" />');
		$('#hide').on('click',function(){
			$('img').hide();
		});
		$('#show').on('click',function(){
			$('img').show();
		});
		$('#toggle').click(function(){
			$('img').toggle();
		});
		$('#slideUp').on('click',function(){
			$('img').slideUp();
		});
		$('#slideDown').on('click',function(){
			$('img').slideDown();
		});
		$('#slideToggle').click(function(){
			$('img').slideToggle();
		});
		$('#fadeOut').on('click',function(){
			$('img').fadeOut();
		});
		$('#fadeIn').click(function(){
			$('img').fadeIn();
		});

		animation any element using nested methods:
			$('selector').fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100);

		
		delay(100) to delay 100 miliseconds
			$('#'+color).addClass('pressed').delay(100).queue(function(next){
					$(this).removeClass('pressed');
					next();
			});
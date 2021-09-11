# JQuery

## What is jQuery?

	jQuery is a fast, small, and feature-rich JavaScript library. It makes things like HTML document traversal and manipulation, event handling, animation, and Ajax much simpler with an easy-to-use API that works across a multitude of browsers. With a combination of versatility and extensibility, jQuery has changed the way that millions of people write JavaScript.

## Introduction

	1. Why use jQuery?
		- Short Seletors
		- Variety of Animation Functions
		- Easy DOM Manupulation
		- Easy CSS Styling
		- Easy DOM Traversing
		- Simple Ajax code

	2. Benefits of jQuery?
		- Browser Independent
		- Increase Coding Speed

## JQuery Implementation
	
	There are three steps to implement jQuery in html/php.
	- Step 1: Download jQuery.js file
	- Step 2: Include jQuery.js file in HTML file
			<script src="jquery.js"></script>
	- Step 3: Do jQuery code in <script> tag
			<script>
				DO CODE...
			</script>

## JQuery Implementation using CDN
	
	CDN - Content Delivery Network

	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

## jQuery Basic Syntax
	
	$(document).ready(function(){
			code
		});

	$(document) = selector	= Target DOM Element
	ready() 	= method()	= What Work
	function()	= anonymous/closer function 
	; 			= at the end semicolon is mandatory


## Selectors

	- class name
		$('.class_name')
	- id name
		$('#id_name')
	- tag name
		$('tag_name')  all the same tag name in that document

### NOTE: this keyword is used for parent event like
	
	$('body').keyup(function(){
		 	$(this).css('background-color','black');
		 	$(this).css('color','white');
		 });

	HERE: this points $('body').keyup(function() Event.

## Advance Selectors
	
	$('*')				=>	* means all the tags in that document

	$('ul li')			=> select all li tags of ui tags

	$('.abc , .xyz')	=> multiple class names select

	$('h1, div, p')		=> multiple tag names select

	$('p:first')		=> select first p tag of that document

	$('p:last')			=> select last tag of that document

	$('li:even')		=> select even li tags

	$('li:odd')			=> select odd li tags

	etc.

## Mouse Events

	- click()
	- dblclick()
	- contextmenu()
	- mouseenter()
	- mouseleave()

## Keyboard Events
	
	- keypress()
	- keydown()
	- keyup()

## Form Events

	- focus()
	- blur()
	- change()
	- Select()
	- Submit()

## Window Events

	NOTE: $(window) select has window object thats why window does not contain ""
	- resize()
	- scroll()

	Removed in version 3.0
	- load()
	- unload()

## GET Methods

	- text()
	- html()
	- attr()
	- val()

## SET Methods

	- text()
	- html()
	- attr()
	- val()

## CSS Class Methods

	- addClass()
	- removeClass()
	- toggleClass()
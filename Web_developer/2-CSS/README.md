# Course Name: The Complete Web Developer Course 2.0

## CSS

	Cascading Style Sheet (CSS) is the language we use to style an HTML document.

	CSS describes how HTML elements should be displayed.

	1. 3 Types of method to apply in HTML pages 
			a. Inline style CSS
				Use css style within the tags with style attribute
			b. Internal style CSS
				Use css style within head tag using style tag
			c. External style CSS
				Allow external css style pages in HTML page using link tag in head tag
				<link rel='stylesheet' type='text/css' href='PATH'>
	
	Q. What is Difference between 'src' and 'href' attribute?
		A simple definition

			SRC: If a resource can be placed inside the body tag (for image, script, iframe, frame)
			HREF: If a resource cannot be placed inside the body tag and can only be linked (for html, css, a)

	2. Classes and ids
	3. Height and width
			a. value is pixel like 100px
			b. value is percentage like 100%
			c. value is em like 100em

	4. color and background-color
			a. value is colour name like red
			b. value is colour code like #4A8CF6
			c. value is rgb() function of colour like rgb(74,140,246)

	5. Floating
		Changing the position of element in page.
			a. value is none/left/right

		NOTE: we can use 'float' property in css and 'align' attribute in HTML tag. 

	4. Clear 
		This property is used for clear the float position of next elements.
			a. value is none/left/right/both

	5. Position
		It simply change the position of elements
			a. value is static
				HTML elements are positioned static by default.
				Static positioned elements are not affected by the top, bottom, left, and right properties.
			b. value is fixed
				this is fixed the position of that element and it is consider whole page as a position, 
				it can not change while scrolling the page.
			c. value is absolute
				this is same as fixed value but it can scroll and it is consider whole page as a position
			d. value is relative
				this is use for change position by original position
			e. value is sticky
				this is same as fixed but it active when scroll hit the element and it is not consider whole page 
				as a position it remeber the parent tag, it can not change the position but it return the original 
				position when scroll is top of page.
					Example: 'up' button position in page
	
	6. Position dependent properties
			a. left 
				positive value [left side] 
				negative value [right right]
			b. top
				positive value [top side] 
				negative value [button right]

			NOTE: we can not use both left or right as well as top or button, 
			instead of we can put value positive or negative

			c. z-index
				This property is use to indetify the priority of visible, 
				those element has higher number that priority is higher.

			d. opacity
				this is used for hide/tranparent/clear etc.
				value is 0 to 1.
				0 = hide
				< 0.5 = less transparent
				0.5 = tranparent visible
				> 0.5 = more transparent
				1 = fully visible

	7. Margin
		The distance between element to another element
			a. margin-top
			b. margin-right
			c. margin-button
			d. margin-left

		Shortcut property use:- 
		margin: top right button left; 	=> It apply all respective direction 
		margin: top right;				=> It apply top value in both top and button / right value in both left and right
		margin: value;					=> It apply all the direction

	8. Padding
		The distance between data to element border inside the element.
			a. pading-top
			b. padding-right
			c. padding-button
			d. padding-left

		Shortcut property use:- 
		padding: top right button left; 	=> It apply all respective direction 
		padding: top right;					=> It apply top value in both top and button / right value in both left and right
		padding: value;						=> It apply all the direction

	9. Borders
		this is use for make border of any element
			border: size color style;
			ex. border: 2px blue solid;

		a. border: size color style;				=> for all property use in all direction
		b. border-width: top right button left;		=> use indivisually
		c. border-color: top right button left;
		d. border-style: top right button left;		=> value is [ dotted/dashed/solid/double/none/hidden ]
		e. border-radius: top right button left;

		Note: We can convert square box to circle using 50% of border-radius.

	10. Fonts
			Some property of font we can use to style the fonts.
				a. font-size: value/percentage/ etc.
				b. font-family: font_name;
				c. font-weight: bold/normal/bolder/number{100/200/300...};
				d. font-style: italic/none;
				e. text-decoration: underline/none;
					NOTE: we can remove underline of anchor tag by using below property of <a> tag
						a{
							text-decoration: none;
						}
					
	11. Align Text
		a. text-align: left/center/right;
		b. text-align: justify;				=> this is proper look of paragraph 

	12. Styling Links
		a. a:link{ }
		b. a:hover{ }
		c. a:visted{ }
		d. a:active{ }

	NOTE:: If you want to most priority css is apply ignore all the extra style 
	we can denote this using "!important" value of property.
	Example: 
				.c a{
					border-left: 1px #cccccc solid;
				}

				// left-border class of a tag having left border

				.left-border a{
					border-left: none !important;
				}

				// Now left-border class of a tag ignore the 1st style of border and apply 2nd one.

### Project BBC news Website
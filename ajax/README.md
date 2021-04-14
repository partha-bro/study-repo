# AJAX

AJAX is about updating parts of a web page, without reloading the whole page.

## What is AJAX?
	1. AJAX = Asynchronous JavaScript and XML.
	2. AJAX is a technique for creating fast and dynamic web pages.

	AJAX allows web pages to be updated asynchronously by exchanging small amounts of data with the server behind the scenes. This means that it is possible to update parts of a web page, without reloading the whole page.

	Classic web pages, (which do not use AJAX) must reload the entire page if the content should change.

## Examples of applications using AJAX: Google Maps, Gmail, Youtube, and Facebook tabs.

	syntax in jquery:
 		$(document).ready(function(){
			// event like click a button
			$('id with #').on('click',function(
				$.ajax(
					url: 'url of calling web page',
					type: 'method through travel variables (get/post)',
					datatype: 'json',
					data: 	String 	eg. name=partha&age=20&gender=male serialize() /
							Array 	eg. ['key'=>'value']/
							Object 	eg. {key:value}
							Json 	eg. JSON.stringify(object) it converts object to json data/,
					success: function(data){
						after run the target page the result will be.
					}
				);
			));
		});

## How to make a pegination in website?

		Step 1: Take some default value in 1st page using LIMIT command of mysql query.

		Step 2: Find out total no of pegination button required
					divide by total record and show record
					total record - find out in count() in mysql query

		Step 3: Now when i click page number then autometicaly fetch page number using jquery like
						$(document).on('click','#pegination button',function(){
				  			var no = $(this).attr('id');
				  			console.log(no);
				  		};

		Step 4: The formula of show record according to page
				offset value = (page no - 1) * limit record
				query use LIMIT offset,limit no. on command 

## How to make a load more pegination in website?

		Step 1: Take some default value in 1st page using LIMIT offset,limit command of mysql query.

		Step 2: Add sql record with load more button with id and data-id attribute

		Step 3: now the data-id set by last value of id record of mysql

			Step 4: When click load more button then fetch data-id number call function of data("id") in jquery
			              $(document).on('click','#ajaxbtn',function(){
			                  var next_no = $(this).data("id");
			                  loadTable(next_no);
			              });

        Step 5: Now remove Load more button more than one
	            if (data) {
	             	$('#pegination').remove();     // remove the previous load more button
	             	$('#loadData').append(data);    // append the data
	            }else{
	              	$('#ajaxbtn').prop('disabled',true);  // disable the data
	              	$('#ajaxbtn').html('Finished');       // load more button name in finished
	            }

### The difference between html() and append() in jquery?

       A. html()	: it means, it changes the inner html text of any tag
          append()	: it means, it bind the data of parent tag. like append tbody in table.

### What is data-id attribute in html?

        A. The data-* attribute is used to store custom data private to the page or application.

          The data-* attribute gives us the ability to embed custom data attributes on all HTML elements.

          * = any string we want to replace.

          it use to retrive value of custom attribute like in jquery
          data-name = 'partha';
          in jquery: $(this).data('name') it retrive partha value.
          this is current tag or button.

## What is serialize() function and how to use it?

	Serialize() use to retrive data in string format.

  	When we use ajax in form tag, then submit button type must be in button not type='submit'.

  	example: 
  		$.ajax({
            url: 'form-data.php',
            type: 'post',
            data: $('#data-form').serialize(),
            success: function(data){
              $('#result').html(data);
            }
          });
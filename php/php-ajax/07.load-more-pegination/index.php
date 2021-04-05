<!-- 
	How to make a load more pegination in website?

    Q.The difference between html() and append() in jquery?
       A. html(): it means, it changes the inner html text of any tag
          append(): it means, it bind the data of parent tag. like append tbody in table.
		Step 1: Take some default value in 1st page using LIMIT offset,limit command of mysql query.

		Step 2: Add sql record with load more button with id and data-id attribute

		Step 3: now the data-id set by last value of id record of mysql

		Step 4: When click load more button then fetch data-id number call function of data("id") in jquery
              $(document).on('click','#ajaxbtn',function(){
                  var next_no = $(this).data("id");
                  loadTable(next_no);
              });

        What is data-id attribute in html?
        A. The data-* attribute is used to store custom data private to the page or application.

          The data-* attribute gives us the ability to embed custom data attributes on all HTML elements.

          * = any string we want to replace.

          it use to retrive value of custom attribute like in jquery
          data-name = 'partha';
          in jquery: $(this).data('name') it retrive partha value.
          this is current tag or button.

    Step 5: Now remove Load more button more than one
            if (data) {
              $('#pegination').remove();     // remove the previous load more button
              $('#loadData').append(data);    // append the data
            }else{
              $('#ajaxbtn').prop('disabled',true);  // disable the data
              $('#ajaxbtn').html('Finished');       // load more button name in finished
            }
-->
<?php
	include_once '../01.introduction/header.php';
?>

  </table>
  <table id='loadData' align="center" border="5px" cellpadding="10" cellspacing="0">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Phone</th>
        <th>City</th>
        <th>EDIT</th>
        <th>DELETE</th>
      </tr>
    </thead>

  </table>

	<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

  <script type="text/javascript">
  	$(document).ready(function(){

      $('#table').remove();  // remove the header file of table tag

      function loadTable(page_no){
        $.ajax({
          url: 'pegination.php',
          type: 'post',
          data: { page_no:page_no },
          success: function(data){
            if (data) {
              $('#pegination').remove();
              $('#loadData').append(data);
            }else{
              $('#ajaxbtn').prop('disabled',true);
              $('#ajaxbtn').html('Finished');
            }
            
          }
        });
      }

      loadTable();

      $(document).on('click','#ajaxbtn',function(){
          $('#ajaxbtn').html('Loading...');
          var next_no = $(this).data("id");
          loadTable(next_no);
      });
    });
  </script>
</body>
</html>
<!-- 
	How to make a pegination in website?
		Step 1: Take some default value in 1st page using LIMIT command of mysql query.

		Step 2: Find out total no of pegination button required
					divide by total record and show record
					total record - find out in count() in mysql query

		Step 3: Now when i click page number then autometicaly fetch page numberusing jquery like
						$(document).on('click','#pegination button',function(){
				  			var no = $(this).attr('id');
				  			console.log(no);
				  		};

		Step 4: The formula of show record according to page
				offset value = (page no - 1) * limit record
				query use LIMIT offset,limit no on command 
-->
<?php
	include_once '../01.introduction/header.php';
?>
		<tbody id="data">
			<tr>
				<td>1</td>
				<td>Arjun</td>
				<td>25</td>
				<td>M</td>
				<td>7011483096</td>
				<td>Puri</td>
				<td><button id="1" onclick="editData(1);">Edit</button></td>
				<td><button id="1" onclick="deleteData(1);">Delete</button></td>
      </tr>
    </tbody>
  </table>
<br/><br/>
<div id='pegination' align='center'>
  <button id='2'>Load More</button>
</div>
		

	<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

  <script type="text/javascript">
  	$(document).ready(function(){
  		function loadPageNo(no = 0){
  			$.ajax({
  				url: 'pegination.php',
  				type: 'POST',
  				data: {page_no : no},
  				success: function(data){
  					$('#data').html(data);
  				}
  			});
  		}

  		// show 2 record so we can no of page is divide by total record.
  		loadPageNo();

  		// when no of page in click.
  		$(document).on('click','#pegination button',function(){
  			var no = $(this).attr('id');
  			console.log(no);
  			loadPageNo(no);
  		});
  	});
  </script>
</body>
</html>
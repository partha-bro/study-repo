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
	<div id="pegination" align="center">
		Page: <button id="1">1</button>
	</div>

	<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

  <script type="text/javascript">
  	$(document).ready(function(){
  		function loadPageNo(no = null){
  			$.ajax({
  				url: 'pegination.php',
  				type: 'get',
  				data: {page_no : no},
  				success: function(data){
  					$('#pegination').html(data);
  				}
  			});
  		}

  		function loadAllData() {
  			// body...
  			$.ajax({
  				url : '../01.introduction/ajax-load.php',
  				type : 'POST',
  				success: function(data){
  					$('#data').html(data);
  				}
  			});
  		}

  		// load all data from database
  		loadAllData();

  		// show 2 record so we can no of page is divide by total record.
  		loadPageNo();

  		// when no of page in click.
  		$(document).on('click','#pegination button',function(){
  			var no = $(this).attr('id');
  			console.log(no);
  			$.ajax({
  				url: 'pegination.php',
  				type: 'get',
  				data: {page_no : no},
  				success: function(data){
  					$('#data').html(data);
  				}
  			});
  		});
  	});
  </script>
</body>
</html>
<?php
	include_once '../01.introduction/header.php'
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
	<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

  <script type="text/javascript">
  	$(document).ready(function(){
  		$('#btn-data').on("click",function(){
  			$.ajax({
  				url: 'ajax-load.php',
  				type: 'post',
  				success: function(data){
  					$('#data').html(data);
  				}
  			});
  		});
  	});
  </script>
</body>
</html>
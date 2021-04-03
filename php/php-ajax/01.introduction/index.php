<!-- 
		AJAX is about updating parts of a web page, without reloading the whole page.

		What is AJAX?
		AJAX = Asynchronous JavaScript and XML.

		AJAX is a technique for creating fast and dynamic web pages.

		AJAX allows web pages to be updated asynchronously by exchanging small amounts of data with the server behind the scenes. This means that it is possible to update parts of a web page, without reloading the whole page.

		Classic web pages, (which do not use AJAX) must reload the entire page if the content should change.

		Examples of applications using AJAX: Google Maps, Gmail, Youtube, and Facebook tabs.

		syntax in jquery:
		 					$(document).ready(function(){
								// event like click a button
								$('id with #').on('click',function(
									$.ajax(
										url: url of calling web page
										type: method through travel variables (get/post)
										data: variable that use in object type like {key:value}
										success: function(data){
											after run the target page the result will be.
										}
									);
								));
		 					});
 --> 
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
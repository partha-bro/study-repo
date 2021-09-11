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
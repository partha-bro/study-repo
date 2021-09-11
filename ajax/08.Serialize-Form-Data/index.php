<!-- 
	 Serialize() use to retrive data in string format.

   When we use ajax in form tag, then submit button type must be in button not type='submit'.
-->
<?php
	include_once '../01.introduction/header.php';
?>

  </table>
  <table align="center" border="5px" cellpadding="10" cellspacing="0">
    <form id="data-form">
      <tbody>
        <tr>
          <td>Name:</td>
          <td><input type="text" name="name" id="name"></td>
        </tr>
        <tr>
          <td>Age:</td>
          <td><input type="number" name="age" id="age"></td>
        </tr>
        <tr>
          <td>Gender:</td>
          <td><input type="test" name="gender" id="gender"></td>
        </tr>
        <tr>
          <td>Phone:</td>
          <td><input type="number" name="phone" id="phone"></td>
        </tr>
        <tr>
          <td>City</td>
          <td><input type="number" name="city" id="city"></td>
        </tr>
        <tr>
          <td><input type="reset" name="reset" id="reset"></td>
          <td><input type="button" name="submit" id="submit" value="Submit"></td>
        </tr>
      </tbody>
    </form>
  </table>

  <div id="result"></div>

	<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('#table').remove();

      $('#submit').on('click',function(){
        var name = $('#name').val();
        var age = $('#age').val();
        var gender = $('#gender').val();
        var phone = $('#phone').val();
        var city = $('#city').val();

        if (name == "" || age == "" || gender == "" || phone == "" || city == "") {
          $('#result').html('Please enter your all data');
        }else{
          console.log($('#data-form').serialize());
          $.ajax({
            url: 'form-data.php',
            type: 'post',
            data: $('#data-form').serialize(),
            success: function(data){
              $('#result').html(data);
            }
          });
        }
      });
    });
  	
  </script>
</body>
</html>
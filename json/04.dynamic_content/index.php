<!DOCTYPE html>
<html>
<head>
  <title>Data save in JSON</title>
</head>
<body>
  <div id="table-data">
    <form id="submit_form" method="POST">
      <table width="100%" cellpadding="10px" border="0">
        <tr>
          <td><label>Name</label></td>
          <td><input type="text" name="name" id="name"></td>
        </tr>
        <tr>
          <td><label>Age</label></td>
          <td><input type="number" name="age" id="age"></td>
        </tr>
        <tr>
          <td><label>City</label></td>
          <td><input type="text" name="city" id="city"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="button" name="submit" id="submit" value="Submit"></td>
        </tr>
      </table>
    </form>
  </div>

  <div id="result"></div>

  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('#submit').click(function(){
        var name = $('#name').val();
        var age = $('#age').val();
        var city = $('#city').val();

        if ( name != "" && age != "" && city != "" ) {
          $.ajax({
            url: 'save-form.php',
            type: 'POST',
            data: { name:name, age:age, city:city },
            success: function(data){
              $('#result').html(data);
            }

          });
        }else{
          $('#result').html('Please Enter your all details.');
        }
      });
    });
  </script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <title>Potluck Signup</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      // Load the table when the page first loads
      $.ajax({
        type: "GET",
        url: "submit.php",
        success: function(data){
          $('#signup-table').html(data);
        }
      });

      $('#signup-form').submit(function(event){
        event.preventDefault();
        $.ajax({
          type: "POST",
          url: "submit.php",
          data: $(this).serialize(),
          success: function(data){
            $('#signup-form').trigger("reset");
            $('#signup-table').html(data);
          }
        });
      });
    });
  </script>
</head>
<body>
  <h1>Potluck Signup</h1>
  <form id="signup-form" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" maxlength="20" required>
    <br><br>
    <label for="item">Item:</label>
    <input type="text" id="item" name="item" maxlength="50" required>
    <br><br>
    <input type="submit" value="Submit">
  </form>
  <br>
  <div id="signup-table"></div> <!-- display table here -->
</body>
</html>


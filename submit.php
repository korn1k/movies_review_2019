<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Submit page</title>
  </head>
  <body>
    <div class='container'>
      <h1 style='text-align: center;'>Movie selector is here to check you!</h1>
      <hr />
    <form method='POST' action='output.php'>
      <div class="form-group">
        <label for="movie"><h4>What is your favorite movie recently?</h4></label>
        <input type="text" value='House Jack Built' class="form-control" id="movie" name="movie">
      </div>
      <h4>Grade it respectively to your taste:</h4>
      <label class="radio">
        <input type="radio" value='Could be better [1]' name="grade"> Could be better [1]
      </label><br />
      <label class="radio">
        <input type="radio" value='Should be watched [2]' name="grade"> Should be watched [2]
      </label><br />
      <label class="radio">
        <input type="radio" value='Must be watched [3]' name="grade"> Must be watched [3]
      </label><br />
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <hr />
</div>
<?php
      session_start();
      // unset($_SESSION['count']);
      if (isset($_SESSION['count']) && $_SESSION['count'] === 3) {
        echo '<script>alert("Your session for today is expired!");</script>';
        echo "<script>document.querySelector('.container').textContent = 'Sorry, dude! But Not today. Your limit has been expired! Waiting for you tomorrow.';</script>";
      }
  ?>
  </body>
</html>
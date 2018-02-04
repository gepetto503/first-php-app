<?php
  $title = "form";

  include('includes/header.php');
  require_once('includes/functions.php');
  include('includes/guitar-arrays.php');

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    echo $_POST['email'];

  }


?>

<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h1>Post Input</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <form action="" method="POST">
        <div class="form-group">
          <label for="email">Email</label>
          <input class="form-control" type="text" name="email" value="email">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input class="form-control" type="text" name="password" value="password">
        </div>
        <div class="form-group">
          <input type="submit" value="submit">
        </div>
      </form>
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>

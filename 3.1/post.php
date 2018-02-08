<?php
  $title = "form";

  include('../includes/header.php');
  require_once('../includes/functions.php');
  include('../includes/guitar-arrays.php');

//this stops the code from trying to execute echo $_POST['email']; when you load the page, which is a get request, not a post request.  it makes the code wait until you make a post request to try to execute that line of code.
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //validates the email inputted.  the function evaluates to true/false and that is stored in the variable
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if($email == false) {
      $status = 'Please enter a valid email address';
    }

    //print email to the screen
    //'email' refers to the name attribute on the form.  this grabs the value of whichever form element has the name attribute of email
    echo $_POST['email'];
  }

//say we had multiple forms on the page.  this will determine which form was submitted and echo stuff based on that.  'login' is the value of the name attribute on the submit button for the form that i'm targetting
if(isset($_POST['login'])) {
  //show the contents of the whole post request on the screen using out output function
  output($_POST);
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
          <input type="submit" name= "login" value="submit">
        </div>
      </form>
    </div>
    <div class="row">
      <div class="col-lg-12 text-center">
        <?php
        if (isset($status)) {
          echo $status;
        }
         ?>
      </div>
    </div>
  </div>
</div>

<?php include('../includes/footer.php'); ?>

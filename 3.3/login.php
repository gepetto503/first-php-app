<?php
  $title = "form";
  session_start();

  require_once('../includes/config.php');
  require_once('../includes/functions.php');

  if(is_user_authenticated()){
    redirect('admin.php');
    die();
  }

  //this stops the code from trying to execute echo $_POST['email']; when you load the page, which is a get request, not a post request.  it makes the code wait until you make a post request to try to execute that line of code.
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //validates the email inputted.  the function evaluates to true/false and that is stored in the variable
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];//to do: validate this!

    //compare with data store
    //evaluate whether input matches data in our config file, and if it does...
    if (authenticate_user($email, $password)) {
      //set session data email property to $email
      $_SESSION['email']=$email;
      //calls our redirect function to set header
      redirect('admin.php');
      die();
      //if it doesn't...
    } else {
      $status = "the provided credentials didn't work";
    }

    if($email == false) {
      $status = 'Please enter a valid email address';
    }
  }
  //'headers for the request need to be set before we send our html to the browser'.. so that somehow means we need to put this include for our htmls header (not the request header, totally different) down here..
  include('../includes/header.php');
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

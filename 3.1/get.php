<?php
  $title = "form";

  //bring in html header, functions and guitar arrays
  include('../includes/header.php');
  require_once('../includes/functions.php');
  include('../includes/guitar-arrays.php');

  //takes the category parameter from the url string and stores it
  $category = $_GET['category'];

  //makes sure product_is an integer
  $product_id = filter_input(INPUT_GET, 'productid', FILTER_VALIDATE_INT);

  //kill the page if something HAS been input for product id in the query string, but it's not an integer.  so the page loads if you haven't put anything, and it loads if there's an integer, but not otherwise
  if ($category == false && $category != null) {
    $category = 1;
  }
  if ($product_id == false && $product_id != null) {
    $category = 10;
  }

?>

<div class="container">
  <div class="row">
    <div class="col-md-6 text-center">
      <h1>Product ID<h1>
        <!-- output the variable -->
      <p><?= $product_id;?></p>
    </div>
    <div class="col-md-6 text-center">
      <h1>Category<h1>
        <!-- output the variable -->
      <p><?= $category;?></p>
    </div>
  </div>
</div>

<?php include('../includes/footer.php'); ?>

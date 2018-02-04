<?php
  $title = "form";

  include('../includes/header.php');
  require_once('../includes/functions.php');
  include('../includes/guitar-arrays.php');

  $product_id = filter_input(INPUT_GET, 'productid', FILTER_VALIDATE_INT);

  if ($product_id == false && $product_id != null) {
    die();
  }

?>

<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h1>Product ID<h1>
      <p><?= $product_id;?></p>
    </div>
  </div>
</div>

<?php include('../includes/footer.php'); ?>

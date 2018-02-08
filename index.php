<?php
  // title variable needs to be defined here so the included header file knows what it is
  $title = "php stuff";

  //these are included outside files so we can just plop them in
  include('includes/header.php');
  require_once('includes/functions.php');
  include('includes/guitar-arrays.php');


?>

    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">For Each Loop</h1>
        </div>
      </div>
      <div class="row">
        <table class="table table-striped">
          <!-- inside the table... -->
          <?php
            foreach ($favoriteGuitars as $guitar) {
              echo "<tr><td>$guitar</td></tr>";
            }
          ?>
        </table>
        <!-- key value pair guitar table -->
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1 class="mt-5">For Each Loop with Key Value Pairs</h1>
          </div>
        </div>
        <!-- the table... -->
        <table class="table table-striped">
          <?php
            foreach ($kvpGuitars as $key => $guitar) {
              echo "<tr><td>$key</td><td>$guitar</td></tr>";
            }
          ?>
        </table>
        <!-- for loop -->
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1 class="mt-5">For Loop</h1>
          </div>
        </div>
        <!-- the table... -->
        <table class="table table-striped">
          <?php
            for ($i = 0; $i < count($favoriteGuitars); $i++) {
              $guitar = $favoriteGuitars[$i];
              echo "<tr><td>$guitar</td></tr>";
            }
          ?>
        </table>
      </div>
    </div>
    <?php include('includes/footer.php'); ?>

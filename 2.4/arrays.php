<?php

// //regular array
// $guitars = ['Vela', 'Explorer', 'Strat'];
//
// //render the items inside guitars array in the browser
// print_r($guitars);
//
// //if there's a guitar in index 3 of guitars array, print that guitar to the screen.
// //otherwise, print an explanation/error
// if (isset($guitars[3])) {
//   echo $guitar[3];
// } else {
//   echo 'there is no such guitar';
// }

//associative array, with a key and value for each index
$guitars2 = [
  'prs' => 'Vela',
  'gibson' => 'Explorer',
  'fender' => 'Strat'
];

//if array guitars2 has an index with key 'prs', print that guitar to screen
if (isset($guitars2['prs'])) {
  echo $guitars2['prs'];
} else {
  echo 'guitar does not exist';
}

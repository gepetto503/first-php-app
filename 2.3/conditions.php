<?php

// $result = 1 < 3;

$first_name = 'Brendan';
$last_name = 'Hanna';

if ($first_name == 'brendan' || $last_name == "Hanna") {
  echo 'first name equals brendan OR last name equals Hanna';
} else if ($first_name != 'Brendan' && $last_name == "Hanna") {
  echo 'first name does not equal Brendan and last name equals Hanna';
} else {
  echo 'The conditions are all false';
}

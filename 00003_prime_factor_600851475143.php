<?php

function largest_prime_factor($subject) {
  $i = 1;
  while ($i <= $subject) {
    $i++;
    if ($subject % $i == 0) {
      $largest_factor = $subject / $i;
      $smallest_factor = $i;
      break;
    }
  }
  return $largest_factor;
}

$subject = 600851475143;

echo largest_prime_factor($subject);

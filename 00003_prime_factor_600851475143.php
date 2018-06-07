<?php

/**
 * @file
 * Function to find the largest prime factor of a number.
 */

/**
 * Returns the largest prime factor of a given number.
 *
 * @param int $n
 *   Given number.
 *
 * @return int
 *   Largest prime factor.
 */
function largest_prime_factor($n) {
  $i = 2;
  while ($i <= sqrt($n)) {
    if ($n % $i == 0) {
      $bigger_factor = $n / $i;
      $largest_prime_factor = largest_prime_factor($bigger_factor);
      break;
    }
    $i++;
  }
  if (!isset($largest_prime_factor)) {
    $largest_prime_factor = $n;
  }
  return $largest_prime_factor;
}

echo largest_prime_factor(600851475143);

<?php

/**
 * Returns sum or all natural numbers below a number that are multiple of 3 or 5.
 *
 * Time Complexity: O(N/3 + N/5).
 *
 * @param int $n
 *
 * @return int
 */
function sum_multiple_3_5($n) {
  $sum3 = 0;
  $sum5 = 0;
  for ($i = 3; $i < $n; $i += 3) {
    $sum3 += $i;
  }
  for ($i = 5; $i < $n; $i += 5) {
    if ($i % 3 !== 0) {
      $sum5 += $i;
    }
  }
  return $sum3 + $sum5;
}

echo sum_multiple_3_5(1000);

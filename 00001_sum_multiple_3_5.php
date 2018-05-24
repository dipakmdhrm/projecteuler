<?php

/**
 * Calculate sum or all natural numbers below $n that are multiple of 3 or 5.
 * Time Complexity: O(N).
 * @param int $n
 *   
 * @return int
 */
function sum_multiple_3_5($n) {
  $sum = 0;

  for ($i = 1; $i < $n; $i++) { 
    if ($i % 3 == 0 ) {
      $sum += $i;
    }    
    elseif ($i % 5 == 0) {
      $sum += $i;
    }
  }
  return $sum;
}

echo sum_multiple_3_5(1000);

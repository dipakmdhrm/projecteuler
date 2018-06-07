<?php

/**
 * Returns sum or all even fibonacci numbers below a given number.
 *
 * Time Complexity: ???.
 *
 * @param int $n
 *
 * @return int
 */
function sum_even_fibonacci($n) {
  $fib1 = 1;
  $fib2 = 2;
  $sum = $fib2;
  while ($fib2 <= $n) {
    $temp = $fib1;
    $fib1 = $fib2;
    $fib2 = $temp + $fib1;
    if ($fib2 % 2 === 0) {
      $sum += $fib2;
    }
  }

  return $sum;
}

echo sum_even_fibonacci(4000000);

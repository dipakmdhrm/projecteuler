<?php

$subject = 600851475143;

$i = 2;
while ($i <= $subject) {
  if ($subject % $i == 0) {
    echo('<pre>');
    print_r($subject / $i);
    echo '<br>';
    print_r($i);
    break;
  }
  $i++;
}

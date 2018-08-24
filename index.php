<?php
print "Hello, World! php version is " . PHP_VERSION . "<hr>";
?>

<?php
  $x = 0.0001;
  for ($i = 0; $i <= 1000000; $i++) {
    $x += sqrt($x);
  }
  echo "OK!";
?>

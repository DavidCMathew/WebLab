<?php
print "<h3> REFRESH PAGE </h3>";
$name="counter.txt";
$count = file_get_contents($name);
$count++;
echo 'Total visits: '.$count;
file_put_contents($name, $count);
?>
<?php
/*
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
//$line = trim(fgets(STDIN)); // reads one line from STDIN
fscanf(STDIN, "%d\n", $testcase); // reads number from STDIN
for($i=0; $i<$testcase; $i++)
{
   $line = trim(fgets(STDIN));
   $result = strrev($line);
 
   fprintf(STDOUT, "%s\n", $result);
}

*/

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
//$line = trim(fgets(STDIN)); // reads one line from STDIN
fscanf(STDIN, "%d\n", $n); // reads number from STDIN
fscanf(STDIN, "%d\n", $e); // reads number from STDIN

$graph = array();

for ($i = 0; $i < $n; $i++){

    for($j=0; $j<5; $j++){

      if($i<$j) 
        echo "1";
      
      else
      echo "0";


    }
    echo "<br>";
}

$a = "23, 44, 70, 25, 90, 17";
$c = array();
$avg = 0;

echo "For the input : $a";
echo "<br/>";

$c = explode (", ", $a);

$size = sizeof($c);

for($i = 0; $i < sizeof($c); $i++){

  $avg = $avg  + $c[$i];

}

echo "The average is: ".round($avg/$size,2);


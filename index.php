<?php

/*


echo "<br/>";
echo "<br/>";

for( $i=1; $i<=7; $i++){

    for($j=1; $j<=$i; $j++){
      echo "* " ;
    }

    echo "<br/> " ;

}


echo "<br/>";
echo "<br/>";

$noOfRows = 15;
$noOfCol = $noOfRows - 1;

for( $row=1; $row <= $noOfRows ; $row++){

    for($col1 = 1; $col1 <= $noOfCol; $col1++){
      echo "-" ;
    }
   $noOfCol--;
   for($col2=1; $col2<=$row; $col2++){
      echo "*";
   }

   echo "<br/> " ;
}

echo "<br/>";
echo "<br/>";

$break = 1;

while($break <=100){
    $break++;

    echo ":";

    if( $break > 10 ){
       break;
    }

echo "<br/>";
    
}



$newNumber = 0;

while( $newNumber < 10 ){

  $newNumber = $newNumber + 1;

  if($newNumber % 2 == 0 ){

      continue;

  }
  echo $newNumber;
}



$UnchangeNumber = 5;
$ChangeNumber = 1;

while( $ChangeNumber <=10 ){

    echo "$UnchangeNumber x $ChangeNumber = ", $UnchangeNumber * $ChangeNumber ;

    $ChangeNumber = $ChangeNumber + 1;

    echo "<br/>";

}


$number = 5;
$inter =1;

for(; ;){
  if($inter > 10){
    break;
  }
  echo " $number x $inter = ", $number * $inter ;
  $inter = $inter + 1;
  echo "<br/>";
}

$Nw = 0;
$n = 5;

for( $i = 1; $i <= 10; $i = $i + 1 ){

    $Nw = $Nw + $n;

    echo " $n + $i =  ",  $Nw ;

    echo "<br/>";
}



for ( $n = 1; $n <= 10; $n = $n + 1 ){

    for ( $i = 1; $i <= 10; $i = $i + 1 ){

      echo "$n x $i = <br/>";
    }


      echo "<br/>";

}

$n = 1;

while( $n <= 100){

   if( $n % 2 == 0 ){
    echo "Print $n <br/>";
   }
  
  $n = $n + 1 ;    
  
}



$n = 7;

for( $n = 7; $n > 0; $n--){

  $s = $n / 2;
  $t = $n - ($s*2);

  for( $j = $s; $j > 0; $j-- ){
    echo " ";
  }
  for($i = $t; $i > 0 ; $i--){
    echo "*";
    
  }
  echo "<br/>";

}

//daimon shape code do
$n = 7;
for( $m = $n; $m > 0; $m-=2){

$s = floor($m / 2);
$t = $n - ($s*2);

for( $j = $s; $j > 0; $j-- ){
echo "&nbsp;";
}
for($i = $t; $i > 0 ; $i--){
echo "*";

}
echo "<br/>";

}


 

class foo{

  public $v2 = <<<XOT
hLLOW WORLD HOW YOU 
I AM FOR CTG.
XOT;

}

$x = new foo();
echo $x->v2;


$i= 1; $j = $i; $k=0;
for($i = 1; $i<=3; $i++){
  for($j = $i; $j<=4; $j++){
    $k = $i+$j+$k;
    echo"i = $i j = $j and k = $k " ;
  }
  echo "<br />";
}
echo"i = $i j = $j and k = $k" ;

for($i=1;$i<=5;$i++){

  for( $j=1; $j<=5; $j++){
    echo "*";
}
echo "<br/>";
}

 class Stack
 {

   private $Stack;
   private $position;

   function __construct()
   {
     $this->stack = array();
     $this->position = 0;
   }

   function push($item)
   {
     $this->stack[$this->position++] = $item;
   }

   function pop()
   {
     return $this->stack[--$this->position];
   }

   function debug()
   {
     var_dump($this->stack);
   }

 }

 $stack = new Stack();

 $stack->push(1);
 $stack->push(2);
 $stack->push(3);


 $stack->pop();
 $stack->pop();
 $stack->pop();

*/

//.........................................
 

$a = "23, 44, 70, 25, 90, 17";
$c = array();
$avg = 0;

echo "For the input : $a";
echo "<br/>";











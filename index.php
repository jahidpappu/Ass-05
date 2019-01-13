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



//.........................................
 

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


$limit = 1000;
echo "For upto $limit the prime numbers are : ";

for( $i=1; $i<=$limit; $i++){

  $count = 0;
  $n = $i;

  //Less than N as we dont want it to be divided by N;
  for ($j =1; $j<$n; $j++){

     if( $n%$j == 0 && $j !=1 ){

        $count++;

      }
  }
  if( $count == 0){
    if($i !=1 ){
      echo ", ";
    }
    echo "$n";
  }

}

$a = "I love Bangladesh, I love tiger";
$b = str_replace(",","",$a);
$c = str_replace(".","",$b);
$d = array();

$d = explode(" ", $c);
echo "Using the funciton";
echo "<br />";
print_r(array_count_values($d));

echo "<br />";

for( $i = 0; $i < sizeof($d);  $i++){
  $count = 0;
  for ($j=0; $j<sizeof($d); $j++){
      if($d[$i] == $d[$j]){
        $count++;
      }
  }
  echo "$d[$i] = $count";
  echo "<br/>";
}




 echo "Today is: ". date("Y/m/d")."\n";
 echo "Today is: ". date("l")."\n";
 echo "Today is: ". date("h:i:aa")."\n";

 //include;


//include ('header.php');

//file handling

$ourfile = fopen ("text.txt", "r") or die ("file not found");;
echo fgetc($ourfile, filesize("text.txt"));
fclose($ourfile);

$ourfile = fopen ("text.txt", "r") or die ("file not found");;
while(!feof($ourfile)){
  echo fgets($ourfile);
}
fclose($ourfile);

$createfile = fopen("text.txt", "w") or die ("file not found");
$one = "jahid is my name";
fwrite($createfile, $one);

fclose($$createfile);

if(isset($_FILES['image'])){
    $filename = $_FILES['image']['name'];
    $filetemp = $_FILES['image']['tmp_name'];
    move_uploaded_file($filetemp, "images/".$filename);
    echo "Image uplaoded successfulle";
}
?>
<form action ="" method="POST" enctype="multipart/form-data" >

<input type="file" name ="image">
<input type="submit" value="Submit">

</form>

session_start();

$_SESSION['user'] = "delowar";
$_SESSION['password'] ="hoaain";

echo "User Name " .$_SESSION['user']. "\n";
echo "Password is" .$_SESSION[''];

session_destroy();

if(!isset($_COOKIE['visited'])){
  setcookie("visited","1", time()+86400,"/") or die("could not set cookie!");  
  echo "This is your sucess";
}else{
  echo "you are old viistor";
}
foreach ($filter as $id => $filer) {
  echo '<tr><td>' . $filter .'<td></td>'. filter_id() . '</td> <tr>;';
}



$ip = "192.168.20.15";

if(filter_var($ip, FILTER_VALIDATE_IP)){
  echo "$ip is valid email address";
}else{
  echo "$ip is not valid email address";
}
*/

$str = "<h1> i am learning php</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;

echo "<br/>";

$int = 50;
if(filter_var($int, FILTER_VALIDATE_INT)){
  echo "This is interger value";
}else{
  echo "It is not interger Value";
}
echo "<br/>";
$ip = "172.0.0.15";
if(filter_var($ip, FILTER_VALIDATE_IP)){
  echo "This is valide ip address";
}else{
  echo "It is not valide ip address";
}


$intnum = 300;
$min = 1;
$max = 200;

if(filter_var($intum, FILTER_VALIDATE_INT, array("option" => array("Main_Range" =>$min,
"max_range"=>$max))) === false){
  echo "It is not valid";
}else{
  echo "this is valied";
}












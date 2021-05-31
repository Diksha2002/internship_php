
<?php
$cars=array("Volvo","BMW","Toyota");
echo count($cars);
// count() function
?>

<?php
//array_count_values() function
$a=array("A","apple","orrange","A","banana");
print_r(array_count_values($a));
?>

<?php
//array_sum() function
$a=array(5,15,25);
echo array_sum($a);
?>

<?php
//array_product() function
$a=array(5,5);
echo(array_product($a));
?>

<?php
//array_push() function
$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a);
?>

<?php
//array_pop() function
$a=array("red","green","blue");
array_pop($a);
print_r($a);
?>

<?php
//array_key_exist() function
$a=array("Volvo"=>"XC90","BMW"=>"X5");
if (array_key_exists("Volvo",$a))
  {
  echo "Key exists!";
  }
else
  {
  echo "Key does not exist!";
  }
?>

<?php
//array_combine() function
$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

$c=array_combine($fname,$age);
print_r($c);
?>

<?php
//array_diff() function
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
print_r($result);
?>

<?php
//krsort()
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
krsort($age);
?>

<?php
//shuffle()
$my_array = array("red","green","blue","yellow","purple");

shuffle($my_array);
print_r($my_array);
?>

<?php
//end
$people = array("Peter", "Joe", "Glenn", "Cleveland");
echo current($people) . "<br>";
echo end($people);
?>

<?php
//compact
$firstname = "Peter";
$lastname = "Griffin";
$age = "41";

$result = compact("firstname", "lastname", "age");

print_r($result);
?>

<?php
//array_flip()
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$result=array_flip($a1);
print_r($result);
?>

<?php
//array_change_key_case 
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
print_r(array_change_key_case($age,CASE_UPPER));
?>

<?php
//array_values()
$a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
print_r(array_values($a));
?>

<?php
//explode()
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));
?>

<?php
//implode
$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr);
?>

<?php
//ray_intersect()
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_intersect($a1,$a2);
print_r($result);
?>

<?php
//array_reverse()
$a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
print_r(array_reverse($a));
?>

<?php
//in array()
$people = array("Peter", "Joe", "Glenn", "Cleveland");

if (in_array("Glenn", $people))
  {
  echo "Match found";
  }
else
  {
  echo "Match not found";
  }
?>

<?php
//array_unique()
$a=array("a"=>"red","b"=>"green","c"=>"red");
print_r(array_unique($a));
?>

<?php
//array_rand()
$a=array("red","green","blue","yellow","brown");
$random_keys=array_rand($a,3);
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]."<br>";
echo $a[$random_keys[2]];
?>

<?php
//array_merge()
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2));
?>

<?php
//array_search()
$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("red",$a);
?>

<?php
//range function
$number = range(0,5);
print_r ($number);
?>

<?php
//sort()
$cars=array("Volvo","BMW","Toyota");
sort($cars);
?>

<?php
//rsort()
$cars=array("Volvo","BMW","Toyota");
rsort($cars);
?>

<?php
//asort()
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
asort($age);
?>

<?php
//ksort()
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
ksort($age);
?>

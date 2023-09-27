<!DOCTYPE html>
<html>
<body>

<?php
$a = array(
  "p1" => "apple",
  "p2" => "kiwi",
  "p3" => "strawberry");
print_r($a);
echo"<br>";

echo count($a);
echo"<br>";
foreach($a as $x => $x_value){
echo"key= .$x.value =.$x_value.";
echo"<br>";
}
echo array_values($a)[0];
?>
<?body>
</html>
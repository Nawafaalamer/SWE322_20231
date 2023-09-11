<?php
echo "<h1> basic calculator</h1>";


function add($x , $y){
    return ($x + $y);
}
function subtract ($x , $y) {
    return ($x - $y);

}
function multiply ($x , $y) {
    return ($x * $y);
}
function diviede ($x , $y) {
    return ($x / $y);
}
echo"2/4=" . diviede(4,2) ."<br>";
echo "4*5=".multiply(4,5)."<br>";
echo "5-4=".subtract(5,4)."<br>";
echo"3+8=".add(3,8)."<br>";

?>


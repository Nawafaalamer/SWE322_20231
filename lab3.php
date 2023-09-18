<!DOCTYPE HTML>
<html>
    <head>
        <title> classmates</title>
        <h1>classmates</h1>
        <style>
            li{
                color: blue;

            }
        </style>
</head>
<body>
    <?php
$classmates= array("ahmed","faris","mohammed","nawaf alamer");
echo "<h2> course swe322 clasmates are</h2>";
echo"<ul>";
$arr_length=count($classmates);
for($i=0;$i<$arr_length;$i++){
    echo "<li>$classmates[$i]</li>";
}



echo "<ul>";
echo "<hr>";
echo "<h3>courses i took <h3>";
$course=array(
"cis103"=>"programming 1",
"mth103"=>"calclus"
);
echo "<table border =3>";
echo"<tr>";
echo "<th> course code</th>";
echo"<th> course name</th>";
echo "</tr>";
foreach ($course as $c=> $c_value){
    echo "<tr>";
    echo "<td>$c</td>";
    echo "<td>$c_value </td>";
    echo "</tr>";
    
}

 

    ?>
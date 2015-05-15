<?php 
function sqrCircle($r){
	$pi = pi();
	echo $sqr = $pi *  pow($r, 2);
	
	return $sqr;
}
 
 echo "<br />";
 echo "площадь круга = ";
 sqrCircle(30);
 
 
 function sqrRectangle($a, $b){
 	echo $sqr = $a * $b;
 	
 	return $sqr;
 }
 echo "<br />";
 echo "площадь прямоугольника = ";
 sqrRectangle(2, 3);

 function sqrTriangle($l, $r, $angle ){
 	echo $sqr = ($l * $r * sin(deg2rad($angle)))/2;
 	
 	return $sqr;
 }
 
 echo "<br />";
 echo "площадь треугольника = ";
 sqrTriangle(3, 5, 60);
 

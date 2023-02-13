<!DOCTYPE html>
<html>
<body>

<?php
$nombres = array(5,12,4,3,22,88,54,69,75); 
echo "Le tableau avant inversement : "."<br>";
for($i=0; $i< count($nombres);$i++){
    echo $nombres[$i]."__";
}
for($i=0; $i< count($nombres)/2;$i++){
    $temp = $nombres[$i];
    $nombres[$i] = $nombres[count($nombres)-$i-1];
    $nombres[count($nombres)-$i-1] = $temp;
}
echo "<br>"."Le tableau apres inversement : "."<br>";
for($i=0; $i< count($nombres);$i++){
    echo $nombres[$i]."__";
}
?>

</body>
</html>
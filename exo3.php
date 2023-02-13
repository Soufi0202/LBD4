<!DOCTYPE html>
<html>
<body>

<?php
$notes = array(11,20,14,5,17,13,7,9,10,18); 
$count = 0;
$cnt = 0;
$pnt = 0;
echo "<h3>Q1</h3>";
echo "Les elements du tableau  :"."<br>";
for($i=0;$i<count($notes);$i++){
	echo "Note ".($i+1)." : ".$notes[$i]."<br>";
}

echo "<h3>Q2</h3>";

foreach ($notes as $note) {
    $count = $count + $note;
    if($note>10){
        $cnt++;
    }
    if($note==20){
        $pnt++;
    }
}
echo "La moyenne est :".$count/count($notes);


echo "<h3>Q3</h3>";
echo "Le nombre d'etudiants qui ont eu plus de 10 est : ".$cnt;


echo "<h3>Q4</h3>";
echo "Le nombre d'etudiants qui ont eu 20 est : ".$pnt;

echo "<h3>Q5</h3>";
$notes_sort = array();
for($i = 0; $i < count($notes); $i++ ) {
    for($j = 0; $j < count($notes)-1; $j++) {
    if($notes[$j] > $notes[$j+1]){
    $temp = $notes[$j+1];
    $notes[$j+1] = $notes[$j];
    $notes[$j] = $temp;
    }
    }
   }
echo "Le tableau apres sort est : "."<br>";
for($i=0;$i<count($notes);$i++){
    echo $notes[$i]."______";
}

echo "<h3>Q6</h3>";
$c = 0;
echo "On va chercher la valeur 20."."<br>";
for($a=0 ; $a < count($notes) ;$a++){
    if($notes[$a]==20){
        $r = $a;
    }else{
        $c++;
    }
}
if($c==10){
    echo "On a pas trouve votre valeur";
}else{
    echo "On a trouve votre valeur et son indice est : ".$r;
}


?>

</body>
</html>
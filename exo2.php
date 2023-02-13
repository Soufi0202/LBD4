<!DOCTYPE html>
<html>
<body>

<?php
$moisFr = array(1=>'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin','Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'); 
$count = 1;
echo "<h3>Q1</h3>";
echo "Les elements du tableau en utilisant for :"."<br>";
for($i=1;$i<=count($moisFr);$i++){
	echo $i."-".$moisFr[$i]."<br>";
}
echo "Les elements du tableau en utilisant foreach :"."<br>";
foreach ($moisFr as $value) {
    echo $count."-".$value."<br>";
    $count++;
}
echo "<h3>Q2</h3>";
echo "Le mois en utilisant la fonction date et intval est : ".$moisFr[intval(date('m'))];
echo "<h3>Q4</h3>";
echo "On remarque qu on peut pas afficher le tableau a partir du Juillet.La solution est de commencer par l'indice 13 et 12 a la taille du tableau."."<br>";
$moisFr = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin',13=> 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'); 
print_r($moisFr);
for($i=1;$i<=count($moisFr);$i++){
	echo $i."-".$moisFr[$i]."<br>";
}
echo "On peut utiliser foreach : "."<br>";
$i=1;
foreach($moisFr as $mois){
    echo $i."_".$mois."<br>";
    $i++;
}
?>

</body>
</html>
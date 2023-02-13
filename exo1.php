<!DOCTYPE html>
<html>
<body>

<?php
$txt = array(1,25,24,11,48,75,0,32,22,0,11,1,50,48);
echo "<h3>Q1</h3>";
echo "Les elements du tableau :";
for ($x = 0; $x <= count($txt); $x++) {
    echo $txt[$x]."____";
    }
echo "<h3>Q2</h3>";
echo "Les elements du tableau apres sort :";
sort($txt);
for ($x = 0; $x <= count($txt); $x++) {
    echo $txt[$x]."____";
    }
echo "<h3>Q3</h3>";
echo "Les elements du tableau apres supprimer les doublons :";
$txxt = array();
array_push($txxt,$txt[0]);
for ($x = 1; $x <= count($txt); $x++) {
  if($txt[$x]!=$txt[$x-1]){
	array_push($txxt,$txt[$x]);
  }
}
for ($x = 0; $x <= count($txxt); $x++) {
echo $txxt[$x]."____";
}


?>

</body>
</html>
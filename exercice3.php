<!DOCTYPE html>
<html>
<body>

<?php
$students = array("Ahmed" => 14,"Joudia" => 19,"Samir" => 14,"Yassir" => 14.5,"Aya" => 12,"Ilham" => 16,"Yassine" => 17); 
echo "<h3>Q1</h3>";
echo "On a declaré le tableau";

echo "<h3>Q2</h3>";
foreach($students as $key => $val){
    echo "Nom : ".$key."___"."Note = ".$val."<br>";
}
echo "<h3>Q3</h3>";

echo '<table>';

echo '<tr>';
      echo '<td>'; 
      echo "Clef";
      echo '</td>';
      echo '<td>'; 
      echo " | ";
      echo '</td>';
      echo '<td>'; 
      echo "Valeur";
      echo '</td>';
echo '</tr>';

   foreach($students as $key => $val){
    echo '<tr>';
    echo '<td>'; 
    echo $key;
    echo '</td>';
    echo '<td>'; 
    echo " | ";
    echo '</td>';
    echo '<td>'; 
    echo $val;
    echo '</td>';
    echo '</tr>';
   }

echo '</table>';


echo "<h3>Q4</h3>";
$max = $students["Ahmed"];
$name = "";
foreach($students as $key => $val){
    if($val>=$max){
        $max = $val;
        $name = $key;
    }
}
echo "L'etudiant qui a eu la plus grande note est : ".$name;


echo "<h3>Q5</h3>";
$min = $students["Ahmed"];
$name = "";
foreach($students as $key => $val){
    if($val<=$min){
        $min = $val;
        $name = $key;
    }
}
echo "L'etudiant qui a eu la note min est : ".$name;


echo "<h3>Q6</h3>";
$sum = 0;
foreach($students as $key => $val){
    $sum = $sum + $val;
}
echo "La moyenne est : ".$sum/count($students);
?>

</body>
</html>
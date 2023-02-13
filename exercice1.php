<!DOCTYPE html>
<html>
<body>

<?php
$ages = array("Soufiane" => 20,"Omar" => 18,"Ahmed" => 34,"Sami" => 19); 
echo "<h3>Q1</h3>";
echo "On a declaré le tableau.";

echo "<h3>Q2</h3>";
foreach($ages as $key => $val){
    echo $key." "."a"." ".$val." "."ans."."<br>";
}
echo "<h3>Q3</h3>";

echo '<table>';

echo '<tr>';
      echo '<td>'; 
      echo "Nom";
      echo '</td>';
      echo '<td>'; 
      echo " | ";
      echo '</td>';
      echo '<td>'; 
      echo "Age";
      echo '</td>';
echo '</tr>';

   foreach($ages as $key => $val){
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
?>

</body>
</html>
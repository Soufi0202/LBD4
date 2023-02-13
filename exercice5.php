<!DOCTYPE html>
<html>
<body>

<?php
$capitales = array("Maroc" => "Rabat","Allemagne" => "Berlin","Serbie" => "Belgrade","Bresil" => "Brasilia","Slovaquie" => "Bratislava","Italie" => "Rome","Venezuela" => "Caracas","Moldavie" => "Chisanu","Guyana" => "Georgetown","Vietnam" => "Hanoi","Zimbabwe" => "Harare","Cuba" => "La Havane","Pays-Bas" => "La Haye","Finlande" => "Helsinki");
echo "<h3>Q1</h3>";
foreach($capitales as $key => $capitale){
    echo "Pays : ".$key.", "."et sa capitale est : ".$capitale."."."<br>";
}
echo "<h3>Q2</h3>";
echo '<table>';

echo '<tr>';
      echo '<td style="color: red">'; 
      echo "Pays";
      echo '</td>';
      echo '<td style="color: red">'; 
      echo " | ";
      echo '</td>';
      echo '<td style="color: red">'; 
      echo "Capitale";
      echo '</td>';
echo '</tr>';

   foreach($capitales as $key => $capitale){
    echo '<tr>';
    echo '<td>'; 
    echo $key;
    echo '</td>';
    echo '<td style="color: red">'; 
    echo " | ";
    echo '</td>';
    echo '<td>'; 
    echo $capitale;
    echo '</td>';
    echo '</tr>';
   }

echo '</table>';


echo "<h3>Q3</h3>";
$country = "Italie"; //vous pouvez choisir le pays que vous voulez!
echo "La capitale de ".$country." est : ".$capitales[$country].".";
?>

</body>
</html>
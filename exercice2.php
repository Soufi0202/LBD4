<!DOCTYPE html>
<html>
<body>

<?php
$tab=array("PHP"=>"http://www.php.net","MySQL"=>"http://www.mysql.org","SQLite"=>"http://www.sqlite.org","HTML"=>"https://www.w3schools.com/html/default.asp","CSS"=>"https://www.w3schools.com/css/default.asp"); 
$rar = array_rand($tab,2);
print_r($rar);
echo "<br>"."La fonction array_rand nous retourne une clef aleatoire depuis le tableau.On peut ajouter un autre argument a cette fonction pour la forcer a choisir le nombre de cles aleatoires qu'on veut."
?>

</body>
</html>
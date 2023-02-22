<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>EX 7</title>
</head>
<body>
    <?php
    $students = array("ET123" => array("Nom" => "AB", "Prenom" => "AC", "Moyenne" => 17), "ET676" => array("Nom" => "BC", "Prenom" => "BD", "Moyenne" => 12), "ET989" => array("Nom" => "CD", "Prenom" => "CE", "Moyenne" => 9), "ET764" => array("Nom" => "DE", "Prenom" => "DF", "Moyenne" => 16.5));
    
    ?>
    <a href="show_student_infos.php?key1=ET123&key2=ET676&key3=ET989&key4=ET764" > Voir les info dans l'autre page :</a>
</body>
</html>

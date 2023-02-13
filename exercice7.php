<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX 7</title>
</head>
<body>
    <?php
    $students = array("ET123" => array("Nom" => "AB", "Prénom" => "AC", "Moyenne" => 17), "ET676" => array("Nom" => "BC", "Prénom" => "BD", "Moyenne" => 12), "ET989" => array("Nom" => "CD", "Prénom" => "CE", "Moyenne" => 9), "ET764" => array("Nom" => "DE", "Prénom" => "DF", "Moyenne" => 16.5));

    echo "<h3> Question 1 </h3>";
    $ind = 0;
    echo "<strong>"."Les étudiants sont : "."</strong>"."<br>";
    foreach($students as $student){
        echo "Code : ".array_keys($students)[$ind]."_____";
        echo "Nom : ".$student["Nom"]."_____";
        echo "Prénom : " . $student["Prénom"]."_____";
        echo "Moyenne : " . $student["Moyenne"]."<br>";
        $ind++;
    }

    echo "<h3> Question 2 </h3>";
    $max = $students["ET123"];
    foreach($students as $student){
        if($max["Moyenne"] < $student["Moyenne"]){
            $max = $student;
        }
    }
    echo "Nom : ".$max["Nom"]."_____";
    echo "Prénom : " . $max["Prénom"]."_____";
    echo "Moyenne : " . $max["Moyenne"]."_____"."est l'étudiant ayant la plus grande note de validation.";

    echo "<h3> Question 3 </h3>";
    $min = $students["ET123"];
    foreach($students as $student){
        if($student["Moyenne"] >= 10 && $student["Moyenne"] < $min["Moyenne"]){
            $min = $student;
        }
    }
    echo "Nom: ".$min["Nom"]."_____";
    echo "Prénom: " . $min["Prénom"]."_____";
    echo "Moyenne: " . $min["Moyenne"]."_____"."est l'étudiant ayant la plus petite note de validation.";

    echo "<h3> Question 4 </h3>";

    foreach($students as $student){
        if($student["Moyenne"] < 10){
            echo "Nom : ".$student["Nom"]."_____";
            echo "Prénom : " . $student["Prénom"]."_____";
            echo "Moyenne : " . $student["Moyenne"]."_____"."n'a pas réussi l'année."."<br>";
        }
    }
    ?>
</body>
</html>
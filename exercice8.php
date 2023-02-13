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
    $students = array("ET123" => array("Nom" => "AB", "Prénom" => "AC", "Notes" => array("Module1" => 12,"Module2" => 15)), "ET676" => array("Nom" => "BC", "Prénom" => "BD", "Notes" => array("Module1" => 10,"Module2" => 13)), "ET989" => array("Nom" => "CD", "Prénom" => "CE", "Notes" => array("Module1" => 9.5)), "ET764" => array("Nom" => "DE", "Prénom" => "DF", "Notes" => array("Module1" => 18,"Module2" => 11)));
    echo "<h3> Question 1 </h3>";
    echo "Tableau declaré";
    echo "<h3> Question 2 </h3>";
    $modules = array();
    foreach($students as $student){
        $max = $student["Notes"]["Module1"];
        $mod = "";
        foreach($student["Notes"] as $cle => $note){
            if($max <= $note){
                $max = $note;
                $mod = $cle;
            }
            
        }
        array_push($modules,$mod);
        

    }
    foreach($students as $student){
        $min = $student["Notes"]["Module1"];
        $mod = "";
        foreach($student["Notes"] as $cle => $note){
            if($min >= $note){
                $min = $note;
                $mod = $cle;
            }
            
        }
        array_push($modules,$mod);
        

    }
    $i = 0;
    foreach($students as $student){
        echo "L'étudiant"." ".$student["Nom"]." "."a : "."<br>";
        echo "La plus grande note dans : ".$modules[$i]."<br>";
        echo "La plus petite note dans : ".$modules[$i+(count($modules)/2)]."<br>";
        $i++;
    }
    

    echo "<h3> Question 4 </h3>";
    $final = array();
    foreach($students as $student){
        $i=0;
        foreach($student["Notes"] as $note){
            $i = $i + $note;
        }
        array_push($final,$i/count($student["Notes"]));
    }
    $count = 0;
    foreach($students as $student){
        if($final[$count]>=10){
            echo $student["Nom"]." a réussi l'année universitaire,avec la moyenne : ".$final[$count]."<br>";
        }else{
            echo $student["Nom"]." n'a pas réussi l'année universitaire,avec la moyenne : ".$final[$count]."<br>";
        }
        $count++;
    }
    
    ?>
</body>
</html>
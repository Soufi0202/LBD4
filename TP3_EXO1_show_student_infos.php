<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $students = array("ET123" => array("Nom" => "AB", "Prenom" => "AC", "Moyenne" => 17), "ET676" => array("Nom" => "BC", "Prenom" => "BD", "Moyenne" => 12), "ET989" => array("Nom" => "CD", "Prenom" => "CE", "Moyenne" => 9), "ET764" => array("Nom" => "DE", "Prenom" => "DF", "Moyenne" => 16.5));
    echo '<table>';
        echo '<tr>';
        echo '<td>';
        echo "Student 1 : ";
        echo '</td>';
        echo '<td>';
        echo $_GET["key1"]."----";
        echo '</td>';
        echo '<td>';
        echo $students[$_GET["key1"]]["Nom"]."----";
        echo '</td>';
        echo '<td>';
        echo $students[$_GET["key1"]]["Prenom"]."----";
        echo '</td>';
        echo '<td>';
        echo $students[$_GET["key1"]]["Moyenne"]."----";
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>';
        echo "Student 2 : ";
        echo '</td>';
        echo '<td>';
        echo $_GET["key2"]."----";
        echo '</td>';
        echo '<td>';
        echo $students[$_GET["key2"]]["Nom"]."----";
        echo '</td>';
        echo '<td>';
        echo $students[$_GET["key2"]]["Prenom"]."----";
        echo '</td>';
        echo '<td>';
        echo $students[$_GET["key2"]]["Moyenne"]."----";
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>';
        echo "Student 3 : ";
        echo '</td>';
        echo '<td>';
        echo $_GET["key3"]."----";
        echo '</td>';
        echo '<td>';
        echo $students[$_GET["key3"]]["Nom"]."----";
        echo '</td>';
        echo '<td>';
        echo $students[$_GET["key3"]]["Prenom"]."----";
        echo '</td>';
        echo '<td>';
        echo $students[$_GET["key3"]]["Moyenne"]."----";
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>';
        echo "Student 4 : ";
        echo '</td>';
        echo '<td>';
        echo $_GET["key4"]."----";
        echo '</td>';
        echo '<td>';
        echo $students[$_GET["key4"]]["Nom"]."----";
        echo '</td>';
        echo '<td>';
        echo $students[$_GET["key4"]]["Prenom"]."----";
        echo '</td>';
        echo '<td>';
        echo $students[$_GET["key4"]]["Moyenne"];
        echo '</td>';
        echo '</tr>';
    echo '</table>';
    ?>
</body>
</html>

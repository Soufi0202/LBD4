<!DOCTYPE html>
<html>
<body>

<?php
echo '<table >';
for($i=1;$i<=10;$i++){
    echo '<tr>';
    for($j=0;$j<=9;$j++){
        echo '<td style="border:1px solid black">'; 
        echo ($j+1)*$i;
        echo '</td>';
    }
    echo '</tr>';
}

echo '</table>';
?>

</body>
</html>
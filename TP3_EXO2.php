<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<h1>Formulaire</h1>
<form action="exo2.php" method="get">
    <div class="form-group">
      <label for="exampleInputName">Nom :</label>
      <input type="text" class="form-control" id="exampleInputName" name="Nom"  placeholder="Enter Name">

    </div>
    <div class="form-group">
        <label for="exampleInputpName">Prenom :</label>
        <input type="text" class="form-control" id="exampleInputpName" name="Prenom"  placeholder="Enter Last Name">
  
      </div>


      <div class="form-group">
    <label for="exampleFormControlSelect">Vous voulez :</label>
        <select class="form-control" id="exampleFormControlSelect" name="Domaine">
            <option>. . .</option>
          <option>WEB</option>
          <option>DB</option>

        </select>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <?php

$tab = array("WEB" => array(array("nom" =>"php","lien" => "https://www.php.net/ ","avis"=>"*****" ),array("nom" =>"html","lien" => "https://www.w3schools.com/html/default.asp","avis"=>"****" ),array("nom" =>"JavaScript","lien" => "https://www.javascript.com/ ","avis"=>"**" ),array("nom" =>"css","lien" => "https://www.w3schools.com/css/ ","avis"=>"****" )),"DB"=>array(array("nom" =>"mysql","lien" => "https://www.mysql.com/ ","avis"=>"*****" ),array("nom" =>"PostgreSQL","lien" => "https://www.postgresql.org/ ","avis"=>"*****" ),array("nom" =>"oracle","lien" => "https://www.oracle.com/","avis"=>"****" ),array("nom" =>"db2","lien" => "https://www.ibm.com/products/db2 ","avis"=>"****" )));
echo '<table>';
echo '<tr>';
      echo '<td>';
     echo "Domaine |";
      echo '</td>';
      echo '<td>';
      echo "| Informations |";
       echo '</td>';

echo '</tr>';
echo '<tr>';
      echo '<td>';
     echo $_GET["Domaine"]." |";
      echo '</td>';
      echo '<td>';
      foreach($tab[$_GET["Domaine"]] as $arr){
        foreach ($arr as $key => $value) {
            echo $key." : ".$value."<br>";
        }
      }
       echo '</td>';
echo '</tr>';
echo '</table>';

?>
</body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="TP3_EXO7_info.css">
</head>
<body>
<h1>Formulaire</h1>
<form action="" method="post">
<div class="form-group">
    <label for="exampleFormControlSelect">Fonction :</label>
        <select class="form-control" id="exampleFormControlSelect" name="Fonction" required>
          <option></option>
          <option>Salarié</option>
          <option>Fonctionnaire</option>
          <option>Profession libérale</option>
        </select>
      </div>
    <div class="form-group">
      <label for="exampleInputName">Nom :</label>
      <input type="text" class="form-control" id="exampleInputName" name="Nom"  placeholder="Enter Name" required>

    </div>
    <div class="form-group">
        <label for="exampleInputpName">Prenom :</label>
        <input type="text" class="form-control" id="exampleInputpName" name="Prenom"  placeholder="Enter Last Name" required>
  
      </div>
    <div class="form-group">
      <label for="exampleInputObjet">Montant de financement :</label>
      <input type="text" class="form-control" id="exampleInputfin" name="fin" placeholder="Montant de financement" required>
    </div>
    </div>
    <div class="form-group">
      <label for="exampleInputObjet">Duré en mois :</label>
      <input type="text" class="form-control" id="exampleInputdur" name="dur" placeholder="Duré en mois" required>
    </div>

    <div class="form-group">
    <label for="flexCheckDefault" id="one">Assurance :</label>
  <input class="form-contro" type="checkbox" value="oui" id="flexCheckDefault" name="assurance[]">
  <label class="form-contro" for="flexCheckDefault">
    OUI
  </label>
  <input class="form-contro" type="checkbox" value="non" id="flexCheckDefault" name="assurance[]">
  <label class="form-contro" for="flexCheckDefault">
    NON
  </label>
  
</div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</body>
</html>
<?php
if($_POST["Fonction"]==""){
  echo "<style>
  #exampleFormControlSelect{
    border-color:red;
  }
  </style>";
}
if($_POST["Nom"]==""){
  echo "<style>
  #exampleInputName{
    border-color:red;
  }
  </style>";
}
if($_POST["Prenom"]==""){
  echo "<style>
  #exampleInputpName{
    border-color:red;
  }
  </style>";
}
if($_POST["fin"]==""){
  echo "<style>
  #exampleInputfin{
    border-color:red;
  }
  </style>";
}
if(!is_numeric($_POST["fin"])){
  echo "<h5 style=color:red;>Le Montant doit etre un nombre.</h5>";
}
if($_POST["dur"]==""){
  echo "<style>
  #exampleInputdur{
    border-color:red;
  }
  </style>";
}
if(!isset($_POST['assurance'])){
  echo "<style>
  #one{
    color:red;
  }
  </style>";
}else{
  if($_POST['assurance'][0]=="oui"){
    $_POST["fin"] = $_POST["fin"] + (0.04*$_POST["fin"])/100;
    
  }
}
if($_POST['dur']<6 || $_POST['dur']>300){
  echo "<h5 style=color:red;>La Duree doit etre entre 6 et 300.</h5>";
  
}
$r =$_POST["fin"] - ($_POST["fin"] * (100/($_POST["dur"]/12)))/100;
$s = $_POST["fin"] - $r;
echo "<table>
<tr>
<td style=color:white;font-weight:bold;background-color:rgb(185,183,181)>Date Ech</td>
<td style=color:white;font-weight:bold;background-color:rgb(185,183,181)>Mensualite(MAD)</td>
<td style=color:white;font-weight:bold;background-color:rgb(185,183,181)>Interet(MAD)</td>
<td style=color:white;font-weight:bold;background-color:rgb(185,183,181)>Amortissement(MAD)</td>
<td style=color:white;font-weight:bold;background-color:rgb(185,183,181)>Cap restant du(MAD)</td>
</tr>
<tr>
<td>01/03/2023</td>
<td>$_POST[fin]</td>
<td>$r</td>
<td>$s</td>
<td>499160.55</td>

</tr>
</table>";


?>
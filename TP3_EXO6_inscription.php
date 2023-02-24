<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="TP3_EXO6_inscr.css">
</head>
<body>
<h1 style="color:red"><u>Formulaire</u></h1>
<form action="" method="post">
<div class="form-group">
    <label for="exampleFormControlSelect"><strong style="color:blue">Civilite :</strong></label>
        <select class="form-control" id="exampleFormControlSelect" name="Civilite" required>
            <option></option>
          <option>Mr</option>
          <option>Mlle</option>
          <option>Mme</option>
        </select>
      </div>
    <div class="form-group">
      <label for="exampleInputName"><strong style="color:blue">Nom :</strong></label>
      <input type="text" class="form-control" id="exampleInputName" name="Nom"  placeholder="Enter Name" required>

    </div>
    <div class="form-group">
        <label for="exampleInputpName"><strong style="color:blue">Prenom :</strong></label>
        <input type="text" class="form-control" id="exampleInputpName" name="Prenom"  placeholder="Enter Last Name" required>
  
      </div>
    <div class="form-group">
      <label for="exampleInputObjet"><strong style="color:blue">Date de Naissance :</strong></label>
      <input type="date" class="form-control" id="exampleInputDate" name="date" placeholder="Date" required>
    </div>

    <div class="form-group">
    <label for="flexCheckDefault" id="one"><strong style="color:blue">Formation :</strong></label>
  <input class="form-contro" type="checkbox" value="CS" id="flexCheckDefault" name="formations[]" >
  <label class="form-contro" for="flexCheckDefault">
    CS
  </label>
  <input class="form-contro" type="checkbox" value="SHBM" id="flexCheckDefault" name="formations[]">
  <label class="form-contro" for="flexCheckDefault">
    Shbm
  </label>
  <input class="form-contro" type="checkbox" value="SAP + D" id="flexCheckDefault" name="formations[]">
  <label class="form-contro" for="flexCheckDefault">
    SAP + D
  </label>
  <input class="form-contro" type="checkbox" value="EMINES" id="flexCheckDefault" name="formations[]">
  <label class="form-contro" for="flexCheckDefault">
    EMINES
  </label>
  <input class="form-contro" type="checkbox" value="GTI" id="flexCheckDefault" name="formations[]">
  <label class="form-contro" for="flexCheckDefault">
    GTI
  </label>
  <input class="form-contro" type="checkbox" value="MSN" id="flexCheckDefault" name="formations[]">
  <label class="form-contro" for="flexCheckDefault">
    MSN
  </label>
  <input class="form-contro" type="checkbox" value="KHAWARIZMI" id="flexCheckDefault" name="formations[]">
  <label class="form-contro" for="flexCheckDefault">
    KHAWARIZMI
  </label>
  <input class="form-contro" type="checkbox" value="MAHIR" id="flexCheckDefault" name="formations[]">
  <label class="form-contro" for="flexCheckDefault">
    MAHIR 
  </label>
  <input class="form-contro" type="checkbox" value="1337" id="flexCheckDefault" name="formations[]">
  <label class="form-contro" for="flexCheckDefault">
    1337
  </label>
  <input class="form-contro" type="checkbox" value="CBS" id="flexCheckDefault" name="formations[]">
  <label class="form-contro" for="flexCheckDefault">
    CBS
  </label>
  
  
</div>
      <div class="form-group">
        <label for="exampleInputmsg"> <strong style="color:blue">Mot de Passe :</strong></label>
        <input type="password" class="form-control" id="exampleInputMtp" name="password" placeholder="Mtp" required>
      </div>
      <div class="form-group">
        <label for="exampleInputmsg"><strong style="color:blue">Reecrire Mot de Passe :</strong></label>
        <input type="password" class="form-control" id="exampleInputMtps" name="passwordb" placeholder="Reecrire mtp" required>
      </div>
    <button type="submit" class="btn">Submit</button>
  </form>
</body>
</html>
<?php
if($_POST["Civilite"]==""){
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
if($_POST["date"]==""){
  echo "<style>
  #exampleInputDate{
    border-color:red;
  }
  </style>";
}
if($_POST["password"]==""){
  echo "<style>
  #exampleInputMtp{
    border-color:red;
  }
  </style>";
}
if($_POST["passwordb"]==""){
  echo "<style>
  #exampleInputMtps{
    border-color:red;
  }
  </style>";
}
if($_POST["passwordb"]!=$_POST["password"]){
  echo "<h5 style=color:red;>Mots de passes non identiques</h5>";
}


echo "<table>
<tr>
<td style=color:green;font-weight:bold>Civilite</td>
<td style=color:green;font-weight:bold>Nom</td>
<td style=color:green;font-weight:bold>Prenom</td>
<td style=color:green;font-weight:bold>date de Naissance</td>
<td style=color:green;font-weight:bold>Formations</td>
<td style=color:green;font-weight:bold>Password</td>
<td style=color:green;font-weight:bold>RePassword</td>
</tr>
<tr>
<td>$_POST[Civilite]</td>
<td>$_POST[Nom]</td>
<td>$_POST[Prenom]</td>
<td>$_POST[date]</td>
<td>";
if(isset($_POST['formations']))
{
  foreach($_POST["formations"] as $i){
    echo $i."<br>";
  };
   
}
echo "</td>
<td>$_POST[password]</td>
<td>$_POST[passwordb]</td>
</tr>
</table>";


?>

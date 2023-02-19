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
<form action="index.php" method="get">
    <div class="form-group">
      <label for="exampleInputName">Nom :</label>
      <input type="text" class="form-control" id="exampleInputName" name="Nom"  placeholder="Enter Name">

    </div>
    <div class="form-group">
        <label for="exampleInputpName">Prenom :</label>
        <input type="text" class="form-control" id="exampleInputpName" name="Prenom"  placeholder="Enter Last Name">
  
      </div>
    <div class="form-group">
      <label for="exampleInputObjet">Objet :</label>
      <input type="text" class="form-control" id="exampleInputObjet" name="Objet" placeholder="Objet">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="Email" aria-describedby="emailHelp" placeholder="Enter email">
  
      </div>
      <div class="form-group">
    <label for="exampleFormControlSelect">Vous voulez contacter :</label>
        <select class="form-control" id="exampleFormControlSelect" name="Service">
            <option>. . .</option>
          <option>Service après-vente</option>
          <option>Service technique</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputmsg">Message :</label>
        <textarea  class="form-control rounded-0" name="Message" id="exampleInputmsg" rows="7"></textarea>>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</body>
</html>
<?php
print_r($_GET);
?>
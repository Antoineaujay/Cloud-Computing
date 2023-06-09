<!DOCTYPE html>
<html>
<head>
  <title>Formulaire</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
</head>
     <body>
         <div class="container">
             <h1>Formulaire inscription</h1>
             <form action="action.php" class="needs-validation" novalidate>
                 <div class="form-row">
                     <div class="col-md-4 mb-3">
                         <label for="prenom">Prénom</label>
                         <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Pierre" required>
                         
                     </div>
                     <div class="col-md-4 mb-3">
                         <label for="nom">Nom de famille</label>
                         <input type="text" class="form-control" id="nom" name="nom" placeholder="Giraud" required>
                         
                     </div>
                     <div class="col-md-4 mb-3">
                         <label for="pseudo">Pseudo</label>
                         <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="PierreGird" required>
                         
                     </div>
                 </div>
                 <div class="form-row">
                     <div class="col-md-6 mb-3">
                         <label for="ville">Ville</label>
                         <input type="text" class="form-control" id="ville" name="ville" placeholder="Ville" required>
                     </div>
                     <div class="col-md-3 mb-3">
                         <label for="pays">Pays</label>
                         <input type="text" class="form-control" id="pays" name="pays" placeholder="Pays" required>
                         
                     </div>
                     <div class="col-md-3 mb-3">
                         <label for="cp">Code postal</label>
                         <input type="number" class="form-control" id="cp" name="cp" placeholder="Code postal" required>
                         
                     </div>
                 </div>
                 <button class="btn btn-primary" type="submit">Envoyer</button>
             </form>
         </div>
    </body>
</html>
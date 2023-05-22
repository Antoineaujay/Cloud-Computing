
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
             <h1>Formulaires</h1>
             <form class="needs-validation" novalidate>
                 <div class="form-row">
                     <div class="col-md-4 mb-3">
                         <label for="prenom">Prénom</label>
                         <input type="text" class="form-control" id="prenom" placeholder="Pierre" required>
                         
                     </div>
                     <div class="col-md-4 mb-3">
                         <label for="nom">Nom de famille</label>
                         <input type="text" class="form-control" id="nom" placeholder="Giraud" required>
                         
                     </div>
                     <div class="col-md-4 mb-3">
                         <label for="pseudo">Pseudo</label>
                         <input type="text" class="form-control" id="pseudo" placeholder="PierreGird" required>
                         
                     </div>
                 </div>
                 <div class="form-row">
                     <div class="col-md-6 mb-3">
                         <label for="ville">Ville</label>
                         <input type="text" class="form-control" id="ville" placeholder="Ville" required>
                     </div>
                     <div class="col-md-3 mb-3">
                         <label for="pays">Pays</label>
                         <input type="text" class="form-control" id="pays" placeholder="Pays" required>
                         
                     </div>
                     <div class="col-md-3 mb-3">
                         <label for="cp">Code postal</label>
                         <input type="number" class="form-control" id="cp" placeholder="Code postal" required>
                         
                     </div>
                 </div>
                 <button class="btn btn-primary" type="submit">Envoyer</button>
             </form>
         </div>
    </body>
</html>
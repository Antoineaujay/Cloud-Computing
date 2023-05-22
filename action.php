<?php
// Récupérer les valeurs du formulaire
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$pseudo = $_POST['pseudo'];
$ville = $_POST['ville'];
$pays = $_POST['pays'];
$cp = $_POST['cp'];

// Connexion à la base de données
$serverName = 'cloudcomputingserverantoinerayan.database.windows.net';
$connectionOptions = array(
    'Database' => 'CloudComputing',
    'Uid' => 'antoineaujay',
    'PWD' => 'Cloudcomputing.',
);
$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

// Requête d'insertion des données
$sql = "INSERT INTO Utilisateurs (prenom, nom, pseudo, ville, pays, cp) VALUES (?, ?, ?, ?)";
$params = array($prenom, $nom, $pseudo, $ville, $pays, $cp);
$stmt = sqlsrv_query($conn, $sql, $params);

if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
}

echo "Données insérées avec succès.";

// Fermer la connexion
sqlsrv_close($conn);
// Redirect to index.php
header("Location: index.php");
exit();
?>
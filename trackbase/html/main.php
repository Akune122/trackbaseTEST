<?php
$bdd = new PDO('mysql:host=localhost;dbname=trackbase;','root','');
$allmusique = $bdd->query('SELECT * FROM musique');
if(isset($_GET['s']) AND !empty($_GET['s'])){
    $recherche=htmlspecialchars($_GET['s']);
    $allmusique = $bdd->query('SELECT titre_musique FROM musique');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>TrackBase</title>
        <link rel="stylesheet" href="../style/style.css">
    </head>

    <body>

        <section>
            <nav><a href="../index.html" style="color:black;text-decoration:none">Accueil</a></nav>
            <nav><a href="main.html" style="color:black;text-decoration:none">TrackBase</a></nav>
            <nav><a href="register.html" style="color:black;text-decoration:none">Connexion</a></nav>
        </section>


        <header><h1>TrackBase</h1></header>
        
        <article><h2>Page de recherche </h2></article>
        <form method="GET">
            <input type="search" name="s" placeholder="Rechercher un utilisateur">
            <input type="submit" name="envoyer">
        </form>

</body>

</html>
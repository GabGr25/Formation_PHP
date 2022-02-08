<?php
$bdd=new PDO('mysql:host=localhost;dbname=formation_udemy;charset=utf8','root',/*MDP:*/'root'); //acces base de donnée mySQL*/
 
//Ajoute un nouvelle utilisateur
    if(isset($_GET['prenom']) && isset ($_GET['nom']) && isset ($_GET['serie'])){
        $prenom =$_GET['prenom'];
        $nom    =$_GET['nom'];
        $serie  =$_GET['serie'];

        $requete=$bdd->prepare('INSERT INTO users (prenom, nom, serie_preferee) VALUES (?,?,?)') or die(print_r($bdd->errorInfo));
        $requete->execute(array($prenom, $nom, $serie));
        header('location: ../');
    }

//Affiche les infos
$requete=$bdd->query('SELECT prenom, nom , serie_preferee
                        FROM users');
                       
echo '<table border>
                    <tr>
                        <th>Pseudo</th>
                        <th>nom</th>
                        <th>Serie</th>
                    </tr>';
        while($donnees=$requete->fetch()){
            echo'<tr>
                    <td>'.$donnees['prenom'].'</td>
                    <td>'.$donnees['nom'].'</td>
                    <td>'.$donnees['serie_preferee'].'</td>
                </tr>';       
        }
        echo'</table>';

        $requete->closeCursor();

   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout</title>
</head>
<body>
        <h1>Ajout via formulaire</h1>
        <form method="get" action="ajout_via_formulaire.php">
            <table>
                <tr>
                    <td>Prénom</td>
                    <td><input type="text" name="prenom" /></td>
                </tr>
                <tr>
                    <td>Nom</td>
                    <td><input type="text" name="nom" /></td>
                </tr>
                <tr>
                    <td>Série préférée</td>
                    <td><input type="text" name="serie" /></td>
                </tr>
        </table>    
            <button type="submit">Ajouter</button>
    
</body>
</html>

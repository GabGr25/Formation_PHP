<?php
$bdd=new PDO('mysql:host=localhost;dbname=formation_udemy;charset=utf8','root',/*MDP:*/'root'); //acces base de donnée mySQL*/

$prenom="Marc";

//prepare sans executer
$requete=$bdd->prepare('SELECT prenom, nom , serie_preferee, metier 
                        FROM users
                        INNER JOIN jobs
                        ON users.id=jobs.id_user
                        WHERE prenom = ?');

//et la execute 
$requete->execute(array($prenom));

//comme ca sécurisé par PDO

echo'<table border>
                    <tr>
                        <th>Pseudo</th>
                        <th>nom</th>
                        <th>Serie</th>
                        <th>Mot de passe</th>
                    </tr>';
        while($donnees=$requete->fetch()){
            
            echo'<tr>
                    <td>'.$donnees['prenom'].'</td>
                    <td>'.$donnees['nom'].'</td>
                    <td>'.$donnees['serie_preferee'].'</td>
                    <td>'.sha1($donnees['metier']).'678g</td>
                </tr>';
                //mot de passe crypté avec sha1 + grain de sel (678g)

                
        }

        $requete->closeCursor();// on l'utilise plus donc on la ferme evite probleme

        echo'</table>';

?>
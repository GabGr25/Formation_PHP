<?php
//BD
        //HOTE : LOCALHOST - sql.monserveur.com
        //NON DE LA BASE : formation_udemy
        //LOGIN : root
        //mdp   : root
                                                                                                  
$bdd=new PDO('mysql:host=localhost;dbname=formation_udemy;charset=utf8','root',/*MDP:*/'root'); //acces base de donnée mySQL*/

        //AJOUTER UN UTILISATEUR
        //ajout de la personne a chaque refresh
        //$requete= $bdd->exec('INSERT INTO users (prenom, nom, serie_preferee) VALUES ("Marc","Dury","La casa de papel")');

        //AFFICHER ERREUR PLUS DETAIL
        //EXEMPLE INSERT
        /*$requete= $bdd->exec('INSERT INTO users (prenom, nom, serie_preferee) 
                                VALUES ("Marc","Dury")')
                         or die(print_r($bdd->errorInfo()));*/


        //MODIFIER INFO UTILISATEUR
        //$requete=$bdd->exec('UPDATE users SET serie_preferee="Vikings" WHERE prenom="Marc" ');


        //SUPPRIMER UN UTILISATEUR
        //$requete=$bdd->exec('DELETE FROM users WHERE prenom="Marc" ');


        //AJOUTER UN METIER (AUTRE TABLE)
        //$requete=$bdd->exec('INSERT INTO jobs (id_user,metier) VALUES (4,"Maire")');


        //LIRE LE TABLEAU

        $requete= $bdd->query('SELECT prenom, nom, serie_preferee, metier
                               FROM users AS u
                               INNER JOIN jobs AS j
                               ON u.id=j.id_user
                                ') ;
                                //order by id desc
                                //limit 0,3

        echo'<table border>
                    <tr>
                        <th>Prénom</th>
                        <th>nom</th>
                        <th>Serie</th>
                        <th>Métier</th>
                    </tr>';
        while($donnees=$requete->fetch()){
            
            echo'<tr>
                    <td>'.$donnees['prenom'].'</td>
                    <td>'.$donnees['nom'].'</td>
                    <td>'.$donnees['serie_preferee'].'</td>
                    <td>'.$donnees['metier'].'</td>
                </tr>';

                
        }

        $requete->closeCursor();// on l'utilise plus donc on la ferme evite probleme

        echo'</table>';
?>
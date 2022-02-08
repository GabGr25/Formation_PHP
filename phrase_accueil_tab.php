<?php
     //Tableau

    $tabPersonne=array(
        'id'=>1,
        'prenom'=>'Gabriel',
        'nom'=>'Gressier',
        'age'=>19
    
    );

    $agePersonneDans50ans=$tabPersonne['age']+50;

    echo "Bonjour ".$tabPersonne['prenom'].' '.$tabPersonne['nom']." !  Dans 50 ans vous aurez ".$agePersonneDans50ans." ans !";

?>
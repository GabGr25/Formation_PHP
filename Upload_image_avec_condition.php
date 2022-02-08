<?php
    /*
    $_FILES['image']['name'] //NOM
    $_FILES['image']['type'] //TYPE 
    $_FILES['image']['size'] //TAILLE
    $_FILES['image']['tmp_name'] //EMPLACEMENT
    $_FILES['image']['error'] //ERREUR
    */


    if (isset($_FILES['image']) && $_FILES['image']['error']==0){
        if($_FILES['image']['size'] <= 3000000){
            $informationsImage = pathinfo($_FILES['image']['name']);
            $extensionImage=$informationsImage['extension'];
            $extensionArray=array('png','gif', 'jpg', 'jpeg');

            if(in_array($extensionImage,$extensionArray)){
                move_uploaded_file($_FILES['image']['tmp_name'],'upload/'.time().rand().rand().'.'.$extensionImage);
                echo 'Envoie bien réussi !';
            }
        }
    }


    echo '<form method="post" action="train.php" enctype="multipart/form-data"
        <p>
            <h1>Formulaire</h1>
            <input type="file" name="image" /><br/>
            <button type="submit">Envoyer</button>
        </p>

    </form>';

?>
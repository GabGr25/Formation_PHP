<?php

/*//Tableau

    $tabPersonne=array(
        'id'=>1,
        'prenom'=>'Gabriel',
        'nom'=>'Gressier',
        'age'=>19
    );

    $agePersonneDans50ans=$tabPersonne['age']+50;

    //echo $agePersonneDans50ans;

    echo "Bonjour ".$tabPersonne['prenom'].' '.$tabPersonne['nom']." !  Dans 50 ans vous aurez ".$agePersonneDans50ans." ans !";/* 

    ------------------------------------------
    $age=19;

    if($age>17){
        echo "Vous etes majeur";
    }
    else echo "Vous etes mineur";
    
------------------------------------------
    // condition ternaires
    $number=70;
     echo ($number % 10==0) ? "True" : "False";

------------------------------------------
    //switch utilisation cas par cas
    $note=10;
    switch($note){
        case 0:
            echo "Vous etes nul.";
            break;
        case 20:
            echo "Vous etes parfait.";
            break;
        default:
            echo "C'est bien";
        
    }
------------------------------------------
    //Boucles while
    $ligne =0;
    while($ligne<10){
        echo "Voici une ligne du règlement du lycée. <br /> Votre numero de ligne est :".$ligne."<br />" ;
        $ligne +=1 ;
    }

    for($i=0;$i<=10;$i++){
        echo "Voici une ligne du règlement du lycée. <br /> Votre numero de ligne est :".$i."<br />" ;
    }

------------------------------------------
    //tableau : foreach

    $user =array('Nicolas', 'George', 'Marc','Emmanuel','Stendhal');
    foreach($user as $name){
        echo $name."<br />";
    }    

------------------------------------------

//Les fonctions

    function Hello($prenom,$nom){
        echo 'Hello '.$prenom.' '.$nom.'<br />';
    }

Hello("Nicolas","Dupont");
Hello("Brigitte","Macron");

----------Securité recup dinfo-----------
htmlspecialchars == anti requete sql



//envoie fichier php

    $_FILES['image']['name'] //NOM
    $_FILES['image']['type'] //TYPE 
    $_FILES['image']['size'] //TAILLE
    $_FILES['image']['tmp_name'] //EMPLACEMENT
    $_FILES['image']['error'] //ERREUR


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
-----------------------------------------

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

    echo"<header>Hébergeur dimages</header>

        <body>
            <h2>Avez vous choisi votre images</h2>

            <p>Cette image sera héberger sur notre serveur et ensuite nous vous donnerons un lien afin de pouvoir acceder à votre image</p>
            <br>
            <br>

            <h3>Veuillez accéder au formulaire ci-dessous afin d'envoyer votre image.</h3>
            <br>
            <br>
            <form method='post' action='train.php' enctype='multipart/form-data'
                <p>
                    <h4>Le formulaire en question</h4>
                    <input type='file' name='mage' /><br/>
                    <button type='submit'>Envoyer</button>
                </p>
        
            </form>
        </body>


    ";
*/
    
       
?>
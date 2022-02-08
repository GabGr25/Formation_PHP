<?php
//Verifier si image bien recu
    if(isset($_FILES['image']) && $_FILES['image']['error']==0){

        $error=1;
        //TAILLE
        if($_FILES['image']['size']<=3000000){
            //EXTENSION
            $informationImage=pathinfo($_FILES['image']['name']);
            $extensionImage=$informationImage['extension'];
            $extensionArray=array('jpg','png','jpeg','gif');

            if(in_array($extensionImage, $extensionArray)){
                $address='upload/'.time().rand().rand().'.'.$extensionImage;
                move_uploaded_file($_FILES['image']['tmp_name'],$address);
                $error=0;
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hébergeur d'images</title>
</head>
<style type="text/css">
    html, body{margin:0; font-family: georgia}
    header{text-align:center; background: grey;}
    article{margin-top:50px;background :#f7f7f7; padding:10px;}
    button{margin:auto; margin-top:10px}
    h1{margin-top:0;}
    #image{max-width :200px;}
    #presentation-picture{text-align:center}
    .contener{width:1000px; margin :auto;}

</style>

<body>
    <header>
        <h2>PHOTOSHOOT
    </header>

    <div class="contener">
        <article>
            <h1>Hébergez une image </h1>

            <?php
                if(isset($error) && $error==0){
                    echo'<div id="presentation-picture">
                        <img src="'.$address.'" id="image" /><br>
                    
                            <input typer="text" 
                                value="https://localhost/'.$address.'"/>
                            
                    </div>';
                }
                else if(isset($error) && $error ==1){
                    echo'Votre image ne peut pas être envoyée. Vérifiez son extension et sa taille (maximum à 3 mo).';
                }

            ?>

            <form method="post" action="Projet_2_Udemy.php" enctype="multipart/form-data">
                <p>
                    <input type="file" required name="image"/><br/>
                    <div style="text-align:center;">
                    <button type="submit">Héberger</button>
                    </div>

                </p>
            </form>    
        </article>
    </div>    
</body>
</html>
<?php
session_start();

if(!empty($_POST['pseudo'])){
    $pseudo = $_POST['pseudo'];
    $_SESSION['pseudo']=$pseudo;
   
}
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
        <h1>Entrer votre Pseudo</h1>
        <form method="post" action="Utilisation_Cookies.php">
            <table>
                <tr>
                    <td>Pseudo</td>
                    <td><input type="text" name="pseudo" /></td>
                </tr>
                
        </table>    
            <button type="submit">Se connecter</button>
    
        <?php
            if(!empty($_SESSION['pseudo'])){
                echo '<h2>Bienvenu '.htmlspecialchars($_SESSION['pseudo']).'</h2>';
            }
        ?>
</body>
</html>

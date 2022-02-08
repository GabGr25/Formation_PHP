<?php

//Projet #1  Le carre et racine des 10 premier nombre

echo '<table border>
        <tr>
            <th>Nombre</th>
            <th>Carré</th>
            <th>Racine</th>
        </tr>';

for ($i=0;$i< 10;$i++){
    echo '<tr>
            <td>'.$i.'</td>
            <td>'.$i*$i.'</td>
            <td>'.sqrt($i).'</td>
        
        </tr>';
}
echo '</table>';
?>

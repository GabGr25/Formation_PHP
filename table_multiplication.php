<?php
//tableaux de multiplication jusque 10

    echo'<table border style="border-collapse: collapse;">
        <tr>
            <th></th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
            <th>7</th>
            <th>8</th>
            <th>9</th>
            <th>10</th>
        </tr>';

    for ($i =1;$i<11;$i++){
        echo '<tr><th>'.$i.'</th>';
        for ($y=1;$y<11;$y++){
            
            echo '<td>'.$i*$y.'</td>';
        }
        echo '</tr>';
    }
?>
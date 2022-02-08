<?php

    //Definir une fonction : Les racines d'une equation (ax**2+bx+c =0 )

    function Racine($a,$b,$c){
        //EQUATION 0
        if($a ==0){
            echo "Cette equation est invalide";
            exit;
        }
        //DELTA
        $delta=($b*$b)-(4*$a*$c);

        if ($delta<0){
            
            echo "Il n'y a pas de solution<br />";
        }
        elseif($delta==0){
            $tmp=((-$b)/2*$a);
            echo 'La solution est :'.$tmp.'<br />';
        }
        elseif($delta >0){
            $tmp=(-$b-sqrt($delta))/(2*$a);
            $tmp1=(-$b+sqrt($delta))/(2*$a);
            echo 'Pour a='.$a.' b='.$b.' c='.$c.'! Les solutions sont : x1= '.$tmp.' ou encore x2= '.$tmp1.'<br />';
        }
    } 

    Racine(3,5,2);
    Racine(2,10,40);
    Racine(5,7,1);
    Racine(0,5,7);

?>
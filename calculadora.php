<?php 



function calcularDanio($vida, $ataque, $pocion){

    $danios = array("golpe" =>  10, "patada" => 20, "espadazo" => 50 );  

    if($vida < 50 && $pocion == "3"){
       return $danios[$ataque] * 2;
    }
    else if($ataque == "golpe" && $pocion=="1"){
       return $danios[$ataque] * 3;
    }
    else if($ataque == "patada" && $pocion=="2"){
       return $danios[$ataque] * 3;
    }
    return $danios[$ataque];
}


function calcularVida($vida, $ataque, $pocion){
    return $vida - calcularDanio($vida, $ataque, $pocion);
}

?>
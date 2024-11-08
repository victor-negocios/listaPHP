<?php 

function ValidaObrigatoriedade($idade, $genero, $ehReserva){
    $mensagem = "";

    if($idade < 18 || $idade > 65){
        $mensagem = "Alistamento Indisponível!<br>";
    }
    elseif($idade >= 18 && $idade <= 65 && $genero == "masculino"){
        if($ehReserva){
            $mensagem = "Reserva Ativa do Brasil!";}
        else{
            $mensagem = "Alistamento Obrigatório!";
        }
    }
    elseif($idade >= 18 && $idade <= 65 && $genero == "feminino"){
        $mensagem = "Alistamento Opcional!";
    }

    return $mensagem;
}

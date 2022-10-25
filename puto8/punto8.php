<?php
    $Edad = $_POST['Edad'];
    $Sexo = $_POST['Sexo'];

    if($Sexo == "Masculino" or $Sexo == "MASCULINO" or $Sexo == "masculino" or $Sexo == "M" or $Sexo == "m"){
        if($Edad>=63){
            echo "Este HOMBRE puede jubilarse";
        } else{
            echo "Este HOMBRE no puede jubilarse";
        } 
    }elseif($Sexo == "Femenino" or $Sexo == "FEMENINO" or $Sexo == "femenino" or $Sexo == "F" or $Sexo == "f"){
        if($Edad>54){
            echo "Esta MUJER puede jubilarse";
        }else{
            echo "Esta MUJER no puede jubilarse";
        }
    
}
?>
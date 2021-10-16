<?php
$igual = 0;
$prova1 =(($a *($x1 * $x1))+($b * ($x1))+($c));
$prova2 =(($a *($x2 * $x2))+($b * ($x2))+($c));
if(($prova1 == $igual) && ($prova2 == $igual)){
    echo '<p><span style="color: #FFA500;">Os Dois Valores Passaram no Teste da Prova Real , Preste Atenção Ao Problema </span></p>';
}
elseif ($prova1 == $igual){
    echo '<p><span style="color: #99cc00;">O valor  '.$x1.'  passou no teste de prova real </span></p>';
}
elseif ($prova2 == $igual){
    echo '<p><span style="color: #99cc00;">O valor  '.$x2.'  passou no teste de prova real </span></p>';
}
else {
     echo '<p><span style="color: #ff0000;">Nenhum Valor Passou No teste de Prova real </span></p> ';
}

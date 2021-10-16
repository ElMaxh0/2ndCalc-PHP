<?php
$igual =0;
//Titulo 
echo '<title> Calculadora 2°Gral</title>';
if ((isset($_GET['a']))  && (isset($_GET['b']))){
// Valores
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
//Alert
echo '<p> Esta Equação Nao Possui o Termo C(Numerico)</br></p>';
//Equação
$eq=$b/$a;
echo '<h1> Equação</h1>';
echo '<h1>'.$a.'x<sup>2</sup>+'.$b.'x='.$igual.'</h1>';
//Calculo 
include ('php/incompletas/viewcalcab.php');
echo '<p>
</br></p>';
echo '<a align="right" href="./#form"><input  class="bt bt-az" type="submit" value="Proximo Calculo "></a>';

}
else {
}
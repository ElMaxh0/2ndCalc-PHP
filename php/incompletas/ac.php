<?php
$igual =0;
//Titulo 
echo '<title> Calculadora 2°Gral</title>';
if ((isset($_GET['a']))  && (isset($_GET['c']))){
// Valores
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
//alerta 
echo '<p> Esta Equação Nao Possui o Termo B </p>';
//Equação
$eq=sqrt((-$c)/($a));
echo '<h1> Equação</h1>';
echo '<h1>'.$a.'x<sup>2</sup>+'.$c.'=0</h1>';
//Resultado 
echo '<h1> Resultados </h1>';
echo '<h1>';
if ($c > 0){
echo '<h1>x = '. 0- (sqrt(($c)/$a)).'</h1>';
}
else{
echo '<h1>x = '. 0+ (sqrt((-$c)/$a)).'</h1>';

}

//Calculo 
include ('php/incompletas/viewcalcac.php');
echo '<p>
</br></p>';
echo '<a align="right" href="./#form"><input  class="bt bt-az" type="submit" value="Proximo Calculo "></a>';

}
else {
}
<?php
$igual =0;
//Titulo 
echo '<title> Calculadora 2°Gral</title>';
if ((isset($_GET['a'])) && (isset($_GET['b'])) && (isset($_GET['c']))){
// Valores
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
//Delta
$delta = ($b*$b)-((4*$a)*$c);
//Equação
$x1 = (-$b + sqrt ($delta)) / (2 * $a);
$x2 = (-$b - sqrt ($delta)) / (2 * $a);
// Exibir Equaçao 
echo '<h2> Equaçao </h2>';
echo '<h1><span style="color: #00008b;">'.$a.'x<sup>2</sup>+'.$b.'x+'.$c.'='.$igual.'</span></h1>';
//Possiveis Resultados 
echo '<h2> Possiveis Resultados </h2>';
//AredondaValor
$possibilidade1 =round($x1,2);
$possibilidade2 =round($x2,2);
//Exibe Resultado 
echo '';
echo '<h1><span style="color: #add8e6;">';
echo $possibilidade1;
echo 'ou';
echo $possibilidade2;
echo '</h1></span>';
echo '<h1>Valor do delta '.$delta.'</h1>';
echo 'NAN = Resultado Iracional ';
//ProvaReal
include ('php/provareal.php');
//Botao para Proximo Calculo 
echo '<p>

</br></p>';
include ('php/viewcalc.php');
echo "<p></br></p>";
echo '<a align="right" href="./#form"><input  class="bt bt-az" type="submit" value="Proximo Calculo "></a>';


}
else {

}
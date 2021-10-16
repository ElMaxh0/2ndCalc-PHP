<p> API Para Calculos Externos</p>
<?php
if ((empty($_GET['a'])) && (empty($_GET['b'])) && (empty($_GET['c']))&& (empty($_GET['usernm']))){
    echo 'Nenhum Dado Foi Recebido , Utilize o formulario abaixo em seu portal  ';
    echo '<div>
<div>&lt;form action="http://123alehot.rf.gd/1/2ndCalc/calcengine/api_calc-2nd_nn2_0_0_1.php" method="get"&gt;</div>
<div>&lt;label for="fname"&gt;X&lt;sup&gt;2&lt;/sup&gt;(a)&lt;/label&gt;</div>
<div>&lt;input type="number" id="a" name="a"&gt;&lt;br&gt;&lt;br&gt;</div>
<div>&lt;label for="lname"&gt;X(b)&lt;/label&gt;</div>
<div>&lt;input type="number" id="b" name="b"&gt;&lt;br&gt;&lt;br&gt;</div>
<div>&lt;label for="lname"&gt;Numero(c)&lt;/label&gt;</div>
<div>&lt;input type="number" id="c" name="c"&gt;&lt;br&gt;&lt;br&gt;</div>
<div>&lt;select name="usernm"&gt;</div>
<div>&lt;optionvalue="api2.0"&gt;2.0&lt;/option&gt;</div>
<div>&lt;optionvalue="nome_a_aparecer_no_topo"selected&gt;2.1&lt;/option&gt;</div>
<div>&lt;optionvalue="valor3"&gt;Valor 3&lt;/option&gt;</div>
<div>&lt;/select&gt;</div>
<div>&lt;p&gt;</div>
<div>&lt;/br&gt;&lt;/p&gt;</div>
<div>&lt;input onclick="myFunction()" class="bt bt-az" type="submit" value="Calcular"&gt;&lt;/intput&gt;</div>
<div>&lt;/form&gt;</div>
</div>';

echo 'Ou Use';
echo '<p>&lt;IFRAME src=http://123alehot.rf.gd/1/2ndCalc/calcengine/api_calc-2nd_nn2_0_0_1.php?usernm=nomedeusuario&iframe=v2_0 frameborder=0 scrolling=auto&gt;<br />&lt;/IFRAME&gt;</p>';

}
elseif ($_GET['iframe']== v2_0){
    $ll=$_GET['usernm'];
    echo '<h3>Agente Autorizado:  '.$ll.'</h3>';
    include('index.php');
}
else{
    $ll=$_GET['usernm'];
    echo '<h3>Agente Autorizado:  '.$ll.'</h3>';
    include('index.php');
}

?>
<?php
include ('../../../homeassents/portal/cdn/ad.php');
?>
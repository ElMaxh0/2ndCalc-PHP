<!DOCTYPE html>
<html lang="ptbr" >
<head>
  <meta charset="UTF-8">
  <link rel='stylesheet' href='./css/data.css'>

</head>
<body>
<!-- partial:index.partial.html -->
<div class="opener">
   <a class="bt bt-vd" href="#lcollapse.!next">Ver Calculos</a>
  </div>
  <div lj-type="stage" class="collapse" lj-auto-height="true">
    <!-- Add a stage. -->
    <div id="lcollapse" lj-type="layer" lj-default-frame="!none" lj-transition="inouttop">
      <!-- The layer for the main content -->
      <div lj-type="frame" lj-name="frame1" lj-fit-to="responsive-width">
        <!-- The content frame -->
        <div>
        <?php
//CodigoParaExibirCodigo
echo '<div align="left">';
echo '<h4> Calculo Realizado </h4>';
echo  '<p>(-b &plusmn; &radic;&#916)/2*a';	
echo '</br>Bascara Basico </br>';
echo '&#916=b<sup>2</sup> -4*a*c';
echo '<h4><b>Calculo Em Etapas </b></h4>';
echo '<p><b>Etapa 01 Resolução de delta </b></p>';
echo '<p>&#916;='.$b.'<sup>2</sup> -4 *'.$a.'*'.$c.'</p>';
echo '<p>&#916;='.$b*$b.'+'.-4*$a*$c.'</p>';
echo '&#916;='.$delta.'';
echo '<p><b>Etapa 02 Resolução do Bascara </b></p>';
echo '<p>('.-$b.'&plusmn;&radic;'.$delta.')/2*'.$a.'</p>';
echo '<p>('.-$b.'&plusmn;'.round (sqrt($delta),2).')/'. 2*$a.'</p>';
echo '<p><b>Etapa 3 Separar As Duas Possibilidades </b></p>';
echo '<p>Possibilidade 1</p>';
echo '<p>X<sup>1</sup>=('.-$b.'+'.(sqrt($delta)).')/'. 2*$a.'</p>';
echo '<p>X<sup>1</sup>='.(-$b + (sqrt($delta))).'/'. 2*$a.'</p>';
echo '<p>X<sup>1</sup>='.(-$b + sqrt($delta))/(2*$a).'</p>';
echo '<p>Possibilidade 2</p>';
echo '<p>X<sup>2</sup>=('.-$b.'-'.(sqrt($delta)).')/'. 2*$a.'</p>';
echo '<p>X<sup>2</sup>='.(-$b-(sqrt($delta))).'/'. 2*$a.'</p>';
echo '<p>X<sup>2</sup>='.(-$b-(sqrt($delta)))/(2*$a).'</p>';

echo '<h4>Calculo Utilizado Na Prova Real</h4>';
echo '<p>'.$a.'*('.$x1.'<sup>2</sup>) +('.$b.'*('.$x1.'))+'.$c.'=0</p>';
echo '<p>'.$a.'*'.$x1*$x1.'+('.$b.'*'.$x1.')+('.$c.')';
echo '<p>'.$a*($x1*$x1).'+('.$b*$x1.')+('.$c.')';
echo '<p>'.$prova1.'</p>';
echo '<p>
</br></p>';
if ($prova1 == 0){
	echo '
    <img align="right" src="./img/certo.png" height="50" width="100">
    <p> Este Valor Fecha Na Igualdade </p>';
}
else {
          echo'<img align="right"src="./img/errado.png" height="50" width="100">';
          echo '<p><span style="color: #ff0000;">Este Valor Nao Bate Com a Igualdade</span></p> ';
}
echo '<p>
</br></p>';
echo '<p>'.$a.'*('.$x2.'<sup>2</sup>) +('.$b.'*('.$x2.'))+'.$c.'=0</p>';
echo '<p>'.$a.'*'.$x2*$x2.'+('.$b.'*'.$x2.')+('.$c.')';
echo '<p>'.$a*($x2*$x2).'+('.$b*$x2.')+('.$c.')';
echo '<p>'.$prova2.'</p>';
echo '<p>
</br></p>';
if ($prova2 == 0){
	echo '
    <img align="right" src="./img/certo.png" height="50" width="100">
    <p> Este Valor Fecha Com a Igualdade  </p>';
}
else {
     echo '<p><span style="color: #ff0000;">Este Valor Nao Bate Com a Igualdade</span></p> ';
     echo'<img align="right" src="./img/errado.png" height="50" width="100">';
}
echo '</div>';
?>
<p>
</br>
</br>
</br>
</p>
</div>
<p> Os Valores Exibidos podem conter alguma variação devido a aredondamentos porem o calculo segue com numeros completos</p>

        
        <a class="bt bt-vm" href="#lcollapse.!none">Fechar Calculos </a>
        <!-- The link opening the lighbox including animation parameters -->
      </div>
    </div>
  </div>
<!-- partial -->
  <script src='./js/js.js'></script>
</body>
</html>

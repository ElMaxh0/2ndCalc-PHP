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

echo '<p><b>Calculo Por Passos</b></p>';
echo '<center>';
echo 'x<sup>2</sup>= x+x';
echo '<p>-----------</br></p>';
echo  '    x';
echo '</center>';
echo '<center>';
echo '<p>'.$b.'x';
echo '<p>-----------</br>='.$b.'</p>';
echo  '    x';
echo '</center>';
echo '<p>x('.$a.'x+'.$b.')='.$igual.'</p>';
echo '<p>-'.$a.'x+'.$b.'='.$igual.'</p>';
echo '<p>x='.$b.'/'.$a.'</p>';
echo '<p>x=-('.$b/$a.')</p>';
echo '-('.$eq.')';

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

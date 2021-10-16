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
echo '<p>'.$a.'x<sup>2</sup>+='.$igual.'-('.$c.')</p>';
echo '<p>'.$a.'x<sup>2</sup>+='.($igual-($c)).'</p>';
echo '<p>x<sup>2</sup>='.($igual-($c)).'/'.$a.'</p>';
echo '<p>x<sup>2</sup>='.($igual-($c))/$a.'</p>';
echo '<p>x = &radic;'.($igual-($c))/$a.'</p>';
if ($c > 0){
    echo '<p>x = '.-(sqrt((-$c)/$a)).'</p>';
}
else{
echo '<p>x = '. 0+ (sqrt((-$c)/$a)).'</p>';

}
echo '<p>x = '. 0- (sqrt(($c)/$a)).'</p>';
echo "<p></br></p>";
?>

<p>
</br>
</br>
</br>
</p>
</div>
        
        <a class="bt bt-vm" href="#lcollapse.!none">Fechar Calculos </a>
        <!-- The link opening the lighbox including animation parameters -->
      </div>
    </div>
  </div>
<!-- partial -->
  <script src='./js/js.js'></script>
</body>
</html>

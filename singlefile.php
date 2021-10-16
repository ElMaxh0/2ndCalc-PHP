<!DOCTYPE html>
<html lang="pt-BR">
<head>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2°Grau</title>
    <link rel='stylesheet' href='./css/sfontes.css'>
    <style>
        body {
            background: rgb(70, 142, 236);
            font: normal 15pt Arial;
            margin: 0 auto;
            width:100%;
        }

        header {
            color: white;
            text-align: center;
        }

<?php
//Diferencia acesso mobile de pc
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$symbian =  strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");

if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian == true) {
    echo 'section {
            background: white;
            border-radius: 10px;
            padding: 15px;
            width: 300px;
            margin: auto;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.555);
        }';
} else {
    echo 'section {
            background: white;
            border-radius: 10px;
            padding: 15px;
            width: 600px;
            margin: auto;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.555);
        }';
}
?>

        footer {
            color: white;
            text-align: center;
            font-style: italic;
        }
        div {
            text-align: center;
        }
        .bt {
border:1px solid #25692A;
border-radius:4px;
display:inline-block;
cursor:pointer;
font-family:Verdana;
font-weight:bold;
font-size:13px;
padding:6px 10px;
text-decoration:none;
} 

.bt-vd {
border-color:#68b465;
background:linear-gradient(to bottom, #abd5aa 5%, #68b465 100%);
box-shadow:inset 0px 1px 0px 0px #e3f1e3;
color:#fff;
text-shadow:0px 1px 0px #528009;
}

.bt-lj {
border-color:#eb9b48;
background:linear-gradient(to bottom, #f7d6b3 5%, #eb9b48 100%);
box-shadow:inset 0px 1px 0px 0px #fdf7f0;
color:#333;
text-shadow:0px 1px 0px #ffee66;
}

.bt-az {
border-color:#46a7f5;
background:linear-gradient(to bottom, #86c6f8 5%, #46a7f5 100%);
box-shadow:inset 0px 1px 0px 0px #d7ecfd;
color:#fff;
text-shadow:0px 1px 0px #528009;  
}

.bt-vm {
border-color:#f61f0e;
background:linear-gradient(to bottom, #fca8a1 5%, #f61f0e 100%);
box-shadow:inset 0px 1px 0px 0px #fff4f3;
color:#fff;
text-shadow:0px 1px 0px #528009; 
}

.bt-vd:hover {
background:linear-gradient(to bottom, #68b465 5%, #abd5aa 100%);
}

.bt-lj:hover {
background:linear-gradient(to bottom, #eb9b48 5%, #f7d6b3 100%);
}

.bt-az:hover {
background:linear-gradient(to bottom, #46a7f5 5%, #86c6f8 100%);
}

.bt-vm:hover {
background:linear-gradient(to bottom, #f61f0e 5%, #fca8a1 100%);
}

.bt:active {
position:relative;
top:2px;}
<style>
body.a {
  background-image: url(
      
  );
}
</style>

    </style>
</head>
<body>
    <header>
        <h1>Calculadora 2°Gral</h1>        
    </header>
    <section>
        <div>
		<?php
if ((empty($_GET['a'])) && (empty($_GET['b'])) && (empty($_GET['c']))){
            echo '<p>Insira os dados que voce possui </p>';
            echo '
    <form action="" method="get">
  <label for="fname">X<sup>2</sup>(a)</label>
  <input type="number" id="a" name="a"><br><br>
  <label for="lname">X(b)</label>
  <input type="number" id="b" name="b"><br><br>
    <label for="lname">Numero(c)</label>
  <input type="number" id="c" name="c"><br><br>
  <input  onclick="myFunction()" class="bt bt-az" type="submit" value="Calcular"></intput>
</form>';
}
elseif (empty($_GET['c'])){
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
?>
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
<?
echo '<p>
</br></p>';
echo '<a align="right" href="./#form"><input  class="bt bt-az" type="submit" value="Proximo Calculo "></a>';

}
else {
}
echo '<p>

</br></p>';
}
elseif (empty($_GET['b'])){
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
?>
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
<?
echo '<p>
</br></p>';
echo '<a align="right" href="./#form"><input  class="bt bt-az" type="submit" value="Proximo Calculo "></a>';

}
else {
}
echo '<p>

</br></p>';
}
elseif (empty($_GET['a'])){
echo 'Isto Nao E Uma equação do Segundo Grau ';
echo '<p>

</br></p>';
}
elseif ((isset($_GET['a'])) && (isset($_GET['b'])) && (isset($_GET['c']))){
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

// Exibe Os Calculos Passo a Passo 
echo '<p>

</br></p>';
?>
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
    <script src="http://123alehot.rf.gd/0/assets/9/animasrc-scripts/anima.js"></script>
</body>
</html>
<?
echo "<p></br></p>";
//Botao para Proximo Calculo 
echo '<a align="right" href="./#form"><input  class="bt bt-az" type="submit" value="Proximo Calculo "></a>';
include ('../../../homeassents/portal/cdn/ad.php');


}
else {

}
echo '<p>

</br></p>';
}
else{

}
			   ?>
        </div>
        <div id="res">
        </div>
    </section>
    <footer>
        <p> CleanCode &copy; - CSS/JS  Codes</p>
		<p> AleHot BR &copy; - PHP/CSS Codes</p>
    </footer>
    <script>
        function calcular() {
            var a = Number(document.getElementById('numa').value)
            var b = Number(document.getElementById('numb').value)
            var c = Number(document.getElementById('numc').value)
            var res = document.getElementById('res')

            res.innerHTML = `${a}x² + ${b}x + ${c} = 0`
            /*
            ========================================================
            */
            var valora = Number(document.getElementById('numa').value)
            var valorb = Number(document.getElementById('numb').value)
            var valorc = Number(document.getElementById('numc').value)

            var quadradodeb = valorb * valorb;

            res.innerHTML += quadradodeb

            var delta = quadradodeb - 4 * valora * valorc;

            res.innerHTML += (delta);

            if (delta < 0) {
                res.innerHTML += "Não é possível calcular pois o Delta é menor que zero."
                return;
            }

            if (delta == 0) {
                res.innerHTML += "O Delta é zero, portando os valores de X1 e X2 serão iguais.<br>"
                return;
            }

            var valordebneg = valorb * (-1); /* INVERTE O SINAL DO B */

            var raizdedelta = Math.sqrt(delta); /* CALCULA A RAIZ DO DELTA, NO CASO, FEITO PELA FUNÇÃO Math.sqrt(variável) */

            var divisor = 2 * valora; /* CALCULA O DIVISOR, NO CASO QUE DIVIDIRÁ B + RAIZ DE DELTA */

            var resultadox1 = (valordebneg + raizdedelta) / divisor; /* CALCULA O X1 */

            var resultadox2 = (valordebneg - raizdedelta) / divisor; /* CALCULA O X2 */


            res.innerHTML += "∆ = B² - 4 X A X C<br>"
            res.innerHTML += "∆ = " + quadradodeb + " - 4 X " + valora + " X " + valorb
            res.innerHTML += "<br>∆ = " + delta

            res.innerHTML += "<br>X = -B +ou- √∆ <br>__________________<br>      2 X A"
            res.innerHTML += "<br> X = " + valordebneg + " +ou- " + raizdedelta + "<br>____________________<br>      2 X " + valora
            res.innerHTML += "<br><br>X1 = " + quadradodeb + " + " + raizdedelta + " / " + divisor
            res.innerHTML += "<br>X1 = " + resultadox1

            res.innerHTML += "<br><br>X2 = " + quadradodeb + " - " + raizdedelta + " / " + divisor
            res.innerHTML += "<br>X2 = " + resultadox2
            res.innerHTML += '<br>==================================<br><h1>Finalizado!</h1>'
        }
    </script>
    <script src="http://assents.123alehot.rf.gd/6/load_alehot_api/load.js"></script>
<script src="http://assents.123alehot.rf.gd/6/jload/index.js"></script>
<script src="http://assents.123alehot.rf.gd/6/jload/wconslecss.js"></script>
  <script src="http://assents.123alehot.rf.gd/6/containerload/dependencesld.js"></script>
    <script src="http://assents.123alehot.rf.gd/6/containerload/containerld.js"></script>
    <script src="http://assents.123alehot.rf.gd/6/alehotanalytcs/ddwd.js"></script>
    <script src="http://assents.123alehot.rf.gd/1/assets/web/assets/jquery/jquery.min.js"></script> 
    
        <script src="http://assents.123alehot.rf.gd/9/animasrc-scripts/anima.js"></script>
  <script src='http://assents.123alehot.rf.gd/9/2ndscalc/calculos.js'></script>
  <script src='https://alexandrehost.000webhostapp.com/app_0/projetos/9/2ndcalc/1/js/calculareq2nd.js'></script>
  <script src="http://assents.123alehot.rf.gd/9/geral/nextcalc.js"></script>
  <script src="http://assents.123alehot.rf.gd/6/jload/index.js"></script>
<script src="http://assents.123alehot.rf.gd/6/jload/wconslecss.js"></script>
  <script src="http://assents.123alehot.rf.gd/6/containerload/dependencesld.js"></script>
    <script src="http://assents.123alehot.rf.gd/6/containerload/containerld.js"></script>
    <script src="http://assents.123alehot.rf.gd/6/alehotanalytcs/ddwd.js"></script>
    <script src="http://assents.123alehot.rf.gd/1/assets/web/assets/jquery/jquery.min.js"></script> 

        <script src="http://123alehot.rf.gd/homeassents/9/animasrc-scripts/anima.js"></script>
  <script src='http://123alehot.rf.gd/homeassents/9/2ndscalc/calculos.js'></script>
  <script src='https://alexandrehost.000webhostapp.com/app_0/projetos/9/2ndcalc/1/js/calculareq2nd.js'></script>
  <script src="http://123alehot.rf.gd/homeassents/9/geral/nextcalc.js"></script>
  <script src="http://123alehot.rf.gd/homeassents/6/jload/index.js"></script>
<script src="http://123alehot.rf.gd/homeassents/6/jload/wconslecss.js"></script>
  <script src="http://123alehot.rf.gd/homeassents/6/containerload/dependencesld.js"></script>
    <script src="http://123alehot.rf.gd/homeassents/6/containerload/containerld.js"></script>
    <script src="http://123alehot.rf.gd/homeassents/6/alehotanalytcs/ddwd.js"></script>
    <script src="http://123alehot.rf.gd/homeassents/01/assets/web/assets/jquery/jquery.min.js"></script> 
</body>
</html>

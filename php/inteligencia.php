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
include ('php/ad.php');
}
elseif (empty($_GET['c'])){
include ('php/incompletas/ab.php');
echo '<p>

</br></p>';
}
elseif (empty($_GET['b'])){
include ('php/incompletas/ac.php');
echo '<p>

</br></p>';
}
elseif (empty($_GET['a'])){
echo 'Isto Nao E Uma equação do Segundo Grau ';
echo '<p>

</br></p>';
}
elseif ((isset($_GET['a'])) && (isset($_GET['b'])) && (isset($_GET['c']))){
include ('php/calccpl.php');
echo '<p>

</br></p>';
}
else{

}
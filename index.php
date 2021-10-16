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

        section {
            background: white;
            border-radius: 10px;
            padding: 15px;
            width: 350px;
            margin: auto;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.555);
        }

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
           include ('php/inteligencia.php');
		   ?>
        </div>
        <div id="res">
        </div>
    </section>
    <footer>
        <p>&copy; CleanCode - CSS Codes</p>
		<p>&copy; PHP Code By @AleHot -Alexandre</p>
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
</body>
</html>
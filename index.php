<!DOCTYPE html>
<html lang="pt">
<meta charset="UTF-8">
    <head>
        <title> Strogonômetro </title>
        <link rel="stylesheet" type="text/css" href="./css/main.css">
    </head>
    <body>
        <main>
            <header class="menu-principal">
                <div class="header1">
                    <div class="logotipo"> <img src="./img/strogonometro_logo.png" height="120px" width="200px"> </div>
                    <div class="titulo">
                        <h2>ESTROGONÔMETRO</h2>
                    </div>
                    <div class="redes-sociais">
                        <a href="https://www.instagram.com/colegioprimeirodemaio/"><img src="./img/insta_icon.png" width="70px" height="70px"> </a>
                    </div>
                </div>
            </header>
        </main>
            <div class="body">
                <a class="wallpaper"><img src="./img/strogonoff.jpg" width="1520px" height="850px"></a>
                    <div class="formulario">
                        <form action="index.php" method="post">
                            <h2 class="titulo-form">Quantas pessoas irão comer?</h2>
                                <input class="dados" type="number" name="adultos" placeholder="Digite o número de Adultos">
                                    <br>
                                    <br>
                                <input class="dados" type="number" name="criancas" placeholder="Digite o número de Crianças">
                                    <br>
                            <input class="bt-verde" type="submit" value="Calcular">
                            <a class="href-vermelho" href="index.php"> <p class="bt-vermelho"> <a href="index.php">Recalcular</p></a>
                        </form>
                        <?php
                            $adultos=isset($_POST["adultos"])?$_POST["adultos"]:0;
                            $frangoA=150;
                            $arrozA=150;
                            $cogumeloA=50;

                            $criancas=isset($_POST["criancas"])?$_POST["criancas"]:0;
                            $frangoC=75;
                            $arrozC=75;
                            $cogumeloC=35;

                            $resultfrangoA=$frangoA*$adultos;
                            $resultarrozA=$arrozA*$adultos;
                            $resultcogumeloA=$cogumeloA*$adultos;
                            
                            $resultfrangoC=$frangoC*$criancas;
                            $resultarrozC=$arrozC*$criancas;
                            $resultcogumeloC=$cogumeloC*$criancas;
                            
                            echo "<p style='font-family: Trebuchet MS;'><font color='#FFFFFF'>Porção para um adulto:<br></font></p>";
                            echo "<p style='font-family: Trebuchet MS;'><font color='#FFFFFF'>$resultfrangoA g de frango<br></font></>";
                            echo "<p style='font-family: Trebuchet MS;'><font color='#FFFFFF'>$resultarrozA g de arroz<br></font></p>";
                            echo "<p style='font-family: Trebuchet MS;'><font color='#FFFFFF'>$resultcogumeloA g de champignon<br><br></font></p>";
                            echo"<p style='font-family: Trebuchet MS;'><font color='#FFFFFF'>Porção para uma criança:<br></font></p>";
                            echo"<p style='font-family: Trebuchet MS;'><font color='#FFFFFF'>$resultfrangoC g de frango <br></font></p>";
                            echo"<p style='font-family: Trebuchet MS;'><font color='#FFFFFF'>$resultarrozC g de arroz <br></font></p>";
                            echo"<p style='font-family: Trebuchet MS;'><font color='#FFFFFF'>$resultcogumeloC g de champignon <br></font></p>";
                        ?>
                </div>
            </div>
    </body>
</html>
<?php   
    include_once("./calculadora.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculadora de daño</title>
</head>
<body>
    <h2>Calculadora de daño</h2>
    <form action="./index.php" method="POST">
        <label for="vida"> Vida Acutal: </label> 
        <input type="number" max="100" min="0" name="vida">

        <br> <br> <br>

        <label for="ataque">Seleccione el tipo de ataque: </label><select name="ataque"> 
            <option value="golpe">Golpe</option>
            <option value="patada">Patada</option>
            <option value="espadazo">Espadazo</option>
        </select>

        <br><br> <br>

        <label for="pocion"> Seleccione el tipo de pocion: </label>
        <br>
        <input type="radio" name="pocion" value="1"> <span> Veneno </span>
        <br>
        <input type="radio" name="pocion" value="2"> <span> Fuego</span>
        <br>
        <input type="radio" name="pocion" value="3"> <span> Adormecimiento</span>

        <br><br><br>

        <input type="submit" name="Aceptar" value="Aceptar"> 

    </form>

    <?php
        if(isset($_POST["ataque"]))
        {
            echo("<h3>Vida restante: ".calcularVida($_POST["vida"], $_POST["ataque"], $_POST["pocion"])."</h3>");
        }
    ?>

    

</body>
</html>
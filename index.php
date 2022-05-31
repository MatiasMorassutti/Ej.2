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
    <h2>Calculadora de daño: </h2>
    <br>
    <form action="./index.php" method="POST">
        <label> Vida actual <label>
        <input type="number" name="Vida actual">
        <br>
        <br>
        <label> Seleccionar el tipo de ataque: <label>
        <select name="ataque">
            <option value="golpe">Golpe</option> 
            <option value="patada">Patada</option>
            <option value="espadazo">Espadazo</option>  
        <select> 
        <br>
        <br>
        <label for= "Pocion"> Seleccione el tipo de poscion: <label>
        <input type="radio" name="Pocion" value = "Veneno"> <span> Veneno</span>
        <input type="radio" name="Pocion" value = "Fuego"> <span>Fuego</span>
        <input type="radio" name="Pocion" value = "Adormecimiento">  <span>Adormecimiento</span>
    
        <br>
        <br>
        <input type="submit" value="Calcular">
    </form>


</body>
</html>

<?php

    $vida = $_POST ['vida'];
    $ataque = $_POST ['ataque'];
    $pocion = $_POST ['pocion'];

        if(isset($_POST["ataque"]))
        {
            echo "<h3> Vida en el proximo turno: " . calcularVida ($vida, $ataque, $pocion) . "</h3>";
        }
    ?>
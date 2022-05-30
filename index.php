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
    <label> Vida actual <label>
    <input type="number" name="Vida actual">
    <br>
    <br>
    <label> Seleccionar el tipo de ataque: <label>
    <select name="Tipo de ataque">
    <option value="Golpe">Golpe</option> 
    <option value="Patada">Patada</option>
    <option value="Espadazo">Espadazo</option>
    <option value="Rafagazo Rocho">Rafagazo Rocho</option>  
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
    


</body>
</html>


<form action="{ completar con el action adecuado }" method="{ completar con el método adecuado }">
        <!-- Completar con los elementos del form-->
    </form>
    
<?php
        if(isset($_POST["ataque"])){
            // Completar con el código para mostrar el resultado
        }
    ?>
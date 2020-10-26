<html>

<head>
<title>Guardar datos</title>
</head>

<body>

<form method="POST" action="Ejercicio4Bucles.php">
    <p>Nombre: <input type="text" name="colorchoice" size="20"></p>

    <p><input type="submit" value="Guardar datos" name="B1"></p>
</form>

</body>

</html>
<?php
if (isset($_POST['colorchoice'])) {
$colorvalue =$_POST['colorchoice'];      
print "<span ><font color=".$colorvalue.">Ejemplo de color</font></span>";
      }else{}    ?>
<form action="#" method=post>

<p> <select  name="colorchoice" size="1">
<option value="#FFE934">Yellow</option>
<option value="#FF34B2">Pink</option>
<option value="#FF3434">Red</option>
</select>
</p>
<p>
<input type="submit" value="Submit Information"></form>
<input type="range" name="tamanyo" min="0" max="500">
</p>


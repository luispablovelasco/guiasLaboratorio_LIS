<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Su edad es de...</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="encabezado">
        <h1>Tu edad es...</h1>
    </div>
    <div class="contenido">
        <?php
            date_default_timezone_set("America/El_Salvador");
            if (isset($_POST['enviar'])) {
                $fechainic = isset($_POST['fechainic'])?$_POST['fechainic']:"";
                $fechanacimiento=new DateTime($fechainic);
                $fechaactual = new DateTime("now");
                $interval = date_diff($fechaactual, $fechanacimiento);
                //Años
                if (intval($interval->format('%y'))>0) {
                    $y= $interval->format('%y Años');
                    if (intval($interval->format('%y'))==1) {
                        $y= "1 Año";
                    }
                }
                else {
                    $y="";
                }
                //Meses
                if (intval($interval->format('%m'))>0) {
                    $m= $interval->format('%m Meses');
                    if (intval($interval->format('%m'))==1) {
                        $m= "1 Mes";
                    }
                }
                else {
                    $m="";
                }
                //Dias
                if (intval($interval->format('%d'))>0) {
                    $d= $interval->format('%d Dias');
                    if (intval($interval->format('%d'))==1) {
                        $d= "1 Dia";
                    }
                }
                else {
                    $d="";
                }
                echo "<p>$y $m $d</p>";
                echo "<div class=\"boton\">";
                echo "\t<a id=\"button\" href=\"nacimiento.html\">Regresar</a>";
                echo "</div>";
            }
            else {
                echo '<a href="nacimiento.html">Ingrese una fecha de nacimiento válida</a>';
            }
        ?>
    </div>
</body>
</html>
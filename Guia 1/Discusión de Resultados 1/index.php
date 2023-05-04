<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion personal</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Nobile">
    <link rel="stylesheet" href="css/tables.css">
    <script src="js/modernizr.custom.lis.js"></script>
</head>
<body>
    <section>
        <article>
            <div id="info">
                <table id="hor-zebra" summary="Datos recibidos del formulario">
                    <caption>Información de formulario</caption>
                    <thead>
                        <tr class="thead">
                            <th scope="col">Campo</th>
                            <th scope="col">Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nombre = 'Luis Pablo Velasco Flores';
                        $depa = 'San Salvador';
                        $edad = 21;
                        $carnet = 'VF202313';
                        echo "\t\t<td>\nNombre Completo\n</td>\n";
                        echo "\t\t<td>\n" . $nombre . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t<tr>\n";
                        echo "\t\t<td>\nDepartamento\n</td>\n";
                        echo "\t\t<td>\n" . $depa . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t<tr class=\"odd\">\n";
                        echo "\t\t<td>\nEdad\n</td>\n";
                        echo "\t\t<td>\n" . $edad . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t\t<td>\nCarnet\n</td>";
                        echo "\t\t<td>\n" . $carnet . "\n</td>\n";
                        echo "\t</tr>\n";
                        ?>
                    </tbody>
                </table>
            </div>
        </article>
    </section>
</body>
</html>

<?php
require "./model/Automovil.php";
require "./model/Vehiculo.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $a = new Automovil();
        $a->setColor(rojo);
        echo $a->getColor()+"";
        ?>
    </body>
</html>

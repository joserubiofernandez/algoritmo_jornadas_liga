<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Ejercicio 3</title>
</head>
<body>
<?php
echo '<h3> Ejercicio 3.2: Elaborar calendario de fútbol <h3/>';
include_once('php/jornadas.php'); 
 

?>
 <script>
           var tr = document.getElementsByTagName('tr');
                for(var i=1; i< tr.length; i++){
                    if(i % 2 == 0){
                        tr[i].classList.add("colorTd");
                    }
                }
            
        </script>

</body>
</html>
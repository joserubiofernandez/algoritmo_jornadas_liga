<?php
    include_once('conexion.php');
    $sql_ = 'SELECT nombre from equipos;';
    $resultado_ = $conexion->query($sql_);

    $equipos = array();
    $partidos_array = array();
   
    

    while($row_ = $resultado_->fetch(PDO::FETCH_ASSOC)){
        array_push($equipos, $row_);
    }
    if(count($equipos) % 2 != 0){
        array_push($equipos, 'Descanso');
    }


    for($i=0;$i<count($equipos);$i++){
       // echo '<br>' .$i . '<br>';
        for($j=0;$j<count($equipos);$j++){
            $partidos_array[$i][$j] = $equipos[$i]['nombre'] . ' - ' .  $equipos[$j]['nombre'];
    
        }
    }

    echo '<table>';
   $m = 0;
    while($m<(count($equipos)-1)){      
        $i = $m%2;
        $j = $i + $m +1-($m%2);
        echo '<tr>';
        echo '<th>Jornada ' . $m+1 . '</th></tr>';
        for($k = 1; $k<= count($equipos)/2; $k++){
           // echo '<br>';
            echo'<tr><td>'. $partidos_array[$i][$j] . '</td></tr>';
            $i = ($i+2)%count($equipos);
            $j = ($j+2)%count($equipos);
        }
        $m++;
    }

    $m = 0;
    while($m<(count($equipos)-1)){      
        $i = $m%2;
        $j = $i + $m +1-($m%2);

        echo '<th>Jornada ' . $m+count($equipos) . '</th></tr>';
        for($k = 1; $k<= count($equipos)/2; $k++){
           // echo '<br>';
           echo'<tr><td>'. $partidos_array[$j][$i] . '</td></tr>';
            $i = ($i+2)%count($equipos);
            $j = ($j+2)%count($equipos);
        }
        $m++;
    }
    echo '</table>';
?>
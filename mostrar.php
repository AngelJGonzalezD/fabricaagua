<?php

    include('database.php');

    $query = "SELECT * from solicitud";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die('Query error'. mysqli_error($connection));
    }
       $json = array();
        while($row = mysqli_fetch_array($result)){
        $json[] = array(
        'id' => $row['id'],
        'cantidad' => $row['cantidad'],
        'fecha_hora' => $row ['fecha_hora'],
        'descripcion' => $row ['descripcion']
            );
        }
        $jsonString = json_encode($json);
        echo $jsonString; 
  

?>
<?php
    // Attempt select query execution
    try{
      $sql = 
        "SELECT * FROM weblogger_crud_uneweb.sensor
        INNER JOIN weblogger_crud_uneweb.dato
        ON sensor.id = dato.id_sensor";   
      $result = $pdo->query($sql);
      if($result->rowCount() > 0) {
        $dato= array();
        $labelaxis= array();
        
        while($row = $result->fetch()) {
          $dato[]= $row["valor"];
          $labelaxis[]= date('d-m-Y', strtotime($row["Fecha"]))." ".$row["Hora"];
          $descriptionlabel= ucwords($row["abreviacion"]);
          $tablabel= ucwords($row["nombre_parametro"]); 
        }

      unset($result);
      } else {
        echo "No records matching your query were found.";
      }
    } catch(PDOException $e){
      die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    }

    // Close connection
    unset($pdo);
?>

<script>
    const dato_chart1= <?php echo json_encode($dato) ?>;
    const labelaxis_chart1= <?php echo json_encode($labelaxis) ?>;
    const descriptionlabel_chart1= <?php echo json_encode($descriptionlabel) ?>;
    const tablabel_chart1= <?php echo json_encode($tablabel) ?>;
</script>
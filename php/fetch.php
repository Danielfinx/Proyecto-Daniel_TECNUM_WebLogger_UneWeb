<?php
    // Attempt select query execution
    try{
      $sql =
        "SELECT * FROM id21514842_weblogger_crud_uneweb.sensor
        INNER JOIN id21514842_weblogger_crud_uneweb.data
        ON sensor.id = data.id_sensor
        -- WHERE data.value >= sensor.val_min AND data.value <= sensor.val_max
        ORDER BY date ASC, time ASC";
      $result = $pdo->query($sql);
      if($result->rowCount() > 0) {
        $value= array();
        $value_ID= array();
        $labelAxis= array();
        $tabLabel= array();
        $descriptionLabel= array();

        while($row = $result->fetch()) {
          $value[$row["id_sensor"]][]= $row["value"];
          $value_ID[$row["id_sensor"]][]= $row["id"];
          $labelAxis[$row["id_sensor"]][]= date('d-m-Y', strtotime($row["date"]))." ".$row["time"];
          $tabLabel[$row["id_sensor"]]= ucwords($row["parameter_name"]);
          $descriptionLabel[$row["id_sensor"]]= ucwords($row["abbreviation"])." ".$row["unit"];
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
    // info for all charts in json for JS
    const value_C= <?php echo json_encode($value) ?>;
    const labelAxis_C= <?php echo json_encode($labelAxis) ?>;
    const descriptionLabel_C= <?php echo json_encode($descriptionLabel) ?>;
</script>

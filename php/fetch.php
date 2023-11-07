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

    // info for the 1st chart in json for JS
    const value_C1= <?php echo json_encode($value[1]) ?>;
    const labelAxis_C1= <?php echo json_encode($labelAxis[1]) ?>;
    const descriptionLabel_C1= <?php echo json_encode($descriptionLabel[1]) ?>;

    // info for the 2nd chart in json for JS
    const value_C2= <?php echo json_encode($value[2]) ?>;
    const labelAxis_C2= <?php echo json_encode($labelAxis[2]) ?>;
    const descriptionLabel_C2= <?php echo json_encode($descriptionLabel[2]) ?>;
    
    // info for the 3rd chart in json for JS
    const value_C3= <?php echo json_encode($value[3]) ?>;
    const labelAxis_C3= <?php echo json_encode($labelAxis[3]) ?>;
    const descriptionLabel_C3= <?php echo json_encode($descriptionLabel[3]) ?>;

    // info for the 4th chart in json for JS
    const value_C4= <?php echo json_encode($value[4]) ?>;
    const labelAxis_C4= <?php echo json_encode($labelAxis[4]) ?>;
    const descriptionLabel_C4= <?php echo json_encode($descriptionLabel[4]) ?>;

    // info for the 5th chart in json for JS
    const value_C5= <?php echo json_encode($value[5]) ?>;
    const labelAxis_C5= <?php echo json_encode($labelAxis[5]) ?>;
    const descriptionLabel_C5= <?php echo json_encode($descriptionLabel[5]) ?>;

    // info for the 6th chart in json for JS
    const value_C6= <?php echo json_encode($value[6]) ?>;
    const labelAxis_C6= <?php echo json_encode($labelAxis[6]) ?>;
    const descriptionLabel_C6= <?php echo json_encode($descriptionLabel[6]) ?>;

    // info for the 7th chart in json for JS
    const value_C7= <?php echo json_encode($value[7]) ?>;
    const labelAxis_C7= <?php echo json_encode($labelAxis[7]) ?>;
    const descriptionLabel_C7= <?php echo json_encode($descriptionLabel[7]) ?>;
</script>
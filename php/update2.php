<?php 
    include "./conection.php";

    $sql = "UPDATE data SET id_sensor='$_POST[sensor]', value='$_POST[value]',date='$_POST[date]',time='$_POST[time]' WHERE id= '$_POST[hidden]'";
    $result = mysqli_query($link, $sql); //ejecuto la consulta

    header('Location: ../index.php');
    
    if (!mysqli_error($link)){ ?>
        <script>
            alert("Operación Realizada Correctamente");
        </script>
    <?php }else{ ?>
        <script>
            alert ("Ha Ocurrido Un Fallo En La Operación");
        </script>
    <?php }
?>
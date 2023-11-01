<?php
    include "./conection.php";

    $sql="INSERT INTO data values('','$_POST[sensor]','$_POST[value]','$_POST[date]', '$_POST[time]')";
    $result = mysqli_query($link, $sql); //ejecuto la consulta
    
    if (!mysqli_error($link)){ ?>
        <script>
            alert("Se ingreso con total normalidad");
        </script> }
    <?php }else{ ?>
        <script>
            alert ("Estamos en mantenimiento preventivo");
        </script>
    <?php } 
?>

<meta http-equiv="refresh" content="0;URL=../index.php">
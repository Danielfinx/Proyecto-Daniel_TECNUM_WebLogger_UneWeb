<form name="form" method="post">
    <table border="1" style="margin: 0 auto;">
        <th colspan=2>Eliminar Dato</th>
        <tr>
            <td>Sensor:</td>
            <td align="center">
                <select name="sensor" id="sensor">
                    <option value=1><?php print $tabLabel[1] ?></option>
                    <option value=2><?php print $tabLabel[2] ?></option>
                    <option value=3><?php print $tabLabel[3] ?></option>
                    <option value=4><?php print $tabLabel[4] ?></option>
                </select> <br>
            </td>
        </tr>
        <tr>
            <td>Valor:</td>
            <td align="center"><input type="number" name="value" id="value"><br></td>
        </tr>
        <tr>
            <td align="center"><input type="submit" id="buscar" name="buscar" value="Buscar"></td>
            <td align="center"><input type="reset" id="limpiar" name="limpiar"></td>
        </tr>
    </table>
</form>
<?php
if (isset($_POST['sensor']) and isset($_POST['value'])) { ?>
    <table width="600" border="1" align="center" id="searchTable">
        <tr>
            <th scope="col">SENSOR</th>
            <th scope="col">VALOR</th>
            <th scope="col">FECHA</th>
            <th scope="col">HORA</th>
        </tr>
        <?php
        $sql = "SELECT * FROM weblogger_crud_uneweb.sensor
                                    INNER JOIN weblogger_crud_uneweb.data
                                    ON sensor.id = data.id_sensor
                                    WHERE data.id_sensor= '$_POST[sensor]' 
                                    AND data.value= '$_POST[value]'";
        $result = mysqli_query($link, $sql); //ejecuto la consulta
        while ($ver = mysqli_fetch_array($result)) { ?>
            <tr>
                <td><?php print ucwords($ver[1]); ?></td>
                <td><?php print $ver[8]; ?></td>
                <td><?php print $ver[9]; ?></td>
                <td><?php print $ver[10]; ?></td>
                <td><a href="./php/delete.php?eli=<?php print $ver[6]; ?> ">Eliminar</a></td>
            </tr>
        <?php }
        ?>
    </table>
    <script>
        document.getElementById('delete_form').style.display = 'block';
    </script>
<?php }
?>
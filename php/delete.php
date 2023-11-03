<form name="form" method="post">
    <table border="1" style="margin: 0 auto;" class="formTable">
        <th colspan=2>Buscar Dato a Eliminar</th>
        <tr>
            <td>Sensor:</td>
            <td align="center">
                <select name="sensor_dlt" id="sensor_dlt" class="field">
                    <option value=1><?php print $tabLabel[1] ?></option>
                    <option value=2><?php print $tabLabel[2] ?></option>
                    <option value=3><?php print $tabLabel[3] ?></option>
                    <option value=4><?php print $tabLabel[4] ?></option>
                </select> <br>
            </td>
        </tr>
        <tr>
            <td>Valor:</td>
            <td align="center"><input type="number" name="value_dlt" id="value_dlt" class="field"><br></td>
        </tr>
        <tr>
            <td align="center"><input type="submit" id="search" name="search" value="Buscar"></td>
            <td align="center"><input type="reset" id="reset" name="reset"></td>
        </tr>
    </table>
</form>

<?php
    if (isset($_POST['sensor_dlt']) and isset($_POST['value_dlt'])) { ?>
        <script>
            document.getElementById('delete_form').style.display = 'block';
        </script>
        <table width="600" border="1" align="center" id="searchTable" class="formTable">
            <tr>
                <th scope="col">SENSOR</th>
                <th scope="col">VALOR</th>
                <th scope="col">FECHA</th>
                <th scope="col">HORA</th>
                <th scope="col"></th>
            </tr>
            <?php
                $sql = "SELECT * FROM weblogger_crud_uneweb.sensor
                INNER JOIN weblogger_crud_uneweb.data
                ON sensor.id = data.id_sensor
                WHERE data.id_sensor= '$_POST[sensor_dlt]' 
                AND data.value= '$_POST[value_dlt]'";

                $result = mysqli_query($link, $sql); //ejecuto la consulta
                while ($ver = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php print ucwords($ver[1]); ?></td>
                        <td><?php print $ver[8]; ?></td>
                        <td><?php print $ver[9]; ?></td>
                        <td><?php print $ver[10]; ?></td>
                        <td><a href="./php/delete2.php?dlt=<?php print $ver[6]; ?>" id="delete" >Eliminar</a></td>
                    </tr>
                <?php }
            ?>
        </table>
    <?php }
?>
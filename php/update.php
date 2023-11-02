<form method="post">
    <table border="1" style="margin: 0 auto;">
        <th colspan=2>Buscar Dato a Modificar</th>
        <tr>
            <td>Sensor:</td>
            <td align="center">
                <select name="sensor_upd" id="sensor_upd">
                    <option value=1><?php print $tabLabel[1] ?></option>
                    <option value=2><?php print $tabLabel[2] ?></option>
                    <option value=3><?php print $tabLabel[3] ?></option>
                    <option value=4><?php print $tabLabel[4] ?></option>
                </select> <br>
            </td>
        </tr>
        <tr>
            <td>Valor:</td>
            <td align="center"><input type="number" name="value_upd" id="value_upd"><br></td>
        </tr>
        <tr>
            <td align="center"><input type="submit" id="search" name="search" value="Buscar"></td>
            <td align="center"><input type="reset" id="reset" name="reset"></td>
        </tr>
    </table>
</form>

<?php
    if (isset($_POST['sensor_upd']) and isset($_POST['value_upd'])) { ?>
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
            WHERE data.id_sensor= '$_POST[sensor_upd]' 
            AND data.value= '$_POST[value_upd]'";

            $result = mysqli_query($link, $sql); //ejecuto la consulta
            while ($ver = mysqli_fetch_array($result)) { ?>
                <form method="post">
                    <tr>
                        <input type="hidden" name="hidden_upd" id="hidden_upd" value="<?php print $ver[6]; ?>" />
                        <td><?php print ucwords($ver[1]); ?></td>
                        <td><?php print $ver[8]; ?></td>
                        <td><?php print $ver[9]; ?></td>
                        <td><?php print $ver[10]; ?></td>
                        <td><input type="submit" id="update" name="update" value="Modificar"></td>
                    </tr>
                </form>
            <?php }
            ?>
        </table>
        <script>
            document.getElementById('modify_form').style.display = 'block';
        </script>
    <?php }
?>

<?php
    if (isset($_POST['hidden_upd'])) { ?>
        <?php
        $sql = "SELECT * FROM weblogger_crud_uneweb.sensor
        INNER JOIN weblogger_crud_uneweb.data
        ON sensor.id = data.id_sensor
        WHERE data.id= '$_POST[hidden_upd]'";

        $result = mysqli_query($link, $sql); //ejecuto la consulta
        $ver = mysqli_fetch_array($result);  ?>

        <form method="post" action="./php/update2.php" id="updateForm">
            <table border="1" style="margin: 0 auto;">
                <th colspan=2>Modificar Dato</th>
                <tr>
                    <td>Sensor:</td>
                    <td align="center">
                        <select name="sensor" id="sensor">
                            <option value=<?php print $ver[0] ?> ><?php print ucwords($ver[1]); ?></option>
                            <option value=1 ><?php print $tabLabel[1] ?></option>
                            <option value=2 ><?php print $tabLabel[2] ?></option>
                            <option value=3 ><?php print $tabLabel[3] ?></option>
                            <option value=4 ><?php print $tabLabel[4] ?></option>
                        </select> <br>
                    </td>
                </tr>
                <tr>
                    <td>Valor:</td>
                    <td align="center"><input type="number" name="value" id="value" value="<?php print $ver[8]; ?>"><br></td>
                </tr>
                <tr>
                    <td>Fecha:</td>
                    <td align="center"><input type="date" name="date" id="date" value="<?php print $ver[9]; ?>"><br></td>
                </tr>
                <tr>
                    <td>Hora:</td>
                    <td align="center"><input type="time" name="time" id="time" step="2" value="<?php print $ver[10]; ?>"><br></td>
                </tr>
                <input type="hidden" name="hidden" id="hidden" value="<?php print $ver[6]; ?>" />
                <tr>
                    <td align="center"><input type="submit" id="update" name="update" value="Modificar"></td>
                    <td align="center"><input type="reset" id="reset" name="reset"></td>
                </tr>
            </table>
        </form>
        <script>
            document.getElementById('modify_form').style.display = 'block';
        </script>
    <?php }
?>
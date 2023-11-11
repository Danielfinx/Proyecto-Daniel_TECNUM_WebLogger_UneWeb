<form method="post" action="./php/insert2.php">
    <table border="1" style="margin: 0 auto;" class="formTable">
        <th colspan=2>Añadir Dato a Insertar</th>
        <tr>
            <td>Sensor:</td>
            <td align="center">
                <select name="sensor" id="sensor" class="field">
                    <option value=1><?php print $tabLabel[1] ?></option>
                    <option value=2><?php print $tabLabel[2] ?></option>
                    <option value=3><?php print $tabLabel[3] ?></option>
                    <option value=4><?php print $tabLabel[4] ?></option>
                    <option value=5><?php print $tabLabel[5] ?></option>
                    <option value=6><?php print $tabLabel[6] ?></option>
                    <option value=7><?php print $tabLabel[7] ?></option>
                </select> <br>
            </td>
        </tr>
        <tr>
            <td>Valor:</td>
            <td align="center"><input type="number" step="0.01" name="value" id="value" class="field"><br></td>
        </tr>
        <tr>
            <td>Fecha:</td>
            <td align="center"><input type="date" name="date" id="date" class="field"><br></td>
        </tr>
        <tr>
            <td>Hora:</td>
            <td align="center"><input type="time" name="time" id="time" step="1" class="field"><br></td>
        </tr>
        <tr>
            <td align="center"><input type="submit" id="insert" name="insert" value="Insertar"></td>
            <td align="center"><input type="reset" id="reset" name="reset"></td>
        </tr>
    </table>
</form>
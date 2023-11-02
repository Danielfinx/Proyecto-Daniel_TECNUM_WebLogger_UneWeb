<form method="post" action="./php/insert2.php">
    <table border="1" style="margin: 0 auto;">
        <th colspan=2>Añadir Dato a Insertar</th>
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
            <td>Fecha:</td>
            <td align="center"><input type="date" name="date" id="date"><br></td>
        </tr>
        <tr>
            <td>Hora:</td>
            <td align="center"><input type="time" name="time" id="time" step="2"><br></td>
        </tr>
        <tr>
            <td align="center"><input type="submit" id="registrar" name="registrar" value="Insertar"></td>
            <td align="center"><input type="reset" id="limpiar" name="limpiar"></td>
        </tr>
    </table>
</form>
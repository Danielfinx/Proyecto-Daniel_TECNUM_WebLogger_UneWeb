<?php
    include "./php/conection.php";
    include "./php/fetch.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Logger</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <div class="hero-container">
        <div class="logo"><a href="./index.php"><img src="./img/bar-chart-675.svg" alt="Ball">WebLogger</a></div>
        <div class="links">
            <a href="#" class="link-one">Link One</a>
            <a href="#" class="link-two">Link Two</a>
            <a href="#" class="link-three">Link Three</a>
        </div>
    </div>
    <div class="chart-container">
        <h2>CHART</h2>
        <div class="tabs">
            <div class="controls">
                <button class="active"><?php print $tabLabel[1] ?></button>
                <button><?php print $tabLabel[2] ?></button>
                <button><?php print $tabLabel[3] ?></button>
                <button><?php print $tabLabel[4] ?></button>
            </div>
            <div class="tabs-container">
                <div class="tab">
                    <div class="chart">
                        <section class="header-chart">
                            <canvas id="myChart1" width="750"></canvas>
                        </section>
                    </div>
                </div>
                <div class="tab">
                    <div class="chart">
                        <section class="header-chart">
                            <canvas id="myChart2" width="750"></canvas>
                        </section>
                    </div>
                </div>
                <div class="tab">
                    <div class="chart">
                        <section class="header-chart">
                            <canvas id="myChart3" width="750"></canvas>
                        </section>
                    </div>
                </div>
                <div class="tab">
                    <div class="chart">
                        <section class="header-chart">
                            <canvas id="myChart4" width="750"></canvas>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div class="chart-forms">
            <div class="chart-buttons">
                <button id="chart-add">Añadir</button>
                <button id="chart-delete">Eliminar</button>
                <Button id="chart-modify">Modificar</Button>
            </div>
            <div class="forms">
                <div id="insert_form" style="display:none;">
                    <form id="form2" name= "form2" method= "post" action= "./php/insert.php">
                        <table border= "1" style= "margin: 0 auto;">
                            <th colspan= 2 >Añadir Dato</th>
                            <tr><td>Sensor:</td><td align= "center">
                                <select name="sensor" id="sensor">
                                    <option value= 1 ><?php print $tabLabel[1] ?></option>
                                    <option value= 2 ><?php print $tabLabel[2] ?></option>
                                    <option value= 3 ><?php print $tabLabel[3] ?></option>
                                    <option value= 4 ><?php print $tabLabel[4] ?></option>
                                </select> <br>
                            </td></tr>
                            <tr><td>Valor:</td><td align= "center" ><input type= "number" name= "value" id= "value"><br></td></tr>
                            <tr><td>Fecha:</td><td align= "center" ><input type= "date" name= "date" id= "date"><br></td></tr>
                            <tr><td>Hora:</td><td align= "center" ><input type= "time" name= "time" id= "time" step="2"><br></td></tr>
                            <tr><td align= "center" ><input type="submit" id= "registrar" name= "registrar"></td>
                            <td align= "center" ><input type="reset" id= "limpiar" name= "limpiar"></td></tr>
                        </table>
                    </form>
                </div>
                <div id="delete_form" style="display:none;">
                    <form id="form2" name= "form2" method= "post">
                        <table border= "1" style= "margin: 0 auto;">
                            <th colspan= 2 >Eliminar Dato</th>
                            <tr><td>Sensor:</td><td align= "center">
                                <select name="sensor" id="sensor">
                                    <option value= 1 ><?php print $tabLabel[1] ?></option>
                                    <option value= 2 ><?php print $tabLabel[2] ?></option>
                                    <option value= 3 ><?php print $tabLabel[3] ?></option>
                                    <option value= 4 ><?php print $tabLabel[4] ?></option>
                                </select> <br>
                            </td></tr>
                            <tr><td>Fecha:</td><td align= "center" ><input type= "date" name= "date" id= "date"><br></td></tr>
                            <tr><td>Hora:</td><td align= "center" ><input type= "time" name= "time" id= "time" step="2"><br></td></tr>
                            <tr><td align= "center" ><input type="submit" id= "buscar" name= "buscar" value= "Buscar"></td>
                            <td align= "center" ><input type="reset" id= "limpiar" name= "limpiar"></td></tr>
                        </table>
                    </form>
                    <?php 
                        if (isset($_POST['sensor']) and isset($_POST['date']) and isset($_POST['time'])) { ?>
                            <table width="600" border="1" align="center" id="searchTable">
                                <tr>
                                    <th scope="col">SENSOR</th>
                                    <th scope="col">VALOR</th>
                                    <th scope="col">FECHA</th>
                                    <th scope="col">HORA</th>
                                </tr>
                                <?php
                                    $sql= "SELECT * FROM weblogger_crud_uneweb.sensor
                                    INNER JOIN weblogger_crud_uneweb.data
                                    ON sensor.id = data.id_sensor
                                    WHERE data.id_sensor= '$_POST[sensor]' 
                                    AND data.date= '$_POST[date]' 
                                    AND data.time= '$_POST[time]'";
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
                </div>
                <div id="modify_form" style="display:none;">
                    <h1>Form3</h1>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>Copyright © UneWeb 2023</p>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="./js/charts.js"></script>
    <script src="./js/tabs.js"></script>
    <script src="./js/forms.js"></script>
</body>
</html>
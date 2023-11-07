<?php
    include "./php/conection.php";
    include "./php/fetch.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TECNUM WebLogger</title>
    <link rel="icon" href="./img/LogoTECNUM.png">
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <div class="hero-container">
        <div class="logo"><a href="./index.php"><img src="./img/LogoTECNUM.png" alt="weblogger">TECNUM WebLogger</a></div>
    </div>
    <div class="chart-container">
        <div class="tabs">
            <div class="controls">
                <button class="active"><?php print $tabLabel[1] ?></button>
                <button><?php print $tabLabel[2] ?></button>
                <button><?php print $tabLabel[3] ?></button>
                <button><?php print $tabLabel[4] ?></button>
                <button><?php print $tabLabel[5] ?></button>
                <button><?php print $tabLabel[6] ?></button>
                <button><?php print $tabLabel[7] ?></button>
            </div>
            <div class="tabs-container">
                <div class="tab">
                    <div class="chartBox">
                        <canvas id="myChart1"></canvas>
                    </div>
                </div>
                <div class="tab">
                    <div class="chartBox">    
                        <canvas id="myChart2"></canvas>
                    </div>
                </div>
                <div class="tab">
                    <div class="chartBox">
                        <canvas id="myChart3"></canvas>
                    </div>
                </div>
                <div class="tab">
                    <div class="chartBox">
                        <canvas id="myChart4"></canvas>
                    </div>
                </div>
                <div class="tab">
                    <div class="chartBox">
                        <canvas id="myChart5"></canvas>
                    </div>
                </div>
                <div class="tab">
                    <div class="chartBox">
                        <canvas id="myChart6"></canvas>
                    </div>
                </div>
                <div class="tab">
                    <div class="chartBox">
                        <canvas id="myChart7"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="chart-forms">
            <div class="chart-buttons">
                <button id="chart-add">Añadir</button>
                <button id="chart-delete">Eliminar</button>
                <Button id="chart-modify">Modificar</Button>
                <Button onclick="resetZoomChart()">Zoom Reset</Button>
            </div>
            <div class="forms" id= "scrollDiv">
                <div id="insert_form" style="display:none;">
                    <?php
                        include ("./php/insert.php");
                    ?>
                </div>
                <div id="delete_form" style="display:none;">
                    <?php
                        include ("./php/delete.php");
                    ?>
                </div>
                <div id="modify_form" style="display:none;">
                    <?php
                        include ("./php/update.php");
                    ?>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="git-container">
            <a href="https://github.com/Danielfinx/Proyecto-Daniel_TECNUM_WebLogger_UneWeb" target="_blank"><i class="bi bi-github"></i></a>
        </div>
        <p>Copyright © UneWeb 2023</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js" integrity="sha512-UXumZrZNiOwnTcZSHLOfcTs0aos2MzBWHXOHOuB0J/R44QB0dwY5JgfbvljXcklVf65Gc4El6RjZ+lnwd2az2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-zoom/2.0.1/chartjs-plugin-zoom.min.js" integrity="sha512-wUYbRPLV5zs6IqvWd88HIqZU/b8TBx+I8LEioQ/UC0t5EMCLApqhIAnUg7EsAzdbhhdgW07TqYDdH3QEXRcPOQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./js/charts.js"></script>
    <script src="./js/tabs.js"></script>
    <script src="./js/forms.js"></script>
</body>
</html>
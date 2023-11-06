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
        <p>Copyright © UneWeb 2023</p>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="./js/charts.js"></script>
    <script src="./js/tabs.js"></script>
    <script src="./js/forms.js"></script>
</body>
</html>
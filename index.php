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
        <div class="logo"><a href="./index.php"><img src="./logo/bar-chart-675.svg" alt="Ball">WebLogger</a></div>
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
                <button class="active"><?php echo $tabLabel[1] ?></button>
                <button><?php echo $tabLabel[2] ?></button>
                <button><?php echo $tabLabel[3] ?></button>
                <button><?php echo $tabLabel[4] ?></button>
            </div>
            <div class="tabs-container">
                <div class="tab">
                    <div class="chart">
                        <section class="header-chart">
                            <canvas id="myChart1" width="750"></canvas>
                        </section>
                    </div>
                    <div class="chart-buttons">
                        <input type="button" id="chart-add1" value="Add">
                        <input type="button" id="chart-delete1" value="Delete">
                        <input type="button" id="chart-modify1" value="Modify">
                    </div>
                    <div class="forms">
                        <div id="form_1" style="display:none;">
                            <h1>Form1</h1>
                        </div>
                    </div>
                </div>
                <div class="tab">
                    <div class="chart">
                        <section class="header-chart">
                            <canvas id="myChart2" width="750"></canvas>
                        </section>
                    </div>
                    <div class="chart-buttons">
                        <input type="button" id="chart-add2" value="Add">
                        <input type="button" id="chart-delete2" value="Delete">
                        <input type="button" id="chart-modify2" value="Modify">
                    </div>
                </div>
                <div class="tab">
                    <div class="chart">
                        <section class="header-chart">
                            <canvas id="myChart3" width="750"></canvas>
                        </section>
                    </div>
                    <div class="chart-buttons">
                        <input type="button" id="chart-add3" value="Add">
                        <input type="button" id="chart-delete3" value="Delete">
                        <input type="button" id="chart-modify3" value="Modify">
                    </div>
                </div>
                <div class="tab">
                    <div class="chart">
                        <section class="header-chart">
                            <canvas id="myChart4" width="750"></canvas>
                        </section>
                    </div>
                    <div class="chart-buttons">
                        <input type="button" id="chart-add4" value="Add">
                        <input type="button" id="chart-delete4" value="Delete">
                        <input type="button" id="chart-modify4" value="Modify">
                    </div>
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
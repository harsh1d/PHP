<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chess Board in PHP</title>
    <style>
        .chess-board { width: 400px; height: 400px; margin: 20px; }
        .chess-board .row { display: flex; }
        .chess-board .cell { width: 50px; height: 50px; }
        .chess-board .cell.black { background-color: #444; }
        .chess-board .cell.white { background-color: #fff; }
    </style>
</head>
<body>
<div class="chess-board">
    <?php
    for ($row = 1; $row <= 8; $row++) {
        echo "<div class='row'>";
        for ($col = 1; $col <= 8; $col++) {
            $cellClass = ($row + $col) % 2 == 0 ? "black" : "white";
            echo "<div class='cell {$cellClass}'></div>";
        }
        echo "</div>";
    }
    ?>
</div>
</body>
</html>
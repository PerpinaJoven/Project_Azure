<!DOCTYPE html>
<html>
<head>
    <title>Food Menu</title>
    <style>
        h1,h2 {
            text-align: center;
        }
        *{
            box-sizing: border-box;
        }
        .column{
            float: left;
            width: 20%;
            padding: 5px;
        }
        .row::after{
            content: "";
            display: table;
            clear: both;
        }
    </style>
</head>
<body>
    <h1>Christian Restaurant</h1>
    <br>
    <br>
    <br>
    <br>
    <h2>Food Menu</h2>

    <div class="row">
        <div class="column">
            <img src="adobo.jpg" width="100%">
            <label for="">ADOBO</label>
        </div>
        <div class="column">
            <img src="sinigang.jpg" width="100%">
            <label for="">SINIGANG</label>
        </div>
        <div class="column">
            <img src="karekare.jpg" width="100%">
            <label for="">KARE-KARE</label>
        </div>
        <div class="column">
            <img src="pancit.jpg" width="100%">
            <label for="">PANCIT CANTON</label>
        </div>
        <div class="column">
            <img src="LechonKawali.jpg" width="100%">
            <label for="">LECHON KAWALI</label>
        </div>

    </div>

    <br>
    <br>
    <br>
    <br>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="food">Choose your order here:</label>
        <select name="food" id="food">
            <option value="Adobo">Adobo</option>
            <option value="Sinigang">Sinigang</option>
            <option value="Kare-Kare">Kare-Kare</option>
            <option value="Pancit Canton">Pancit Canton</option>
            <option value="Lechon Kawali">Lechon Kawali</option>
        </select>
        <input type="submit" value="Order">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $food = $_POST["food"];
        echo "Your order is: " . $food;
    }
    ?>
</body>
</html>

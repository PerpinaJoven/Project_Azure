<!DOCTYPE html>
<html>

<head>

    <title>Food Menu</title>
    <style>
        body {
            background: linear-gradient(to bottom, #b3e0ff, #4da6ff);
            padding-bottom: 5%;
            font-family: Arial, sans-serif;
        }

        h1,
        h2 {
            text-align: center;
        }

        * {
            box-sizing: border-box;
        }

        .column {
            float: left;
            width: 20%;
            padding: 5px;
            padding-bottom: 3%;
        }

        .row::after {
            content: "";
            display: table;
            clear: both;
        }

        img {
            border-radius: 5px;
            transition: transform 0.3s ease-in-out;
            border: 2px solid black;
        }

        img:hover {
            transform: scale(.9);
        }

        .order {
            font-size: 20px;
            font-family: Arial, sans-serif;
        }

        .row {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1>C & J Restaurant</h1>

    <h2>Food Menu</h2>

    <div class="row">
        <div class="column">
            <img src="adobo.jpg" width="100%">
            <label for="">₱35 ADOBO</label>
        </div>
        <div class="column">
            <img src="sinigang.jpg" width="100%">
            <label for="">₱40 SINIGANG</label>
        </div>
        <div class="column">
            <img src="karekare.jpg" width="100%">
            <label for="">₱30 KARE-KARE</label>
        </div>
        <div class="column">
            <img src="pancit.jpg" width="100%">
            <label for="">₱60 PANCIT CANTON</label>
        </div>
        <div class="column">
            <img src="LechonKawali.jpg" width="100%">
            <label for="">₱50 LECHON KAWALI</label>
        </div>

    </div>

    <div class="row">
        <div class="column">
            <img src="laingfriedrice.jpg" width="100%">
            <label for="">₱40 LAING FRIED RICE</label>
        </div>
        <div class="column">
            <img src="peachmangopie.jpg" width="100%">
            <label for="">₱25 PEACH MANGO PIE</label>
        </div>
        <div class="column">
            <img src="suamnamais.jpg" width="100%">
            <label for="">₱30 SUAM NA MAIS</label>
        </div>
        <div class="column">
            <img src="porkbellyasado.jpg" width="100%">
            <label for="">₱45 PORK BELLY ASADO</label>
        </div>
        <div class="column">
            <img src="classicsesamenoodles.jpg" width="100%">
            <label for="">₱60 CLASSIC SESAME NOODLES</label>
        </div>

    </div>

    <br>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="orderForm">
        <label for="food" class="order">Choose your order here:</label>
        <select name="food" id="food" class="order">
            <option value="Adobo">Adobo - ₱35</option>
            <option value="Sinigang">Sinigang - ₱40</option>
            <option value="Kare-Kare">Kare-Kare - ₱30</option>
            <option value="Pancit Canton">Pancit Canton - ₱60</option>
            <option value="Lechon Kawali">Lechon Kawali - ₱50</option>
            <option value="Laing Fried Rice">Laing Fried Rice - ₱40</option>
            <option value="Peach Mango Pie">Peach Mango Pie - ₱25</option>
            <option value="Suam na Mais">Suam na Mais - ₱30</option>
            <option value="Pork Belly Asado">Pork Belly Asado - ₱45</option>
            <option value="Classic Sesame Noodles">Classic Sesame Noodles - ₱60</option>
        </select>
        <input type="submit" class="order" value="Order" onclick="focusSelectedOption(); return false;">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $food = $_POST["food"];
        echo "Your order is: " . $food;
    }
    ?>

</body>

</html>

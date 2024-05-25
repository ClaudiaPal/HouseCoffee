<!DOCTYPE html>
<head>
    <title> House Coffee </title>
    <meta name="author" content="Claudia Pal">
    <meta name="description" content="Cafenea cu stil.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8"> 
<link href="style.css" rel="stylesheet">
<script src="js.js"></script>

</head>
    <div>  
    <ul class="meniu">
        <li><a href="index.html"> Home</a></li>
        <li> <a href="meniu.html" > Meniu</a></li>
        <li> <a href="contact.html"> Contact  </a></li>
        <li> <a href="history.html"> Povestea noastra</a></li>
        <li> <a href="produse.html"> Photo customers</a></li>
        <li> <a href="comenzi.php"> Plasare Comanda</a></li>
        </head>
<body>
    <div class="container">
        <h1>Comandă la Cafenea</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="nume">Nume:</label>
            <input type="text" id="nume" name="nume" required><br>

            <label for="bautura">Băutura:</label>
            <select id="bautura" name="bautura" required>
                <option value="">Alege băutura</option>
                <option value="Cafea">Cafea</option>
                <option value="Ceai">Ceai</option>
                <option value="Suc">Suc</option>
            </select><br>

            <label for="cantitate">Cantitate:</label>
            <input type="number" id="cantitate" name="cantitate" min="1" required><br>

            <input type="submit" name="submit_post" value="Trimite Comanda (POST)">
        </form>

        <hr>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
            <label for="nume_get">Nume:</label>
            <input type="text" id="nume_get" name="nume_get" required><br>

            <label for="bautura_get">Băutura:</label>
            <select id="bautura_get" name="bautura_get" required>
                <option value="">Alege băutura</option>
                <option value="Cafea">Cafea</option>
                <option value="Ceai">Ceai</option>
                <option value="Suc">Suc</option>
            </select><br>

            <label for="cantitate_get">Cantitate:</label>
            <input type="number" id="cantitate_get" name="cantitate_get" min="1" required><br>

            <input type="submit" name="submit_get" value="Trimite Comanda (GET)">
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_post"])) {
        // Procesare metoda POST
        $nume = $_POST["nume"];
        $bautura = $_POST["bautura"];
        $cantitate = $_POST["cantitate"];

        echo "<div class='container'>";
        echo "<h2>Comanda Plasată (Metoda POST)</h2>";
        echo "<p><strong>Nume:</strong> $nume</p>";
        echo "<p><strong>Băutura:</strong> $bautura</p>";
        echo "<p><strong>Cantitate:</strong> $cantitate</p>";
        echo "</div>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["submit_get"])) {
        // Procesare metoda GET
        $nume = $_GET["nume_get"];
        $bautura = $_GET["bautura_get"];
        $cantitate = $_GET["cantitate_get"];

        echo "<div class='container'>";
        echo "<h2>Comanda Plasată (Metoda GET)</h2>";
        echo "<p><strong>Nume:</strong> $nume</p>";
        echo "<p><strong>Băutura:</strong> $bautura</p>";
        echo "<p><strong>Cantitate:</strong> $cantitate</p>";
        echo "</div>";
    }
    ?>
</body>
</html>
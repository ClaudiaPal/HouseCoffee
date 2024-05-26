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
        <a href="conditional_loops.php">Conditional and Loops </a>
        </head>
        <body background ="Chicago Coffee Shop Guide-katelyn now.jpg"></body>
        <script type="text/javascript">
    <!--
    function ceas() {
      var Digital=new Date()
      var hours=Digital.getHours()     // Preia ora
      var minutes=Digital.getMinutes()     // Preia minutele
      var seconds=Digital.getSeconds()     // Preia secundele
      var dn="AM"
      // Stabileste afisarea AM (Ante Meridian) sau PM (Post Meridian)
      if (hours>12) {
        dn="PM"
        hours=hours-12
      }
      if (hours==0)
        hours=12
      if (minutes<=9)
        minutes="0"+minutes
      if (seconds<=9)
        seconds="0"+seconds
    
    // Creaza si afiseaza elementele HTML in eticheta <div>
      myclock="<font size='4' face='Times New Roman' ><b><font size='1'>Ora curena</font><br>"+hours+":"+minutes+":"
    +seconds+" "+dn+"</b></font>"
    
      document.getElementById("ceas2").innerHTML=myclock
      setTimeout("ceas()",1000)     // Executa functia ceas() la fiecare secunda
    }
    window.onload=ceas;     // Executa functia ceas() la incarcarea scriptului
    //-->
    </script>
    <script>
        // Creează un mesaj de bun venit
        var mesaj = "Bun venit pe pagina noastră!";
    
        // Afișează mesajul într-un popup
        alert(mesaj);
    </script>
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
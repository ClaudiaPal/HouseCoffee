<!DOCTYPE html>
<html lang="en">
<head>
<title>Conditional and Loops Example</title>
<meta name="author" content="Claudia Pal">
    <meta name="description" content="Cafenea cu stil.">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <link href="style.css" rel="stylesheet">
<script src="js.js"></script>
</ul>
</div>
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

<div class="menu">
    <h2>Menu Example </h2>
    
</head>
<body>
    <div class="container">
        <h1>Welcome to Our Cafe</h1>
        
        <!-- IF Statement -->
        <?php
        $isWeekend = date('N') >= 6; // 6 (Saturday) and 7 (Sunday) are weekends
        if ($isWeekend) {
            echo '<div class="message">It\'s the weekend! Enjoy a special discount on all coffees!</div>';
        } else {
            echo '<div class="message">It\'s a weekday. Regular prices apply.</div>';
        }
        ?>
        
        <!-- SWITCH Statement -->
        <h2>Today's Special</h2>
        <?php
        $dayOfWeek = date('l'); // Obținem ziua curentă a săptămânii
        switch ($dayOfWeek) {
            case 'Monday':
                echo '<div class="message">Today is Monday. Start your week with a strong espresso!</div>';
                break;
            case 'Wednesday':
                echo '<div class="message">Today is Wednesday. Midweek special: 2 for 1 on all lattes!</div>';
                break;
            case 'Friday':
                echo '<div class="message">Today is Friday. Free cookie with any coffee purchase!</div>';
                break;
            default:
                echo '<div class="message">Welcome to our cafe! Enjoy our daily specials.</div>';
        }
        ?>
        
        <!-- FOR Loop -->
        <h2>Our Coffee Menu</h2>
        <table id="coffeeMenu">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Coffee Type</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $coffeeTypes = ["Espresso", "Latte", "Cappuccino", "Mocha"];
                for ($i = 0; $i < count($coffeeTypes); $i++) {
                    echo '<tr><td>' . ($i + 1) . '</td><td>' . $coffeeTypes[$i] . '</td></tr>';
                }
                ?>
            </tbody>
        </table>
        
        <!-- WHILE Loop -->
        <h2>Popular Coffees</h2>
        <table id="popularCoffees">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Coffee Type</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $counter = 0;
                while ($counter < count($coffeeTypes)) {
                    echo '<tr><td>' . ($counter + 1) . '</td><td>' . $coffeeTypes[$counter] . '</td></tr>';
                    $counter++;
                }
                ?>
            </tbody>
        </table>
        
        <!-- DO WHILE Loop -->
        <h2>New Arrivals</h2>
        <table id="newArrivals">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Coffee Type</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $counter = 0;
                do {
                    echo '<tr><td>' . ($counter + 1) . '</td><td>' . $coffeeTypes[$counter] . '</td></tr>';
                    $counter++;
                } while ($counter < count($coffeeTypes));
                ?>
            </tbody>
        </table>
        
        <!-- FOREACH Loop -->
        <h2>Recommended Coffees</h2>
        <table id="recommendedCoffees">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Coffee Type</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $index = 1;
                foreach ($coffeeTypes as $coffee) {
                    echo '<tr><td>' . $index . '</td><td>' . $coffee . '</td></tr>';
                    $index++;
                }
                ?>
            </tbody>
        </table>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            // Select all rows in the tables
            const rows = document.querySelectorAll('table tr');
            rows.forEach(row => {
                row.addEventListener('click', () => {
                    // Remove 'selected' class from all rows
                    rows.forEach(r => r.classList.remove('selected'));
                    // Add 'selected' class to the clicked row
                    row.classList.add('selected');
                });
            });
        });
    </script>
</body>
</html>
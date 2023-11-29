<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'dataForm');
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $name = $_POST["name1"];
    $year = $_POST["year1"];
    $why = $_POST["why1"];
    $query = $conn->prepare("INSERT INTO user_inquiries (Namename,Yearyear,Why)
    VALUES (?,?,?)");
    $query->bind_param('sss', $name, $year, $why);
    $query->execute();
    $conn->close();
}

?> 
<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-79KJ6SEBDN"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-79KJ6SEBDN');
    </script>
    <title>KOSMIC Dance Club Website, Join Us Page</title>
    <link rel="stylesheet" href="styles.css">
    <meta charset="utf-8">
</head>
<body>
    <header>
        <nav id="main-nav">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="https://localhost/join.php">Join Us</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div id="formStyling">
        <form id="form1" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name1"><br>
            <label for="year">Year:</label>
            <select id="year" name="year1">
                <option value="freshman">Freshman</option>
                <option value="sophomore">Sophomore</option>
                <option value="junior">Junior</option>
                <option value="senior">Senior</option>
                <option value="superSenior">Super Senior</option>
            </select><br>
            <label for="why">Why would you like to join?</label>
            <input type="text" id="why" name="why1"><br>
            <input type="submit">
        </form>
    </main>
    <footer>

    </footer>

</body>
</html>

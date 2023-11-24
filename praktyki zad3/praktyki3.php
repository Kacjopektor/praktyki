<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>  
    <div class="form">
    <form method="post">
    <label>Proszę podać swój login</label><br>
    <input id="login" type="text" name="login"><br>
    <label>Proszę podać swoje hasło</label><br>
    <input id="haslo" type="password" name="haslo"><br><br>
    <button type="submit">Zaloguj się</button>
    </form>
    </div>
    <?php

    
    $conn = new mysqli("127.0.0.1","admin","test","baze");

    if ($conn->connect_error) 
    {
        die("Błąd lekko " . $conn->connect_error);
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $query = "SELECT * FROM users WHERE username='". $conn->real_escape_string($_POST["login"]) ."'AND password='". $conn->real_escape_string($_POST["haslo"]) ."'";

        $result = $conn->query($query);
    
        if ($result->num_rows > 0) {
            echo "<p>Zalogowano</p>";
        } 
        else 
        {
            echo "<p>złe dane logowania</p>";
        }
    }
    ?>
</body>
</html>
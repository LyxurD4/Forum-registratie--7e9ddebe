<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registratie</title>
    <style>
        body {
            font-family: Arial;
        }
        input {
            margin: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Forum Registratie</h1>
    </header>
    <form action="registratie_handler.php" method="post" target="registratie_handler.php">
        
        Username <input type="text" name="username"><br>
        Email adres <input type="email" name="email"><br>
        Age <input type="text" name="age"><br>
        
        <input type="submit">
    </form>
</body>
</html>
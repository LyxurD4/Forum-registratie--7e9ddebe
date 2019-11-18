<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registratie Handler</title>
    <style>
        body {
            font-family: Arial;
        }
    </style>
</head>
<body>
    <?php
        $username = $_POST["username"];
        $_SESSION["username"] = $username;
        echo "Jouw Username is: ";
        echo $_SESSION["username"];
    ?>
    <br> 
    <?php
        $email = $_POST["email"];
        $_SESSION["email"] = $email;
        echo "Jouw email is: ";
        echo $_SESSION["email"];
    ?>
    <br>
    <?php
        $age = $_POST["age"];
        $_SESSION["age"] = $age;
        echo "Jouw leeftijd is: ";
        echo $_SESSION["age"];
    ?> 
</body>
</html>
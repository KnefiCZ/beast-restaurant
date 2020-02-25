
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add_user</title>
</head>
<body>
    <form action="submit_user.php" method="post">
    <label for="email">Email:</label>
    <input type="email" name="email" placeholder="priklad@abc.cz"> <br>
    <label for="password">Heslo:</label>
    <input type="password" name="password" placeholder="******"> <br>
    <label for="firstname">Jméno:</label>
    <input type="text" name="firstname" placeholder="Honza"> <br>
    <label for="lastname">Příjmení:</label>
    <input type="text" name="lastname" placeholder="Nový"> <br>
    <label for="address">Adresa:</label>
    <input type="text" name="address" placeholder="Praha 10, 29004/byt 56"> <br>
    <label for="city">Město:</label>
    <input type="text" name="city" placeholder="Praha"> <br>
    <input type="submit" name="sub" > 
    </form>
    

</body>
</html>

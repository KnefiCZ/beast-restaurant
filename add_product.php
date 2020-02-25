
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ass_product</title>
</head>
<body>
    <form action="submit_product.php" method="post">
    <label for="name">Název:</label>
    <input type="text" name="name" placeholder="Boršč"> <br>
    <label for="price">Cena:</label>
    <input type="number" name="price" placeholder="000"> <br>
    <label for="description">Popis:</label>
    <input type="text" name="description" placeholder="text..."> <br>
    <label for="id_type">Typ:</label>
    <input type="text" name="id_type" placeholder="ID z dtatabáze"> <br>
    <label for="weight">Váha:</label>
    <input type="text" name="weight" placeholder="XXXg"> <br>
    <input type="submit" name="sub" > 
    </form>
    

</body>
</html>

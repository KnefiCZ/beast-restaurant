<?php //Načtení všech knihoven z adresáře VENDOR
    require_once "vendor/autoload.php";

    use Illuminate\Database\Capsule\Manager as DB;

    $db = new DB;
    $db->addConnection(
        [
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'beast_restaurant',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci'
        ]
        );

    $db->setAsGlobal();
    $db->bootEloquent();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select vseho</title>
</head>
<body>
<!-- Pokus o jakoze incert :DDDDDDDDD --> 
<?//php require_once "header.php";?>


    <?php
    
    try {
        $products = DB::select("SELECT * FROM products;");
    } catch (\Throwable $th) {
        echo "Nepovedl se SELECT z orders!" . "<br>";
        $products = array();
        var_dump($th);
    }
        foreach ($products as $product) {
            echo $product->id_product . "<br>";
            echo $product->name . "<br>";
            echo $product->price . "<br>";
            echo $product->description . "<br>";
            echo $product->id_type . "<br>";
            echo $product->weight . "<br>";
        }
    ?>
    <form action="#">
        <input type="submit" value="Přidat další do PRODUCTS.">
    </form>
    <hr>
    <?php
    try {
        $users = DB::select("SELECT * FROM users;");
    } catch (\Throwable $th) {
        echo "Nepovedl se SELECT z users!" . "<br>";
        $users = array();
        var_dump($th);
    }
        foreach ($users as $user) {
            echo $user->id_user . "<br>";
            echo $user->email . "<br>";
            echo $user->password . "<br>";
            echo $user->firstname . "<br>";
            echo $user->lastname . "<br>";
            echo $user->address . "<br>";
            echo $user->city . "<br>";
        }

    ?>
    <form action="add_something.php">
        <input type="submit" value="Přidat další do USERS.">
    </form>
</body>
</html>
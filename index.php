
<!-- Pokus o jakoze incert :DDDDDDDDD --> 
<?php require_once "header.php";?>

    <?php
    
    try {
        $products = Model::getProducts();
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
            echo $product->weight . "<br>" . "/\/\/\/\/" ."<br>";
        }
    ?>
    <form action="#">
        <input type="submit" value="Přidat další do PRODUCTS.">
    </form>
    <hr>
    <?php
    try {
        $users = Model::getUsers();
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
            echo $user->city . "<br>" . "/\/\/\/\/" ."<br>";
        }

    ?>
    <form action="add_something.php">
        <input type="submit" value="Přidat další do USERS.">
    </form>
</body>
</html>
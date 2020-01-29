
<?php require_once "header.php";?>


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
    
</body>
</html>
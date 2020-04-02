<?php require_once "header.php";?>
<?php 
$name = filter_input(INPUT_POST, 'name');
$price = filter_input(INPUT_POST, 'price');
$description = filter_input(INPUT_POST, 'description');
$id_type = filter_input(INPUT_POST, 'id_type');
$weight = filter_input(INPUT_POST, 'weight');
$submit = filter_input(INPUT_POST, 'submit');
    
    $message = "Stránka byla načtena...";
    if(isset($submit)) {
        $message = "Stránka byla načtena odesláním formuláře...";
        $result = Model::addProduct($name, $price, $description, $id_type, $weight);
        if($result) {
            $message .= "Produkt byl úspěšně přídán...";       
        }
        else {
            $message .= "Nebylo možné přidat!!";
        }
    }
?>
<?php echo $message;?>
<h1>Přidání produktu...</h1>
    <form action="add_product.php" method="post">
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
    <input type="submit" name="submit" > 
    </form>
    

</body>
</html>

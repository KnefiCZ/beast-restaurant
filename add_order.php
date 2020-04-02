<?php require_once "header.php";?>
<?php 
$id_product = filter_input(INPUT_POST, 'name');
$id_user = filter_input(INPUT_POST, 'price');
$id_payment = filter_input(INPUT_POST, 'description');
    
    $message = "Stránka byla načtena...";
    if(isset($submit)) {
        $message = "Stránka byla načtena odesláním formuláře...";
        $result = Model::addOrder($id_product, $id_user, $id_payment);
        if($result) {
            $message .= "Objednávka byla úspěšně přídána...";       
        }
        else {
            $message .= "Nebylo možné přidat!!";
        }
    }
?>
<?php echo $message;?>
<h1>Přidání objednávky...</h1>
    <form action="add_product.php" method="post">
    <label for="id_product">Produkt/y :</label>
    <input type="number" name="id_product" value="NOW"> <br>
    <label for="id_user">ID uživatele:</label>
    <input type="number" name="id_user" placeholder=""> <br>
    <label for="id_payment">ID platební metody:</label>
    <input type="number" name="id_payment" placeholder="1, 2 nebo 3"> <br>
    <input type="submit" name="submit" > 
    </form>

    <h3>Vysvětlivky:</h3>
    <p>Platební metody :<br>ID 1 = Platba kartou.
                        <br>ID 2 = Platba hotově. 
                        <br>ID 3 = Platba bitcoinem.</p>
    

</body>
</html>

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
    <label for="id_user">Zákazník:</label>
    <select name="user" id="users">
    <?php 
        $users = Model::getUsers();
 
      #foreach ($users as $user) { ?>
      <!--     <option value="<?= $user['id_user']; ?> "><?= $user['firstname']; ?> <?= $user['lastname']; ?></option> --> 
      <?php #}  

        try {
                            $users = Model::getUsers();
                        } catch (\Throwable $th) {
                            echo "Nepovedl se SELECT z users!" . "<br>";
                            $users = array();
                            var_dump($th);
                        }         
                      ?>
                   <?php  foreach ($users as $user) {
                       ?> <tr>
                      <option value="<?= $user['id_user']; ?> "><?= $user['firstname']; ?> <?= $user['lastname']; ?></option>
                      <?php
                            } ?>
       <!-- <option value="1">Matěj Kneifl</option>
        <option value="2">Yolo Okmura</option>
        <option value="3">Petr Stary</option> -->
    </select> <br>
    <label for="id_product">Produkt</label>
    <select name="id_product" id="products">
   <?php
        $products = Model::getProducts();
   
        foreach ($products as $product) { ?>
            <option value="<?= $product['id_product']; ?> "><?= $product['name']; ?></option>
        <?php } ?>
       <!-- <option value="1">Boršč</option>
        <option value="2">Svíčková</option>
        <option value="3">Knedlo-Zelo-Vepřo</option>
        <option value="4">Řízek s bramborama</option> -->
    </select> <br>
    <label for="id_payment">ID platební metody:</label>
    <input type="number" name="id_payment" placeholder="1, 2 nebo 3"> <br>
    <label for="description">Poznámky</label>
    <textarea rows="1" cols="25" name="description" form="usrform">
    Poznámka zákazníka...</textarea>
    <input type="submit" name="submit" > 
    </form>

    <h3>Vysvětlivky:</h3>
    <p>Platební metody :<br>ID 1 = Platba kartou.
                        <br>ID 2 = Platba hotově. 
                        <br>ID 3 = Platba bitcoinem.</p>
    

</body>
</html>

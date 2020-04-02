<?php require_once "header.php";?>
<?php 
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$address = filter_input(INPUT_POST, 'address');
$city = filter_input(INPUT_POST, 'city');
$submit = filter_input(INPUT_POST, 'submit');

    $message = "Stránka byla načtena...";
    if(isset($submit)) {
        $message = "Stránka byla načtena odesláním formuláře...";
        $result = Model::addUser($email, $password, $firstname, $lastname, $address, $city);
        if($result) {
            $message .= "Uživatel byl úspěšně přídán...";
        }
        else {
            $message .= "Nebylo možné přidat!!";
        }
    }
?>
<?php echo $message;?>
<h1>Přidání uživatele :):</h1>
    <form action="add_user.php" method="post">
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
    <input type="submit" name="submit" > 
    </form>
    

</body>
</html>

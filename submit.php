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
<body><?php 
              $email = filter_input(INPUT_POST, 'email');
              $password = filter_input(INPUT_POST, 'password');
              $firstname = filter_input(INPUT_POST, 'firstname');
              $lastname = filter_input(INPUT_POST, 'lastname');
              $address = filter_input(INPUT_POST, 'address');
              $city = filter_input(INPUT_POST, 'city');
                
    try {
        $inserted = DB::insert("INSERT INTO users 
                            (email,
                             password,
                             firstname,
                             lastname,
                             address,
                             city)
                             VALUES(
                                 '$email',
                                 '$password',
                                 '$firstname',
                                 '$lastname',
                                 '$address',
                                 '$city');");

    if ($inserted == true) {
        echo "Přidáno!";
    }
        }   catch (\Throwable $th) { var_dump($th);
            echo "Nebylo možné přidat!" . "<br>";
            $users = array();
        }
?>
<!--<meta http-equiv = "refresh" content = " 1 ; url = index.php"/>
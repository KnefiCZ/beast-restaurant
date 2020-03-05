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

    class Model {
        public static function getUsers() {
            $users=DB::select("SELECT * FROM users");
            return $users;
        }
        public static function getProducts() {
            $products=DB::select("SELECT * FROM products");
            return $products;
        }
        public static function addProduct($name, $price, $description, $id_type, $weight) {
            try {
                $inserted = DB::insert("INSERT INTO products 
                                    (name,
                                    price,
                                    description,
                                    id_type,
                                    weight)
                                     VALUES(
                                         '$name',
                                         '$price',
                                         '$description',
                                         '$id_type',
                                         '$weight');");
        
            if ($inserted == true) {
                echo "Přidáno!";
            }
                }   catch (\Throwable $th) { var_dump($th);
                    echo "Nebylo možné přidat!" . "<br>";
                    $products = array();
                }
        }
        public static function addUser($email, $password, $firstname, $lastname, $address, $city) {
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
                 
        }
        
    }
    ?>
    
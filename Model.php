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
    }
    ?>
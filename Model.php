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
        public static function getOrders() {
            $orders=DB::select("SELECT * FROM orders");
            return $orders;
        }
        public static function addProduct($name, $price, $description, $id_type, $weight) {
           
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
        
        
                  return $inserted;
                
        }
        public static function addUser($email, $password, $firstname, $lastname, $address, $city) {
            
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
        
                   
                    return $inserted;
                }
        public static function addOrder($created_at, $id_user, $id_payment) {
           
                $inserted = DB::insert("INSERT INTO products 
                                    (name,
                                    price,
                                    description,
                                    id_type,
                                    weight)
                                     VALUES(
                                         '$created_at',
                                         '$id_user',
                                         '$id_payment');");
        
        
                  return $inserted;
                
        }
                 
        
        
    }
    ?>
    
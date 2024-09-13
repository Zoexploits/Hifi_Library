<?php
namespace App\Core;
use App\config\Constants;
use mysqli;


class Model{
    protected $db;

    public function __construct() {
                  $this->db=new mysqli(
                    Constants::DB_HOST,
                    Constants::DB_USERNAME,
                    Constants::DB_PASSWORD,
                  );

        if($this->db->connect_error){
          die("Error connecting to the database..".$this->db->connect_error);
        }

      $this->initializeDatabase();

    }



    protected function initializeDatabase(){

            $database=Constants::DATABASE_NAME;

            $stm = $this->db->query("SHOW DATABASES LIKE '$database'");

            // If database exist, fetch the values as an associative array
            $dbExists = $stm->fetch_array();

            // If Database does not exist, create it
            if (!$dbExists) {
                
                // Create it
                $this->db->query("CREATE DATABASE $database");
                echo "Database created successfully.<br>";
        
                // Select the database    
                $this->db->query("USE $database");


                
        
                // Read and execute the SQL file
                $sql = file_get_contents("app/config/database.sql");
                $this->db->query($sql);
                echo "Tables created successfully from the SQL file.";
            } else {
              //  echo "Database already exists. No action taken.";
                $this->db->query("USE $database");
            }
        

    }



    public static function query($sql, $params = []){

        $stmt = self::$db->prepare($sql);

        if ($params) {
            // Determine the types of the parameters
            $types = '';
            foreach ($params as $param) {
                if (is_int($param)) {
                    $types .= 'i';
                } elseif (is_float($param)) {
                    $types .= 'd';
                } elseif (is_string($param)) {
                    $types .= 's';
                } else {
                    $types .= 'b'; // Default to blob for other types
                }
            }

            // Bind the parameters
            $stmt->bind_param($types, ...$params);
        }

        $stmt->execute();
        return $stmt;
    }
// Fetch all results
public static function fetchAll($sql, $params = [])
{
    $stmt = self::query($sql, $params);
    $result = $stmt->get_result();
    return $result->fetch_all(MYSQLI_ASSOC);
}

// Fetch a single result
public static function fetch($sql, $params = [])
{
    $stmt = self::query($sql, $params);
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}
}
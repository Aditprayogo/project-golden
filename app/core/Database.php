<?php


class Database{

     private $host = DB_HOST;
     private $user = DB_USER;
     private $pass = DB_PASS;
     private $db_name = DB_NAME;

     //database handler
     private $dbh;
     //statement
     private $stmt;

     public function __construct()
     {
          # code...
          //data source name
          $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;

          //option
          $option = [

               PDO::ATTR_PERSISTENT => true,
               PDO::ATTR_ERRMODE    => PDO::ERRMODE_EXCEPTION
          ];

          try {
               $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
          } catch(PDOException $e){
               die($e->getMessage());
          }

     }

     //dibuat generik bisa di gunakan untuk select , delect , insert dan update
     public function query($query)
     {
          # code...
          $this->stmt = $this->dbh->prepare($query);
     }

     //untuk bind-ing
     public function bind($param, $value, $type = null)
     {
          # code...
          if ( is_null($type ) ) {
               # code...
               switch (true) {
                    case is_int($value):
                         # code...
                         $type = PDO::PARAM_INT;
                         break;
                    
                    case is_bool($type) :
                         # code...
                         $type = PDO::PARAM_BOOL;
                         break;
                    
                    case is_null($value):
                         # code...
                         $type = PDO::PARAM_NULL;
                         break;

                    default:
                         $type = PDO::PARAM_STR;
               }
          }
          
          //dilakukan bind seperti ini supaya terhindar dari sql injection
          $this->stmt->bindValue($param, $value, $type);

     }

     public function execute()
     {
          # code...
          $this->stmt->execute();
     }

     //kalau hasil dari executenya mau banyak
     public function resultset()
     {
          # code...
          $this->execute();
          return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
     }

     //kalau hasil dari executenya cuma 1 
     public function single()
     {
          # code...
          $this->execute();
          return $this->stmt->fetch(PDO::FETCH_ASSOC);
     }

     public function rowCount()
     {
          # code...
          return $this->stmt->rowCount();
     }




     
}

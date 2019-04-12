<?php


class Db{



    function __construct()
    {

        $host = "localHost";
        $dbname = "gbook";
        $user = "root";
        $password = "";

        try {

            $this->db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
            $this->db->exec("set names utf8");
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //$sql = "SELECT * FROM msgs WHERE name='vasy' AND password=555";
            // $db->query($sql);
            echo "db connect";

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function insert($table,$category,$description,$price,$photoUrl){

        $date = time();
        try {
            $stmt = $this->db->prepare("INSERT INTO $table (category,description,price,photoUrl,date) VALUES (?,?,?,?,?)");
            return $stmt->execute(array(
                $category,
                $description,
                $price,
                $photoUrl,
                $date
                ));
        }catch (PDOException $e) {
            echo 'Error : ' . $e->getMessage();
        }
    }

    public function delete($table,$id){
  try{

      $sql = "DELETE FROM $table  WHERE id=?";
      $stmt = $this->db->prepare($sql);
      $stmt-> execute(array(
          $id
      ));


        }
  catch(PDOException $e){
      echo 'Error : '.$e->getMessage();
      exit();
  }

    }
     public function selectById($table,$id){

        $sql = "SELECT  * FROM $table WHERE id=?";

     $stmt = $this->db->prepare($sql);
         $stmt -> execute(array($id));
        return $stmt->fetch(PDO::FETCH_ASSOC)  ;

     }

     public function lastId($table){

        try{
            $sql = "SELECT * FROM $table ORDER BY id DESC LIMIT 1";
            $stmt = $this->db->query($sql);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Error : ' . $e->getMessage();

        }


     }

    public function select($table){


        try{

            $sql = "SELECT  id,category,description,price,photoUrl  FROM $table" ;
            $stmt = $this->db->query($sql);
             return $stmt->fetchall(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo 'Error : ' . $e->getMessage();

            }
    }

    public function clear($value)
{


    $value = trim($value);
    $value = htmlspecialchars($value);
    $value = strip_tags($value);


    return $value;
}


}
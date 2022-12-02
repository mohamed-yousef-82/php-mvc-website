<?php
namespace project\models;
class AbstractModel
{

    private function prepareValues($stmt)
    {
        foreach (static::$tableSchema as $columnName )
        {
           $sanitizedValue = $this->$columnName;
           $stmt->bindValue(":{$columnName}",$sanitizedValue);
        }

    }
    private static function buildNameParametersSQL()
    {
         $namedParams = '';
         foreach (static::$tableSchema as $columnName){
         $namedParams .= $columnName.'=:'. $columnName .',';
         }
         return trim($namedParams,',');

    }

    public function Login($login_user,$login_pass)
    {

        global $connection;
        $sql = 'SELECT * FROM users  WHERE name = "' . $login_user . '" AND password = "' . $login_pass . '"';
        $stmt = $connection->prepare($sql);
        $stmt -> execute();
        $count = $stmt->rowCount();
        $results = $stmt->fetchAll();
        if ($count == 1){
            $_SESSION['username'] = $login_user;
            if(isset($_SESSION['username'])){
                $_SESSION['message'] = 'User,Login successfuly';
                header('Location:admin');
            }else{
                $_SESSION['message'] = 'User,Login error';
                header('Location:login');
                }

            }
    }

    public function insert($pk)
    {
        global $connection;
        if ($pk == ""){
        $sql = 'INSERT INTO '.static::$tableName.' SET '.self::buildNameParametersSQL();
        }else{
        $sql = 'UPDATE ' . static::$tableName . ' SET ' . $this->buildNameParametersSQL() . ' WHERE '.static::$primaryKey .'="'.$pk.'"';
        }
        $stmt = $connection->prepare($sql);
        $this->prepareValues($stmt);
        return $stmt->execute();
    }

    public static function select_items($pk,$fetch)
    {

        global $connection;
        if ($pk == ""){
        $sql = 'SELECT * FROM '.static::$tableName.'';
        }else{
        $sql = 'SELECT * FROM '.static::$tableName.' WHERE '.static::$primaryKey .'="'.$pk.'"';
        }
        $stmt = $connection->prepare($sql);
        $stmt -> execute();
        $results = $stmt->$fetch();
        return $results;
    }
    // public static function total_pages()
    // {
    //
    //     $sql = 'SELECT * FROM '.static::$tableName.'';
    //     $stmt = $connection->prepare($sql);
    //     $stmt -> execute();
    //     $count = $stmt->rowCount();
    //     return $total_pages = ceil($count/5);
    //
    // }
    // public static function pager()
    // {
    //   if (!isset($_GET['page'])) {
    //       $page = 1;
    //   } else{
    //       $page = $_GET['page'];
    //   }
    //   $starting = ($page-1)*5;
    //     $sql = 'SELECT * FROM '.static::$tableName.' ORDER BY '.static::$primaryKey .' DESC LIMIT '.$starting, 5.'';
    //     $stmt = $connection->prepare($sql);
    //     $stmt -> execute();
    //     $count = $stmt->rowCount();
    //     $total_pages = ceil($count/$limit);
    //     $starting = ($page-1)*$limit;
    //     $results = $stmt->$fetch();
    //     return $results;
    // }
    public static function getCatId($current_category)
    {
      global $connection;
      $sql = 'SELECT * FROM '.static::$tableName.' WHERE '.static::$name.' ="'.$current_category.'"';
      $stmt = $connection->prepare($sql);
      $stmt -> execute();
      $results = $stmt->fetch();
      return $results["id"];
    }
    public static function getCatArticles($current_category)
    {
      global $connection;
      $sql = 'SELECT * FROM '.static::$articlestableName.' WHERE '.static::$primaryKey .' ="'.self::getCatId($current_category).'"';
      $stmt = $connection->prepare($sql);
      $stmt -> execute();
      return $results = $stmt->fetchAll();
    }
    public static function getArticle($current_article,$current_article_id)
    {
      global $connection;
      $sql = 'SELECT * FROM '.static::$articlestableName.' WHERE '.static::$id .' ="'.$current_article_id.'"';
      $stmt = $connection->prepare($sql);
      $stmt -> execute();
      return $results = $stmt->fetch();
    }
    public static function select_join_items($pk,$fetch)
    {
        global $connection;
        $sql = 'SELECT '.static::$tableName.'.*,'.static::$tableJoinName.'.name AS category FROM '.static::$tableName.'
        INNER JOIN '.static::$tableJoinName.'
        ON '.static::$tableName.'.'.static::$join_id.' = '.static::$tableJoinName.'.id';
        $stmt = $connection->prepare($sql);
        $stmt -> execute();
        $results = $stmt->$fetch();
        return $results;
    }
    public static function counter($item,$table){
        global $connection;
        $stmt = $con->prepare("SELECT COUNT($item) From $table");
        $stmt->execute();
        $stmt->fetchcolumn();
      }

    public static function delete($pk)
    {
        global $connection;
        $sql = 'DELETE FROM ' . static::$tableName . '  WHERE '.static::$primaryKey .'="'.$pk.'"';
        $stmt = $connection->prepare($sql);
        return $stmt->execute();
    }


}

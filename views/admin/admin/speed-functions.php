<?php

class dashboard
{
    public static function counter($item,$table){
        global $connection;
        $stmt = $connection->prepare("SELECT COUNT($item) From $table");
        $stmt->execute();
        echo $stmt->fetchcolumn();
      }
}
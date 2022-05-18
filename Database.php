<?php

     
    class Dbms{
        private static $connection;
     
        private static function connect(){
            if(!isset(Dbms::$connection)){
                Dbms::$connection=new mysqli("database_host","user_name","password","database_name","port");
            }
        }

        public static function s($q){
            Dbms::connect();
            $result=Dbms::$connection->query($q);
            return $result;
        }
        public static function iud($q){
            Dbms::connect();
            Dbms::$connection->query($q);
        }
        

    }
?>

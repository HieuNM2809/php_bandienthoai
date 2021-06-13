<?
    <?php
    class DP{
        private static function connect_DB()
        {
            $host='localhost';
            $dbname='php_bandienthoai';
            $us='root';
            $pass='';
        
        try{
            $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4",$us,$pass,
                    array
                    (
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_PERSISTENT => false,
                        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"
                    )
                );
            return $conn;
            }
            catch(PDOException $e)
            {
                echo "Error: ".$e->getMessage();
                return null;
            }
        }
        private static function get_type($var)
        {
            switch(gettype($var))
            {
                case 'integer':return PDO::PARAM_INT;
                case 'boolean':return PDO::PARAM_BOOL;
                case 'NULL': return PDO::PARAM_NULL;
                default: return PDO::PARAM_STR;
            }
        }
        public static function run_query_internal($q,$paras,$t,$conn)
        {
            try{
                $h=$conn->prepare($q);
                foreach($paras as $key =>$para)
                {
                    $h->bindValue($key+1,$para,DP::get_type($para));
                }
                $h->execute();
                $r;
                switch($t)
                {
                    case 1: $r=true;break;
                    case 2: $r=$h->fetchAll();break;
                    case 3: $r=$conn->lastInsertId();break;
                }
                $conn=NULL;
                return $r;
            }
            catch(PDOException $e){
                echo '<h1>'.$e->getMessage().'</h1>';
                return false;
            }
        }
        public static function run_query($q,$paras,$t)
        {
            $conn=DP::connect_DB();
            if($conn==false)
            {
                return false;
            }
            return DP::run_query_internal($q,$paras,$t,$conn);
        }
        
    }
?>
?>
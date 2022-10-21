<?php
class Database {
    private $host = HOST;
    private $db_name = DBNAME;
    private $user = USER;
    private $password = PASSWORD;
    private $db_connection;

    public function __construct()
    {
        global $song_table, $album_table, $user_table;
        $dsn = "mysql:host=$this->host;dbname=$this->db_name;charset=utf8";
        try {
            $this->db_connection = new PDO($dsn, $this->user, $this->password);
        } catch(PDOException $e) {
            die($e->getMessage());
        }
        $this->db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $this->db_connection->exec($user_table);
        $this->db_connection->exec($album_table);
        $this->db_connection->exec($song_table);
    }
}
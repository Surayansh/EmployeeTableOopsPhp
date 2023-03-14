<?php
class connect
{
    private $localhost = 'localhost';
    private $user = 'root';
    private $password = '';
    private $db = 'employ';

    protected $connection;

    public function __construct()

    {
        $this->connection = new mysqli($this->localhost, $this->user, $this->password, $this->db);
        if ($this->connection->connect_error) {
            //echo "error in db";
        } else {
            //echo "connected";
        }
    }
}

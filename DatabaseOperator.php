<?php
include('connection.php');
class DatabaseOperator extends connect
{



    public $columns = "";
    public $values = "";

    public $column = "";
    public $value = "";

    public function __construct()
    {

        parent::__construct();
    }

    public function insert($data, $employdetails)
    {

        //print_r($data);

        foreach ($data as $this->column => $this->value) {

            if ($this->column == 'submit') {
                continue;
            }


            $this->columns .= ($this->columns == "") ? "" : ", ";
            $this->columns .= $this->column;

            $this->values .= ($this->values == "") ? "" : ", ";
            $this->values .= "'" . $this->value . "'";

            //echo $this->values;

        }

        $insert = ("INSERT into $employdetails ($this->columns) values ($this->values)");
        echo $insert;
        $insert1 = $this->connection->query($insert);
    }

    public function selectalldata($employdetails)
    {
        $select = "SELECT * FROM $employdetails";
        $select1 = $this->connection->query($select);
        return $select1;
    }


    public function selectById($employdetails, $id)
    {
        $selectid = "SELECT * FROM $employdetails where id=$id";
        $sel1 = $this->connection->query($selectid);
        return mysqli_fetch_array($sel1);
    }

    public function update($data, $employdetails, $id)
    {
        foreach ($data as $this->column => $this->value) {
            $update = ("UPDATE $employdetails SET $this->column = '$this->value' WHERE id= '$id'");
            // echo $update; 
            $this->connection->query($update);
        }
        return true;
    }


    function deletedata($employdetails, $where)
    {
        $delete = ("DELETE FROM $employdetails WHERE id=$where");
        $this->connection->query($delete);
        return true;
    }
}

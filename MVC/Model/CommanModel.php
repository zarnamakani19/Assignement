<?php

class CommanModel{
    function _construct(){

        $this->conn = new mysqli('localhost','root','zarna');
    }
    function Select($tbl){
        $sel = "SELECT * FROM$tbl";
        $run = $this->conn->query($sel);
        if($run->num_rows>0){
            while ($result = $run->fetch_object()){
                $row[] = $result;
            }
            return $row;
        }else{
            echo "No ReCord Found...";
        }


    }
    function Delete_Dta($tbl,$id){

        $del = "DELETE FROM $tbl WHERE";
        foreach ($id as $key => $value) {
            $del.=$key. '=' .$value;
        }
        $this->conn->query($del);
    }
}

?>
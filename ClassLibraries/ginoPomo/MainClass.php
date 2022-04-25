<?php

require_once('../ClassLibraries/DB/DB.php');
// require_once('../ClassLibraries/DB/adminCredDB.php');

class mainClass extends DataBase{

    function dbtest(){
        $result = $this->dbh;
        return $result;
    }



    function uploadWinner($fullName, $region, $imageLink)
    {

            $myQuery = "INSERT INTO winners (
                fullName,
                region,
                imageLink) VALUES (
                '$fullName',
                '$region',
                '$imageLink'
                )";

            $result = mysqli_query($this->ginoDB(), $myQuery);
            if(!$result){
            return "Error: " .mysqli_error($this->ginoDB());
            }else{
            return 'good';
            }

    }



}
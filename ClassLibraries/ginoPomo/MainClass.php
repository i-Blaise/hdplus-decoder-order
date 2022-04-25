<?php

require_once('../ClassLibraries/DB/DB.php');
// require_once('../ClassLibraries/DB/adminCredDB.php');

class mainClass extends DataBase{

    function dbtest(){
        $result = $this->dbh;
        return $result;
    }



    function uploadWinner($data)
    {
        if(is_object($data) || is_array($data)){
            $fname = isset($data['fname']) ? $data['fname'] : NULL;
            $lname = isset($data['lname']) ? $data['lname'] : NULL;
            $email = isset($data['email']) ? $data['email'] : NULL;
            $phone_number = isset($data['phone_number']) ? $data['phone_number'] : NULL;
            $moms_name = isset($data['moms_name']) ? $data['moms_name'] : NULL;
            $message_to_mom = isset($data['message_to_mom']) ? $data['message_to_mom'] : NULL;
        }

            $myQuery = "INSERT INTO winners (
                fname,
                lname,
                email,
                phone_number,
                moms_name,
                message_to_mom) VALUES (
                '$fname',
                '$lname',
                '$email',
                '$phone_number',
                '$message_to_mom',
                '$moms_name'
                )";

            $result = mysqli_query($this->hdplusDB(), $myQuery);
            if(!$result){
            return "Error: " .mysqli_error($this->hdplusDB());
            }else{
            return 'good';
            }

    }



}
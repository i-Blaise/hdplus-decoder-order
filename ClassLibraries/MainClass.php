<?php

require_once('DatabaseCon.php');
// require_once('../ClassLibraries/DB/adminCredDB.php');

class mainClass extends DataBase{

    function dbtest(){
        $result = $this->dbh;
        return $result;
    }



    function uploadOrder($data)
    {
        if(is_object($data) || is_array($data)){
            $fname = isset($data['fname']) ? $data['fname'] : NULL;
            $lname = isset($data['lname']) ? $data['lname'] : NULL;
            $email = isset($data['email']) ? $data['email'] : NULL;
            $phone_number = isset($data['phone_number']) ? $data['phone_number'] : NULL;
            $moms_name = isset($data['moms_name']) ? $data['moms_name'] : NULL;
            $moms_loc = isset($data['moms_loc']) ? $data['moms_loc'] : NULL;
            $your_loc = isset($data['your_loc']) ? $data['your_loc'] : NULL;
            $message_to_mom = isset($data['message_to_mom']) ? $data['message_to_mom'] : NULL;

            $myQuery = "INSERT INTO decoder_orders (
                fname,
                lname,
                email,
                phone_number,
                moms_name,
                moms_loc,
                your_loc,
                message_to_mom) VALUES (
                '$fname',
                '$lname',
                '$email',
                '$phone_number',
                '$moms_name',
                '$moms_loc',
                '$your_loc',
                '$message_to_mom'
                )";

            $result = mysqli_query($this->dbh, $myQuery);
            if(!$result){
            return "Error: " .mysqli_error($this->dbh);
            }else{
            return 'good';
            }
        }else{
            return 'seen';
        }

    }
}
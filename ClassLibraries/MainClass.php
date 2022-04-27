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
            $fname = isset($data['fname']) ? filter_var($data['fname'], FILTER_SANITIZE_STRING) : NULL;
            $lname = isset($data['lname']) ? filter_var($data['lname'], FILTER_SANITIZE_STRING) : NULL;
            $email = isset($data['email']) ? filter_var($data['email'], FILTER_SANITIZE_EMAIL) : NULL;
            $phone_number = isset($data['phone_number']) ? filter_var($data['phone_number'], FILTER_SANITIZE_NUMBER_INT) : NULL;
            $moms_name = isset($data['moms_name']) ? filter_var($data['moms_name'], FILTER_SANITIZE_STRING)  : NULL;
            $moms_loc = isset($data['moms_loc']) ? filter_var($data['moms_loc'], FILTER_SANITIZE_STRING) : NULL;
            $your_loc = isset($data['your_loc']) ? filter_var($data['your_loc'], FILTER_SANITIZE_STRING) : NULL;
            $message_to_mom = isset($data['message_to_mom']) ? filter_var($data['message_to_mom'], FILTER_SANITIZE_STRING) : NULL;

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
<?php

require_once('../ClassLibraries/DB/adminCredDB.php');

class loginClass extends IDPortaLDB{

    function dbtest(){
        $result = $this->admindb;
        return $result;
    }

    function anotherTest(){
        $myQuery = "SELECT birthday FROM about_me";
        $result = mysqli_query($this->admindb, $myQuery);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    function adminLogin($email, $password){
        // echo $password;
        // die();
        $myQuery = "SELECT * FROM admin_cred WHERE email = '$email' AND pass = '$password'";
        $result = mysqli_query($this->admindb, $myQuery);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }


}
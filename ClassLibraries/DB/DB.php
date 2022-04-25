<?php
require_once('constants.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class DataBase
{
  // public static $ginoCon;
 function ginoDB()
 {
$ginoCon = mysqli_connect(GINO_DB_SERVER,GINO_DB_USER,GINO_DB_PASS,GINO_DB_NAME);
// $this->ginodb=$ginoCon;
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }else{
     return $ginoCon;
 }
 }

}
<?php
require_once('constants.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class DataBase
{
  // public static $ginoCon;
 function hdplusDB()
 {
$hdplusCon = mysqli_connect(HDPLUS_DB_SERVER,HDPLUS_DB_USER,HDPLUS_DB_PASS,HDPLUS_DB_NAME);
// $this->ginodb=$ginoCon;
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }else{
     return $hdplusCon;
 }
 }

}
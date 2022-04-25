<?php
require_once('constants.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class IDPortaLDB
{
  // public static $con;
 function __construct()
 {
$adminCon = mysqli_connect(IDP_DB_SERVER,IDP_DB_USER,IDP_DB_PASS,IDP_DB_NAME);
$this->admindb=$adminCon;
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 }
}
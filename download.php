<?php 
     
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

include 'db.php';
include 'API.php';
session_start();

if (isset($_GET['id'])) {
     
     $id = $_GET['id'];

     // connection to databse
     OpenCon();

     // get token from DB
     $token = getToken();
     $refCOde = getrefCode();

     // echo "$token".'<br><br>';

     // exit();

     // create clone using API
     $data = clone_file($id,$token);

     $_SESSION['new_file_id'] = $data['id'];

     // Get new genrated file data and save into DB
     saveFiledb($data);

     // database connection closed
     CloseCon();

     header("Location: file.php");
     exit();
}
?>

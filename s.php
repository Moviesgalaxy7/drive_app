<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


define('DB_HOST', 'localhost');
define('DB_USER', 'moviesga_mg_admin');
define('DB_PASS', 'D@9s:EX3n;keM`&/x4=)');
define('DB_NAME', 'moviesga_mgdrive');

include "db.php";

// connection to databse
OpenCon();

$access_tokendata = [
    'access_token' => "ya29.a0AfB_byB-sQrJjojLAByefkeWaQNGrGO8aWx3YBUBQ3T9zWGxfPQIJjpS_Ap3vYDwUgn9axDCjQoD6KcmC-lKhd6GELnof1GlfL4_yVSZAobhjsrWvmyyiex82p2diM6w5pRri3-385Oa8pBj1q6FCi6S_iuJkYzsagaCgYKAf0SARASFQHGX2Mi6i94BKZKwiNiLbeMwhzh3w0169",
    'expires_in' => 3599,
    'scope' => 'https://www.googleapis.com/auth/drive https://www.googleapis.com/auth/drive.file',
    'token_type' => 'Bearer'
];


save_token($access_tokendata);

// $result = ->query($sql);

// while($row = $result->fetch_array()){
//     echo $row['app_ref_person_submitted_by'];
// }




// database connection closed
CloseCon();

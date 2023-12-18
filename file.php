<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'db.php';

// database connection
OpenCon();
     
// database connection close
closeCon();
     


     echo "<pre>";
     echo "<br><br>";
     print_r($data);

     exit();

     $title = "Download File ";
     include 'header.php';

     // Start Session
     session_start();

     // // connection to databse
      = OpenCon();
     	
     // get token from DB
     $g_id = $_SESSION['new_file_id'];

     $data = getFile($g_id);
     
     // exit();

     // database connection closed
     CloseCon();

     $format = substr($data['name'], -3);


?>

<div class="ui grid centered ">
     <div class="ui card page-card">
          <div class="content fluid">
               <div class="header"><i class="file alternate outline icon"></i> File Information  </div>
               	<div class="description">
                    <table class="ui celled striped table">
                         <tbody>
                              <tr>
                                   <td class="two wide">Name</td>
                                   <td><?= $data['name'] ?? 'NULL'; ?></td>
                              </tr>
                              <tr>
                                   <td class="two wide">Format</td>
                                   <td><?= $format ?? 'NULL'; ?></td>
                              </tr>
                         </tbody>
                    </table>
               	</div>
	          	<div class="extra content">
	               <a href="https://drive.google.com/uc?id=<?= $data['gid'] ?? 'NULL'; ?>"> <button class="ui active button" id="download"> <i class="download icon"></i> Direct Download </button></a>
	          	</div>
          </div>
     </div>
</div>
<?php include 'footer.php'; ?>
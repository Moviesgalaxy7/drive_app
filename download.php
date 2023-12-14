<?php $title = 'Download'; ?>
<?php require 'header.php'; ?>
<?php 
     
     print_r($_POST);
     print_r($_GET);


     $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://oauth2.googleapis.com/token');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/x-www-form-urlencoded',
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'client_id=1054573111976-djj127ntcidmla6g8rsefg0or65uciv6.apps.googleusercontent.com&client_secret=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&refresh_token=4/0AfJohXlunuXFfo89WGCoYkeWKfYZUdp3C_n2BHwEO78TvVn77EmxkcszQKkmCzoGZw1V_Q&grant_type=refresh_token');

$response = curl_exec($ch);

curl_close($ch);
echo "<pre>";
print_r($response);
exit();

$ch = curl_init();

     $URL = "https://www.googleapis.com/drive/v3/files/" . $id . "/copy?access_token=" . $token;
     curl_setopt($ch, CURLOPT_URL, $URL);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($ch, CURLOPT_POST, 1);
     $result = curl_exec($ch);
     if (curl_errno($ch)) {
          echo 'Error:' . curl_error($ch);
     }

     curl_close($ch);
     echo "<pre>";
     print_r($result);

exit();

     // $ch = curl_init();
     // curl_setopt($ch, CURLOPT_URL, 'https://oauth2.googleapis.com/token');
     // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     // curl_setopt($ch, CURLOPT_POST, 1);
     // curl_setopt($ch, CURLOPT_HTTPHEADER, [
     //     'Content-Type: application/x-www-form-urlencoded',
     // ]);
     // curl_setopt($ch, CURLOPT_POSTFIELDS, 'code= 4/0AfJohXlJLOliZ48kIg3xGTU8VY0PWqT46iH04vKf2yjIQWz1JGtA_2uMcVQ-Rw5-XKrb8g&client_id=1054573111976-djj127ntcidmla6g8rsefg0or65uciv6.apps.googleusercontent.com&client_secret=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&redirect_uri=http://localhost/google-drive-dev/download.php&grant_type=authorization_code');

     // $response = curl_exec($ch);

     // curl_close($ch);

     // echo "<pre>";
     // print_r($response);


     exit;

     // connection to databse
     $conn = OpenCon();

     // $result = [
     //      ["kind","drive#file"],
     //      ["id","1rYK9Ckvt0wgxSZ-WEgZgpBOf2aUK9Q1I"],
     //      ["name","Asur S02E05 Hindi 1080p WEB-DL ESub [BollyFlix].mkv"],
     //      ["mimeType","video/x-matroska"],
     // ];

     // echo $result->['id'];

     // database connection closed
     CloseCon($conn);

     $url="https://drive.google.com/file/d/1c87xrkOBv9I_oR1oicnw5pWyWi2lf4dI/view?usp=drive_link";

     $id = drive_id($url);
     // echo $id;
     // exit;
     $token = "ya29.a0AfB_byBTPXIjpl7EPMkoatoM8bVQsP3ssodkRXtW-AaJKjkqEOGXYcXfFDgZaUAdJ8JyBETiNmg2s2RMpt_H0dk3cfbn9VztazJR-IGYRknEv5ReUvI8s4TjAydPQvSDNx1puRsXCve7IxGob8dMKrJbXJpjYvof6nMaCgYKAT4SARISFQHGX2MiPB2ZAxe6hIvT5O-VSXVjBA0170";
     
     // $data = clone_file($id,$token);

     $data = get_access_token();
     echo "<pre>";
     print_r($data);
     exit;
     
     echo current($data->id); //Returns current value

     exit();

?>
     <div class="ui container my-5">
          <!-- <div class="ui grid">
               <div class="column">
                    <div class="ui secondary menu">
                         <a class="item active"> Home </a>
                         <a class="item"> Messages </a>
                         <a class="item"> Friends </a>
                         <div class="right menu">
                              <a class="ui item"> Logout </a>
                         </div>
                    </div>
               </div>
          </div> -->
          <div class="ui grid centered ">
               <div class="ui fluid card">
                    <div class="content bg-gray">
                         <div class="header"><i class="file alternate outline icon"></i> File Information </div>
                    </div>
                    <div class="content">
                         <h4 class="ui sub header">
                              <table class="ui unstackable table noborder">
                                   <!-- <thead>
                                        <tr>
                                             <th class="two wide"></th>
                                             <th>Status</th>
                                        </tr>
                                   </thead> -->
                                   <tbody>
                                        <tr>
                                             <td class="two wide">Name</td>
                                             <td>Sympathy.for.Mr.Vengeance.2002.480p.Bluray.Korean.Esubs.mkv</td>
                                        </tr>
                                        <tr>
                                             <td class="two wide">Format</td>
                                             <td>MKV</td>
                                        </tr>
                                        <tr>
                                             <td class="two wide">Size</td>
                                             <td>3.5 GB</td>
                                        </tr>
                                        <tr>
                                             <td class="two wide">Added On</td>
                                             <td> December 11th at 4:28pm </td>
                                        </tr>
                                   </tbody>
                              </table>
                         </h4>
                    </div>
                    <div class="extra content bg-gray">
                         <button class="ui active button" id="download"> <i class="download icon"></i> Direct Download </button>
                    </div>
               </div>
          </div>
     </div>
<script type="text/javascript">
     $( "#download" ).on( "click", function() {
          // $( this ).addClass('loading ');
          $( this ).val('Please wait ');
     } );
</script>
<?php require 'footer.php';
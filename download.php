<?php 
     
     ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

     // Set Page Title
     $title = 'Download'; 

     // Load Page Header
     require 'header.php';
    
     // Set Token
     $token = "ya29.a0AfB_byDEGMGUAgue4KANpxJwZyqAZ6_AxiAPJA4awTufU5_XBxc9aHaYvAywA1PoZwBhw1bdKd9DO6pgUtwiGNLTnFzdQJ_YzwqSPTh3nYLNNnbiQoErlGOoNDT_IfWmL22UckzB9AHLQ89HrCxZ4CcxwZrj7Rc_19pRaCgYKAaoSARISFQHGX2Mipx_2wjTP9d7nHvQxk_IFDA0171";//token('access_token');

     // connection to databse
     // $conn = OpenCon();

     // database connection closed
     // CloseCon($conn);


     // $url="https://drive.google.com/file/d/1c87xrkOBv9I_oR1oicnw5pWyWi2lf4dI/view?usp=drive_link";


     if (isset($_GET['id'])) {
          $id = $_GET['id'];
          // $id = drive_id($url);
          $data = clone_file($id,$token);

          echo "<pre>";
          print_r($data);
          exit;
     }


     // echo current($data->id); //Returns current value


     echo "id not set";
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

               <div class="ui fluid card mgcard">

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
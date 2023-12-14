<?php

require __DIR__ . '/vendor/autoload.php';

use Google\Client;
use Google\Service\Drive;

// require_once 'Google/Client.php';
// require_once 'Google/Service/Drive.php';

// require __DIR__ . '/vendor/autoload.php';


echo "<pre>";

// function searchFiles()
// {
    try {
        $client = new Client();
        $client->useApplicationDefaultCredentials();
        $client->addScope(Drive::DRIVE);
        $driveService = new Drive($client);
        $files = array();
        $pageToken = null;
        do {
            $response = $driveService->files->listFiles(array(
                'q' => "mimeType='image/jpeg'",
                'spaces' => 'drive',
                'pageToken' => $pageToken,
                'fields' => 'nextPageToken, files(id, name)',
            ));
            foreach ($response->files as $file) {
                printf("Found file: %s (%s)\n", $file->name, $file->id);
            }
            array_push($files, $response->files);

            $pageToken = $response->pageToken;
        } while ($pageToken != null);
        return $files;
    } catch(Exception $e) {
       echo "Error Message: ".$e;
    }
// }

// $content = file_get_contents('https://drive.google.com/file/d/16tPbRSo_AwoI2rK6cors85t0aK5RR4xZ/view?usp=sharing');
// print_r($content);
exit;

$curlPost = 'client_id=' . $client_id . '&redirect_uri=' . $redirect_uri . '&client_secret=' . $client_secret . '&code='. $code . '&grant_type=authorization_code'; 
        $ch = curl_init();         
        curl_setopt($ch, CURLOPT_URL, self::OAUTH2_TOKEN_URI);         
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);         
        curl_setopt($ch, CURLOPT_POST, 1);         
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);     
        $data = json_decode(curl_exec($ch), true); 
        $http_code = curl_getinfo($ch,CURLINFO_HTTP_CODE); 
         
        if ($http_code != 200) { 
            $error_msg = 'Failed to receieve access token'; 
            if (curl_errno($ch)) { 
                $error_msg = curl_error($ch); 
            }else{ 
                $error_msg = !empty($data['error']['message'])?$data['error']['message']:''; 
            } 
            throw new Exception('Error '.$http_code.': '.$error_msg); 
        } 
             
        return $data; 

exit();
$client = new Google_Client();
// Get your credentials from the console
$client->setClientId('1054573111976-djj127ntcidmla6g8rsefg0or65uciv6.apps.googleusercontent.com');
$client->setClientSecret('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');
$client->setRedirectUri('http://localhost/google-drive/upload-file.php');
$client->setScopes(array('https://www.googleapis.com/auth/drive.file'));

session_start();

if (isset($_GET['code']) || (isset($_SESSION['access_token']) && $_SESSION['access_token'])) {
    if (isset($_GET['code'])) {
        $client->authenticate($_GET['code']);
        $_SESSION['access_token'] = $client->getAccessToken();
    } else
        $client->setAccessToken($_SESSION['access_token']);

    $service = new Google_Service_Drive($client);

    //Insert a file
    $file = new Google_Service_Drive_DriveFile();
    $file->setName(uniqid().'.jpeg');
    $file->setDescription('A test document');
    $file->setMimeType('image/jpeg');

    $data = file_get_contents('one_piece.jpeg');

    $createdFile = $service->files->create($file, array(
          'data' => $data,
          'mimeType' => 'image/jpeg',
          'uploadType' => 'multipart'
        ));

    print_r($createdFile);

} else {
    $authUrl = $client->createAuthUrl();
    header('Location: ' . $authUrl);
    exit();
}
<?php include 'config.php'; ?>

<?php include 'db.php'; ?>

<?php include 'function.php'; ?>

<?php include 'API.php'; ?>

<!DOCTYPE html>

<html lang="en">

<head>

     <meta charset="UTF-8">

     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title><?= set_title( $title ); ?></title>

     <link rel="stylesheet" type="text/css" href="ui/semantic.min.css">

     <script

     src="https://code.jquery.com/jquery-3.1.1.min.js"

     integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="

     crossorigin="anonymous"></script>

     <script src="ui/semantic.min.js"></script>

     <style type="text/css">

          body {

               background-color: rgba(243, 244, 246, 1);

          }

          .mgcard {

                   box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;

                   border-radius: 1rem !important;

          }

          .bg-gray{

               background-color: #c0c1c240;

          } 

          .bg-gray:first-child { padding-top: 2rem !important; padding-bottom: 2rem !important; }

          .noborder {

               border: 0 !important;margin: 1rem auto !important;

          }

          .my-1 { margin: 1rem auto;}

          .my-2 { margin: 2rem auto;}

          .my-3 { margin: 3rem auto;}

          .my-4 { margin: 4rem auto;}

          .my-5 { margin: 5rem auto;}

     </style>

</head>

<body>
<?php


   $request = $_SERVER['REQUEST_URI'];

   $rootUrl = "http://localhost/myworkmate/";


   

   require 'controllers/mainController.php';

   require_once 'constants.php';

   require_once 'views/header.php';



 


switch($request){

    case root :

        require 'views/welcome.php';

        break;

   
   case root . 'login' :

     echo 'login';

        require 'views/login.php';


   break;


   
   case root . 'register' :

    require 'views/register.php';


    break;



   }
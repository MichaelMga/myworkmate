<?php

   require 'controllers/mainController.php';
   require_once 'constants.php';



   $rootUrl = "http://localhost/myworkmate/";
   $request = $_SERVER['REQUEST_URI'];



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



    case root . 'logout' :


      logout();



   }
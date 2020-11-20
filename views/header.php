<?php 


session_start();

?>

<html>


<head>


<title>My work mate</title>

</head>


<body>
    


<style>

*{

    margin: 0;
}



body{

    background: red;
}


 #navBar{

     background: black;

     height: 10vh;
         
     width: 100%;

     display: flex;

     justify-content: flex-end;

     align-items: center;

 }


 #navBar div{


    height: 50%;

    width: 10%;
 
}

</style>



<div id='navBar'>
    <div>
  <?php
  
    if(!(isset($_SESSION['userName']))){

        echo '<a href="' . $rootUrl . 'login"><button>Login</button></a>';

        echo '<a href="' . $rootUrl . 'register"><button>Inscription</button></a>';

    } else {

        echo '<a href="' . $rootUrl . 'logout"><button>Logout</button></a>';

    }

 ?>
   </div>

</div>




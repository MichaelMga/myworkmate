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
  
    if(session_status() == PHP_SESSION_NONE){

        echo '<a href="' . $rootUrl . 'login"><button>Login</button></a>';

        echo '<a href="' . $rootUrl . 'register"><button>Inscription</button></a>';

    }

 ?>
   </div>

</div>




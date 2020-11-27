<?php

require 'connexion.php';

require '../constants.php';




//CHECK IF THE USER EXISTS


if(isset($_POST['userName'])){



    $userName = $_POST['userName'];

    $pass = $_POST['password'];




    $sql = 'SELECT * FROM users';
    
    $userFound = false;
    
    
    
    //CHECK IF THE USER IS ALREADY IN THE DATABASE
    
    
    try{
    
        $stmt = $db->prepare($sql);
        $stmt->execute();
    
    

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    
            //an array is actually rendered for each line
    
            $name = $row['name'];

            $password = $row['password'];
            


    
            if($name == $userName){


                //CHECK PASSWORD

                echo 'vous êtes connectés';

                $userFound = true;


    
                //START A NEW SESSION
    
             session_start();
        
              $_SESSION['userName'] = $userName;
              

              header('Location:' . root);
                    
              
            }
    
    
        }
    
    

    
    
        
    } catch(Exception $e){
    
        echo $e;
    }
    
    




}

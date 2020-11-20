<?php


require 'connexion.php';


if(isset($_POST[('createNewUser')])){


    $newUserName = $_POST[('newUserName')];

   //CHECK IF THE USER ALREADY EXISTS

    $sql = 'SELECT * FROM users';

    $sql2='INSERT INTO users(name) VALUES ("phil") ';


    $nameAlreadyUsed = false;



    //CHECK IF THE USER IS ALREADY IN THE DATABASE


    
    try{
    
        $stmt = $db->prepare($sql);
        $stmt->execute();

          
        

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

            //an array is actually rendered for each line

            $name = $row['name'];



            if($name == $newUserName){


               $nameAlreadyUsed = true;

               break;

            }


        }



        if($nameAlreadyUsed == true){

            echo 'désolé, ce nom est déjà utilisé';
        } else {


            $sql = 'INSERT INTO users(name) VALUES("'. $newUserName . '")';


            $stmt = $db->prepare($sql);


            $stmt->execute();


            echo 'ok, ' . '"' . $newUserName . '"';

        }

    
        
    } catch(Exception $e){
    
        echo $e;
    }
    
    



}

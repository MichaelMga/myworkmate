<?php


require 'connexion.php';


if(isset($_POST[('createNewUser')])){


    $newUserName = $_POST[('newUserName')];

    $password = $_POST[('password')];


   //CHECK IF THE USER ALREADY EXISTS

    $sql = 'SELECT * FROM users';


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


            //HASH THE GIVEN PASSWORD USING BCRYPT, AND INSERT INTO INTO THE DATABASE


            $hash = password_hash($password , PASSWORD_BCRYPT);


            $sql = 'INSERT INTO users(name, password) VALUES("'. $newUserName . '" , "' . $hash . '")';




            $stmt = $db->prepare($sql);


            $stmt->execute();
            

            echo 'ok, ' . '"' . $newUserName . '"';

        }

    
        
    } catch(Exception $e){
    
        echo $e;
    }
    
    



}

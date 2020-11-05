<?php

  require '../connexion.php';

  //CHECK IF THE COMPANY NAME ALREADY EXISTS

   $companyExists = false;
  
  if(isset($_POST['newCompanyName'])){


    $newCompanyName = $_POST['newCompanyName'];


    $sql = 'SELECT * FROM companies';
 
 
    $stmt = $db->query($sql);
 
    $rows = $stmt->fetchAll();
           
    if($rows){
 
     foreach($rows as $row){

         if( $row[0] == $newCompanyName){

            echo 'Cette entreprise existe déjà!';

            $companyExists = true;
         
        } 
    
     }

  }

}



if($companyExists != true){

    $sql = 'INSERT INTO companies(companyName) VALUES("'. $newCompanyName .'")';
    
  try{
    
     
       $db->query($sql);

       echo 'nouvelle entreprise ajoutée à la table!';
       

   } catch (Exception $e){

    echo $e;

   }


    
  $sql = 'CREATE TABLE ' . $newCompanyName . '(VARCHAR(255) members)'; 


  try{

      $db->query($sql);
    
       echo 'nouvelle table créée!';

   } catch (Exception $e){

    echo $e;

   }





}




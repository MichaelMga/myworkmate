<?php

   require '../header.php';
  
   require '../connexion.php';



    if(isset($_POST['companyName'])){


        $companyName = $_POST['companyName'];


        $sql = 'SELECT * FROM companies';
     
     
        $stmt = $db->query($sql);
     
        $rows = $stmt->fetchAll();
               
        if($rows){
     
         foreach($rows as $row){

             if( $row[0] == $companyName){

                echo 'entreprise trouvée!';

                $company = $row[0];

                header('Location: ../groups/showall.php');
             
            }    
        
         }

      }
  
  }





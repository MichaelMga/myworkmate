<?php




function logout(){



    session_unset();

    session_destroy();


    echo 'vous êtes déconnectés';


    header('Location: index.php');


}
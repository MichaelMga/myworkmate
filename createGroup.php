<?php

  require 'header.php';

?>


<form method = "post" action = "db/createGroup.php" >

    <input type="text" name="newCompanyName" placeholder='nom de votre entreprise'>
    <input type="submit" value='créer un groupe'>

</form>



<?php
  
  require 'footer.php';

?>







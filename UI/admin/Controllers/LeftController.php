<?php
if($apiName == NULL){
  require 'Views/Include/HomeLeftSlidebar.php';
}
else{
    switch ($apiName){
      case "Home" : 
        require 'Views/Include/HomeLeftSlidebar.php';
          break;
        
      case "Administration" :
        require 'Views/Include/AdministrationLeftSlidebar.php';
          break;
        
      case "Enrollment" :
        require 'Views/Include/EnrollLeftSlidebar.php';
          break;

      default: require 'HomeLeftSlidebar.php';
          break;
    }
}
?>
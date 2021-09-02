<?php 
     function contains($haystack, $needle){
          return strpos($haystack, $needle) !== false;
     }
     //if it contains period (ciit email format), then get first split as first name
     function firstName($email){
        $name = explode("@", $email)[0];
        $firstName = ucfirst(explode(".", $name)[0]);
        return contains($name, ".")? $firstName : $email;
     }

?>
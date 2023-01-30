<?php 
    //foreach element in $_POST as $key => $value return in ul li using strip_tags to avoid XSS
    foreach($_POST as $key => $value){
       //return in ul li using strip_tags to avoid XSS
         echo "<ul><li>".strip_tags($key)." : ".strip_tags($value)."</li></ul>";
    }
?>
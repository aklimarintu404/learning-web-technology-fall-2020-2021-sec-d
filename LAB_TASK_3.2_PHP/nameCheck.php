<?php

if(isset($_REQUEST['submit'])){
    $name = $_REQUEST['name'];
    if(!empty($name)){
         if($name[0]==" "){
             header('location: name.html?msg=invalid_name');
         }
         
    else{    
         header('location: name.html?msg=null_name');       
     }   
 }
 else{   
     header('location: name.html?msg=error');   
 }
 ?>
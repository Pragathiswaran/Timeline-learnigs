<?php
include 'class/class.connection.php';
include 'class/class.validation.php';
include 'class/class.session.php';

function load_template($name){
    
    include $_SERVER['DOCUMENT_ROOT']."/timeline/Hindustan/_template/$name.php";
}


?>
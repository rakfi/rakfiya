<?php

include("classes.php");

$obj =new DataOperation;

if(isset($_POST["submit"])){
    
$myArray = array(
    "name" => $_POST["name"], 
    "email" => $_POST["email"],
    "password" => md5($_POST["password"])
);


if($obj->insert_record("details", $myArray)){
    header("location:index.php?msg=Record Inserted");
}
else{
    header("location:index.php?msg=Insertion Failed");
}

}

$myArray = array(
    "name" => "uma", 
    "email" => "abc@gmail.com",
    "password" => "abcde13" 
);


echo $obj->insert_record("details", $myArray);

?>
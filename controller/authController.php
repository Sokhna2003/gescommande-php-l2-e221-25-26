<?php
require_once ROOT."/model/authModel.php";
$logout=function(){

};

$login=function(){
loadView("auth/login");
};




$actions=[
    "login"=>$login,
    "logout"=>$logout,

    
];
 $action=$_REQUEST["action"]??"login";
 
 if (array_key_exists($action, $actions)) {
         $actions[$action]();
     }
     else{
         echo "page introuvable c client";
         exit();
}
         

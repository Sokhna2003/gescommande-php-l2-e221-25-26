<?php
require_once ROOT."/model/clientModel.php";
$liste=function(){
$clients = getAllclients();
$total_client= countTable("client");
loadView("clients/liste",["clients"=>$clients,"total_client"=>$total_client]);
};

$ajout=function(){
    $errors=[];
    if (isset($_POST["ajouter"])) {
        isEmpty("prenom",$_POST["prenom"],$errors,"Veuillez renseigner le prenom");
        isEmpty("nom",$_POST["nom"],$errors,"Veuillez renseigner le nom");
        isEmpty("email",$_POST["email"],$errors,"Veuillez renseigner l'email");
        isEmpty("telephone",$_POST["telephone"],$errors,"Veuillez renseigner le telephone");
        isEmpty("adresse",$_POST["adresse"],$errors,"Veuillez renseigner l'adresse");
        
        if (validate($errors)) {
            $client=[
                "prenom"=>$_POST["prenom"],
                "nom"=>$_POST["nom"],
                "email"=>$_POST["email"],
                "telephone"=>$_POST["telephone"],
                "adresse"=>$_POST["adresse"]
            ];
            addClient($client);
            redirectTo("client","liste");
        }
        
    }
loadView("clients/ajout",["errors"=>$errors]);
};

$detail=function(){
echo "je detail un client";
};

$modifier=function(){
echo "je modifie un client";
};

$supprimer=function(){
echo "je supprime un client";
};


$actions=[
    "liste"=>$liste,
    "ajout"=>$ajout,
    "detail"=>$detail,
    "modifier"=>$modifier,
    "supprimer"=>$supprimer
    
];
 $action=$_REQUEST["action"]??"liste";
 
 if (array_key_exists($action, $actions)) {
         $actions[$action]();
     }
     else{
         echo "page introuvable c client";
         exit();
}
         

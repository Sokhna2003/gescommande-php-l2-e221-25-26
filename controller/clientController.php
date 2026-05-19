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
        if(empty($_POST["prenom"])){
            $errors["prenom"]="Veuillez renseigner le prenom";
        }
        if(empty($_POST["nom"])){
            $errors["nom"]="Veuillez renseigner le nom";
        }
        if(empty($_POST["email"])){
            $errors["email"]="Veuillez renseigner l'email";
        }
        if(empty($_POST["telephone"])){
            $errors["telephone"]="Veuillez renseigner le telephone";
        }
        if(empty($_POST["adresse"])){
            $errors["adresse"]="Veuillez renseigner l'adresse";
        }
        if (count($errors)==0) {
            $client=[
                "prenom"=>$_POST["prenom"],
                "nom"=>$_POST["nom"],
                "email"=>$_POST["email"],
                "telephone"=>$_POST["telephone"],
                "adresse"=>$_POST["adresse"]
            ];
            addClient($client);
            loadView("clients/liste",["clients"=>getAllclients()]);
        }
        else{
            loadView("clients/ajout",["errors"=>$errors]);
        }
    }
loadView("clients/ajout",[]);
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
         

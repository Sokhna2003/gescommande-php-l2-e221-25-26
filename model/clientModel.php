<?php
require_once(ROOT."bd/database.php");
function getAllclients(){
    $sql="SELECT * FROM client";
   return executeSelect($sql);
}

function getClientById($id){
    $sql="SELECT * FROM client where id_client=:id";
   return executeSelect($sql,["id"=>$id],true);
}

function addclient(array $client){
    $sql="INSERT INTO client(prenom,nom,email,telephone,adresse) VALUES(:prenom,:nom,:email,:telephone,:adresse)";
    executeUpdate($sql,$client);
}




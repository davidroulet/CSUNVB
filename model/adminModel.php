<?php
/**
 * Title: CSUNVB
 * USER: marwan.alhelo
 * DATE: 13.02.2020
 * Time: 11:29
 **/



function getbasebyid($id)       //Récupère une base en fonction de son Id
{
    return selectOne("SELECT * FROM bases where id =:id", ['id' => $id]);
}

function getbases()            //Récupère toutes les bases
{
    return selectMany("SELECT * FROM bases", []);
}

function getUserByInitials($initials)       //Récupère un utilisateur en fonction de ses initiales
{
    return selectOne("SELECT * FROM users where initials =:initials", ['initials' => $initials]);
}

function getUsers()     //Récupère tous les utilisateurs
{
    return selectMany("SELECT * FROM users", []);
}

function getUserAdmin($admin){
    return selectOne("SELECT * FROM users where admin = :admin", ['admin' => $admin]);
}

function SaveUser($hash, $id)       //Met à jour les informations d'un utilisateur
{
    return execute("UPDATE users SET password= :password, firstconnect= :firstconnect where id = :id", ['password' => $hash, 'firstconnect' => 0, 'id' => $id]);
}

function SaveBase($bases)       //Met à jour les informations d'une base 
{
    return execute("UPDATE bases SET name= :name where id = :bases", [$bases]);
}

function addNewDrug($nameDrug)
{
    return intval(insert("INSERT INTO drugs (name) values (:nameDrugs) ",['nameDrugs'=>$nameDrug] ));
}

function addNewUser($prenomUser, $nomUser, $initialesUser, $hash, $admin, $firstconnect)
{
    return intval(insert("INSERT INTO users (firstname, lastname, initials, password, admin, firstconnect) VALUES (:firstname, :lastname, :initials, :password, :admin, :firstconnect)", ['firstname'=>$prenomUser, 'lastname'=>$nomUser, 'initials'=>$initialesUser, 'password'=>$hash, 'admin'=>$admin, 'firstconnect'=>$firstconnect]));       //à optimiser/simplifier avec un tableau
}

function addNewBase($nameBase)
{
    return intval (insert("INSERT INTO bases (name) values (:nameBase) ",['nameBase'=>$nameBase] ));
}

function changePwdState($changeUser)
{
    return execute("UPDATE users SET firstconnect= :firstconnect WHERE id= :id", ['firstconnect' => 1, 'id' => $changeUser]);
}
function addNewNova($nameNova)
{
    return intval (insert("INSERT INTO novas (number) values (:nameNovas) ",['nameNovas'=>$nameNova] ));
}
function saveModifDrug($modifNameDrug, $idDrug)
{
    return execute("UPDATE drugs SET name= :name WHERE id= :id", ['name' => $modifNameDrug, 'id' => $idDrug]);
}
function saveModifBase($modifNameBase, $idBase)
{
    return execute("UPDATE bases SET name= :name WHERE id= :id", ['name' => $modifNameBase, 'id' => $idBase]);
}
function saveModifNova($modifNameNova, $idNova)
{
    return execute("UPDATE novas SET number= :number WHERE id= :id", ['number' => $modifNameNova, 'id' => $idNova]);
}function addNewGuardsheet (){
    return execute();
}
?>

<?php
/**
 * Title: CSUNVB
 * USER: marwan.alhelo
 * DATE: 13.02.2020
 * Time: 11:29
 **/


function readAdminItems()
{
    return json_decode(file_get_contents("model/dataStorage/items.json"), true);
}

/**
 * Retourne un item précis, identifié par son id
 * ...
 */
function readAdminItem($id)
{
    $items = readAdminItems();
    // TODO: coder la recherche de l'item demandé
    return $item;
}

/**
 * Sauve l'ensemble des items dans le fichier json
 * ...
 */
function updateAdminItems($items)
{
    file_put_contents("model/dataStorage/items.json", json_encode($items));
}

/**
 * Modifie un item précis
 * Le paramètre $item est un item complet (donc un tableau associatif)
 * ...
 */
function updateAdminItem($item)
{
    $items = readAdminItems();
    // TODO: retrouver l'item donnée en paramètre et le modifier dans le tableau $items
    saveAdminItem($items);
}

/**
 * Détruit un item précis, identifié par son id
 * ...
 */
function destroyAdminItem($id)
{
    $items = readAdminItems();
    // TODO: coder la recherche de l'item demandé et sa destruction dans le tableau
    saveAdminItem($items);
}

/**
 * Ajoute un nouvel item
 * Le paramètre $item est un item complet (donc un tableau associatif), sauf que la valeur de son id n'est pas valable
 * puisque le modèle ne l'a pas encore traité
 * ...
 */
function createAdminItem($item)
{
    $items = readAdminItems();
    // TODO: trouver un id libre pour le nouvel id et ajouter le nouvel item dans le tableau
    saveAdminItem($items);
    return ($item); // Pour que l'appelant connaisse l'id qui a été donné
}

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

function SaveUser($Users)       //Met à jour les informations d'un utilisateur
{
    return execute("UPDATE users SET password= :password, firstconnect= :firstconnect where id = :Users", ['Users' => $Users]);
}

function SaveBase($bases)       //Met à jour les informations d'une base 
{
    return execute("UPDATE bases SET name= :name where id = :bases", [$bases]);
}

function addNewDrug($nameDrug)
{
    return insert("INSERT INTO Drugs values (:nameDrugs) ",['name'=>$nameDrug] );
}

function addNewUser($prenomUser, $nomUser, $initialesUser, $hash, $admin, $firstconnect)
{
    return insert("INSERT INTO users VALUES (:firstname, :lastname, :initials, :password, :admin, :firstconnect)", ['firstname'=>$prenomUser, 'lastname'=>$nomUser, 'initials'=>$initialesUser, 'password'=>$hash, 'admin'=>$admin, 'firstconnect'=>$firstconnect]);       //à optimiser/simplifier avec un tableau
}
?>

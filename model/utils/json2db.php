<?php
/**
 * File : json2db.php
 * Author : X. Carrel
 * Created : 2020-04-30
 * Modified last :
 **/
function getPDO()
{
    require "../../.const.php";
    $dbh = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $user, $pass);
    return $dbh;
}

/**
 * Insère toutes les données contenues dans le tableau $batch dans la db au moyen de la requête $query
 * @param $query
 * @param $batch
 */
function insertBatch($query, $batch)
{
    require "../../.const.php";
    $dbh = getPDO();
    $statement = $dbh->prepare($query);//prepare query once
    foreach ($batch as $val) // execute it many times
    {
        $statement->execute($val);
    }
}

$baseData = json_decode(file_get_contents('snows.json'), 1);
// Transformer le tableau pour ne garder que les champs nécessaires
foreach ($baseData as $key => $val)
{
    unset ($baseData[$key]['id']);
    unset ($baseData[$key]['bigimage']);
    unset ($baseData[$key]['smallimage']);
    unset ($baseData[$key]['dateretour']);
    unset ($baseData[$key]['disponible']);
}
// Insérer les données dans la db
insertBatch("INSERT INTO snowtypes (brand, model) VALUES (:marque, :modele);", $baseData);

?>

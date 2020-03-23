<?php
/**
 * Ce cartouche vaudra quelques points en plus au groupe qui osera le laisser là tel quel ...
 * Auteur: D . Roulet
 * Date: A quoi bon la noté ca change tout les jours
 **/

/**
 * Retourne tous les items dans un tableau indexé de tableaux associatifs
 * Des points seront également retirés au groupe qui osera laisser une des fonctions de ce fichier telle quelle
 * sans l'adapter au niveau de son nom et de son code pour qu'elle dise plus précisément de quelles données elle traite
 */
function GetSheetbyWeek($week,$base){
    $Sheets = getStupSheets();
    foreach ($Sheets as $Sheet) {
        if ($Sheet["week"] == $week && $Sheet["base_id"]==$base ) {
            return $Sheet;

        }
    }

}
function getStupSheets()
{
    $novasheet = stupsheet_use_nova();
    $Sutupbatch = stupsheet_use_batch();
    $Array = json_decode(file_get_contents("model/dataStorage/stupsheets.json"), true);
    $drugs = getDrugs();

    foreach ($Array as $p) {
        $SheetsArray[$p["id"]] = $p;

foreach ($Sutupbatch as $BatchSheet){

    foreach ($novasheet as $item) {
        if ($item["stupsheet_id"] == $p["id"]) {

            $nova = readnova($item["nova_id"]);
            $SheetsArray[$p["id"]]["nova"][] = $nova["number"];
        }
    }

if($BatchSheet["stupsheet_id"]==$p["id"]){
    $batch=readbatche($BatchSheet["batch_id"]);
    switch ($batch["drug_id"]) {
        case '1' :
            $SheetsArray[$p["id"]]["drug"]["Morphine"]["batch_number"][] = $batch["number"];
            break;
        case '2' :
            $SheetsArray[$p["id"]]["drug"]["Fentanyl"]["batch_number"][] = $batch["number"];
            break;
        case '3' :
            $SheetsArray[$p["id"]]["drug"]["Temesta"]["batch_number"][] = $batch["number"];
            break;

}


}
}


    }

    return $SheetsArray;

}

/**
 * Retourne un item précis, identifié par son id
 * ...
 */
function readSheet($id)
{
    $SheetsArray = getStupSheets();
    $Sheet = $SheetsArray[$id];
    return $Sheet;
}

/**
 * Sauve l'ensemble des items dans le fichier json
 * ...
 */
function updateSheets($items)
{
    foreach ($items as $item) {
        unset($items[$item["id"]]["drugs"]);
        unset($items[$item["id"]]["nova"]);
        unset($items[$item["id"]]["batch"]);
        unset($items[$item["id"]]["batch_id"]);


    }
    file_put_contents("model/dataStorage/stupsheets.json", json_encode($items));
}

/**
 * Modifie un item précis.
 * Le paramètre $item est un item complet (donc un tableau associatif)
 * ...
 */
function updateSheet($item)
{
    $sheets = getStupSheets();
    $sheets[$item["id"]] = $item;
    updateSheets($sheets);
}

/**
 * Détruit un item précis, identifié par son id
 * ...
 */
function destroySheet($id)
{
    $items = getStupSheets();

    unset($items[$id]);
    updateSheets($items);

}

/**
 * Ajoute un nouvel item
 * Le paramètre $item est un item complet (donc un tableau associatif), sauf que la valeur de son id n'est pas valable
 * puisque le modèle ne l'a pas encore traité
 * ...
 */
function createSheet($item)
{
    $items = getStupSheets();
    $idliste[] = 0;
    foreach ($items as $p) {
        $idliste[] = $p["id"];
    }
    foreach ($idliste as $id) {
        if ($id != $idliste) {
            $newid = $id;
        }
    }
    $item["id"] = $newid + 1;
    $items[] = $item;
    updateSheets($items);
    return $item;
}

function getBatches()
{
    $Array = json_decode(file_get_contents("model/dataStorage/batches.json"), true);
    foreach ($Array as $p) {
        $SheetsArray[$p["id"]] = $p;
    }
    return $SheetsArray;
}

function readbatche($id)
{
    $SheetsArray = getBatches();
    $Sheet = $SheetsArray[$id];
    return $Sheet;
}

function updateBatches($items)
{
    file_put_contents("model/dataStorage/batches.json", json_encode($items));
}

function updateBatche($item)
{
    $sheets = getBatches();
    $sheets[$item["id"]] = $item;
    updateBatches($sheets);
}

function createbatch($item)
{
    $items = getBatches();
    $idliste[] = 0;
    foreach ($items as $p) {
        $idliste[] = $p["id"];
    }
    foreach ($idliste as $id) {
        if ($id != $idliste) {
            $newid = $id;
        }
    }
    $item["id"] = $newid + 1;
    $items[] = $item;
    updateBatches($items);
    return $item;
}

function FindBatchewhitNumber($number)
{
    $batches = getBatches();
    foreach ($batches as $batch) {
        if ($batch["number"] == $number) {
            return $batch;
        }
    }
}

function destroybatch($id)
{
    $items = getBatches();

    unset($items[$id]);
    updateBatches($items);

}

function getnovas()
{
    $Array = json_decode(file_get_contents("model/dataStorage/novas.json"), true);
    foreach ($Array as $p) {
        $SheetsArray[$p["id"]] = $p;
    }
    return $SheetsArray;
}

function readnova($id)
{
    $SheetsArray = getnovas();
    $Sheet = $SheetsArray[$id];
    return $Sheet;
}


function updatenovas($items)
{
    file_put_contents("model/dataStorage/novas.json", json_encode($items));
}


function updateNova($item)
{
    $sheets = getnovas();
    $sheets[$item["id"]] = $item;
    updatenovas($sheets);

}

function createnova($item)
{
    $items = getnovas();
    $idliste[] = 0;
    foreach ($items as $p) {
        $idliste[] = $p["id"];
    }
    foreach ($idliste as $id) {
        if ($id != $idliste) {
            $newid = $id;
        }
    }
    $item["id"] = $newid + 1;
    $items[] = $item;
    updatenovas($items);
    return $item;
}

function destroyNova($id)
{
    $items = getnovas();
    unset($items[$id]);
    updatenovas($items);

}

function getDrugs()
{
    $batches = getBatches();
    $Array = json_decode(file_get_contents("model/dataStorage/drugs.json"), true);
    foreach ($Array as $p) {
        $SheetsArray[$p["id"]] = $p;
    }
    foreach ($SheetsArray as $item) {
        foreach ($batches as $batch) {
            if ($item["id"] == $batch["drug_id"]) {
                $SheetsArray[$item["id"]]["batches"][] = $batch["number"];
            }
        }
    }
    $sheets = $SheetsArray;
    foreach ($sheets as $item) {
        unset($sheets[$item["id"]]["batches"]);
    }
    updateDrugs($sheets);
    return $SheetsArray;
}
function getDrugsbyID($id){
    $Drugs = getDrugs();
    foreach ($Drugs as $Drug) {
        if ($Drug["id"] == $id) {
            return $Drugs;
        }
    }
}
function readDrug($id)
{
    $SheetsArray = getDrugs();
    $Sheet = $SheetsArray[$id];
    $batches = getBatches();
    foreach ($batches as $batch) {
        if ($id == $batch["drug_id"]) {
            $Sheet["batches"][] = $batch["number"];
        }
    }
    return $Sheet;
}


function updateDrugs($items)
{
    unset($items["id"]["batches"]);
    file_put_contents("model/dataStorage/Drugs.json", json_encode($items));
}


function updateDrug($item)
{

    $sheets = getDrugs();
    $sheets[$item["id"]]["name"] = $item["name"];
    foreach ($sheets as $iteme) {
        unset($sheets[$iteme["id"]]["batches"]);
    }
    updateDrugs($sheets);
}

function createDrug($item)
{
    $items = getDrugs();
    $idliste[] = 0;
    foreach ($items as $p) {
        $idliste[] = $p["id"];
    }
    foreach ($idliste as $id) {
        if ($id != $idliste) {
            $newid = $id;
        }
    }
    $item["id"] = $newid + 1;
    $items[] = $item;
    updateDrugs($items);
    return $item;
}

function destroyDrug($id)
{
    $items = getDrugs();
    unset($items[$id]);
    updateDrugs($items);

}

function stupsheet_use_batch()
{
    $Array = json_decode(file_get_contents("model/dataStorage/stupsheet_use_batch.json"), true);
    foreach ($Array as $p) {
        $SheetsArray[$p["id"]] = $p;
    }
    return $SheetsArray;
}

function stupsheet_use_nova()
{
    $Array = json_decode(file_get_contents("model/dataStorage/stupsheet_use_nova.json"), true);
    foreach ($Array as $p) {
        $SheetsArray[$p["id"]] = $p;
    }
    return $SheetsArray;
}
function getbasebyid($id){
    $SheetsArray = getbases();
    $base = $SheetsArray[$id];
    return $base;
}
function getbases(){
    $Array = json_decode(file_get_contents("model/dataStorage/bases.json"), true);
           foreach ($Array as $p) {
       $SheetsArray[$p["id"]] = $p;
    }
   return $SheetsArray;
    }


?>

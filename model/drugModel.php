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
function getStupSheets()
{
    $novasheet = stupsheet_use_nova();
    $Sutupbatch = stupsheet_use_batch();
    $Array = json_decode(file_get_contents("model/dataStorage/stupsheets.json"), true);
    $drugs = getDrugs();
    $Batches = getBatches();

    foreach ($Array as $p) {
        $SheetsArray[$p["id"]] = $p;
        foreach ($drugs as $drug){
            $SheetsArray[$p["id"]]["drugs"][]=$drug["name"];


            foreach ($Sutupbatch as $bach){
                if ($bach["stupsheet_id"]==$p["id"]){
                    foreach ($Batches as $bob){
                        if($bach["batch_id"]==$bob["id"]){
                            $SheetsArray[$p["id"]]["drugs"][$drug["name"]]["batch"][]= $bob["number"];
                        }
                    }

                }
            }

        }




        foreach ($novasheet as $item) {
            if ($item["stupsheet_id"] == $p["id"]) {

                $nova = readnova($item["nova_id"]);
                $SheetsArray[$p["id"]]["nova"][] = $nova["number"];
            }

        }

    }
    var_dump($SheetsArray[3]["drugs"]);
    return $SheetsArray;

}

/**
 * Retourne un item précis, identifié par son id
 * ...
 */
function GetSheetbyWeek($week,$base){
    $Sheets = getStupSheets();
    foreach ($Sheets as $Sheet) {
        if ($Sheet["week"] == $week && $Sheet["base_id"]==$base ) {
            return $Sheet;
        }
    }

}
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
        unset($items[$item["id"]]["Fentanyl"]);
        unset($items[$item["id"]]["Morphine"]);
        unset($items[$item["id"]]["Temesta"]);
    }
    file_put_contents("model/dataStorage/stupsheets.json", json_encode($items));
}

/**
 * Modifie un item précis
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
        $BatchesArray[$p["id"]] = $p;
    }
    return $BatchesArray;
}

function readbatche($id)
{
    $BatchesArray = getBatches();
    $batche = $BatchesArray[$id];
    return $batche;
}

function updateBatches($items)
{
    file_put_contents("model/dataStorage/batches.json", json_encode($items));
}

function updateBatche($item)
{
    $batches = getBatches();
    $batches[$item["id"]] = $item;
    updateBatches($batches);
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
    $novas = json_decode(file_get_contents("model/dataStorage/novas.json"), true);
    foreach ($novas as $p) {
        $novaArray[$p["id"]] = $p;
    }
    return $novaArray;
}

function readnova($id)
{
    $novaArray = getnovas();
    $nova = $novaArray[$id];
    return $nova;
}


function updatenovas($items)
{
    file_put_contents("model/dataStorage/novas.json", json_encode($items));
}


function updateNova($item)
{
    $novas = getnovas();
    $novas[$item["id"]] = $item;
    updatenovas($novas);

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
    $novas = getnovas();
    unset($novas[$id]);
    updatenovas($novas);

}

function getDrugs()
{
    $batches = getBatches();
    $drugsArray = json_decode(file_get_contents("model/dataStorage/drugs.json"), true);
    foreach ($drugsArray as $p) {
        $drug[$p["id"]] = $p;
    }
    foreach ($drug as $item) {
        foreach ($batches as $batch) {
            if ($item["id"] == $batch["drug_id"]) {
                $drugArray[$item["id"]]["batches"][] = $batch["number"];
            }
        }
    }
    $drugs = $drugArray;
    foreach ($drugs as $item) {
        unset($drugs[$item["id"]]["batches"]);
    }
    updateDrugs($drugs);
    return $drugArray;
}

function readDrug($id)
{
    $drugsArray = getDrugs();
    $drugs = $drugsArray[$id];
    $batches = getBatches();
    foreach ($batches as $batch) {
        if ($id == $batch["drug_id"]) {
            $drugs["batches"][] = $batch["number"];
        }
    }
    return $drugs;
}

function updateDrugs($items)
{
    file_put_contents("model/dataStorage/Drugs.json", json_encode($items));
}


function updateDrug($item)
{

    $drugs = getDrugs();
    $drugs[$item["id"]]["name"] = $item["name"];
    foreach ($drugs as $iteme) {
        unset($drugs[$iteme["id"]]["batches"]);
    }
    updateDrugs($drugs);
}

function createDrug($item)
{
    $drugs = getDrugs();
    $idliste[] = 0;
    foreach ($drugs as $p) {
        $idliste[] = $p["id"];
    }
    foreach ($idliste as $id) {
        if ($id != $idliste) {
            $newid = $id;
        }
    }
    $item["id"] = $newid + 1;
    $drugs[] = $item;
    updateDrugs($drugs);
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
    $sbArray = json_decode(file_get_contents("model/dataStorage/stupsheet_use_batch.json"), true);
    foreach ($sbArray as $p) {
        $sbSheetsArray[$p["id"]] = $p;
    }
    return $sbSheetsArray;
}

function stupsheet_use_nova()
{
    $snArray = json_decode(file_get_contents("model/dataStorage/stupsheet_use_nova.json"), true);
    foreach ($snArray as $p) {
        $snSheetsArray[$p["id"]] = $p;
    }
    return $snSheetsArray;
}

?>

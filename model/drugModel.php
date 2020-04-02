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
function GetSheetbyWeek($week, $base)
{
    $Sheets = getStupSheets();
    foreach ($Sheets as $Sheet) {
        if ($Sheet["week"] == $week && $Sheet["base_id"] == $base) {
            return $Sheet;

        }
    }
}

function getStupSheets()
{
    $novasheets = stupsheet_use_nova(); // nova utilisé par sheet
    $Sutupbatchs = stupsheet_use_batch(); // batch utiilisé par les sheet
    $pharmachecks = getpharmachecks(); // donée pharmatice
    $drug = getDrugs();
    $stupsheets = json_decode(file_get_contents("model/dataStorage/stupsheets.json"), true);
    $restocks = getrestocks();
    foreach ($stupsheets as $stupsheet) {
        $SheetsArray[$stupsheet["id"]] = $stupsheet;
        foreach ($novasheets as $novasheet) {
            if ($novasheet["stupsheet_id"] == $stupsheet["id"]) {
                $nova = readnova($novasheet["nova_id"]);
                $SheetsArray[$stupsheet["id"]]["nova"][] = $nova["number"];
            }
        }


        foreach ($Sutupbatchs as $Sutupbatch) //met dans $sheetsArray les batchs en fonction de la semaine et de la drogue
        {
            if ($Sutupbatch["stupsheet_id"] == $stupsheet["id"]) {
                $batch = readbatche($Sutupbatch["batch_id"]);
                if ($batch["drug_id"] != null) {


                    $SheetsArray[$stupsheet["id"]]["Drug"][$batch["drug_id"]]["batch_number"]["number"]["number2"][] = $batch["number"];
                    $SheetsArray[$stupsheet["id"]]["Drug"][$batch["drug_id"]]["Drug_id"] = $batch["drug_id"];

                    foreach ($pharmachecks as $pharma) {
                        if ($pharma["batch_id"]==$batch["id"]&&$pharma["stupsheet_id"]==$stupsheet["id"])
                        {
                            $SheetsArray[$stupsheet["id"]]["Drug"][$batch["drug_id"]]["batch_number"]["number"][$batch["number"]][] = $pharma;
                        }

                    }
                    foreach ($restocks as $restock) {
                        if ($restock["batch_id"]==$batch["id"]&&$restock["nova_id"]==$nova["id"])
                        {
                            $SheetsArray[$stupsheet["id"]]["Drug"][$batch["drug_id"]]["batch_number"]["number"][$batch["number"]][] = $pharma;

                        }

                    }



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

function readpharmacheck($id)
{
    $SheetsArray = getpharmachecks();
    $base = $SheetsArray[$id];
    return $base;
}
function updatepharmachecks($items)
{
    file_put_contents("model/dataStorage/pharmachecks.json", json_encode($items));
}
function updatepharmacheck($item)
{

    $sheets = getDrugs();
    $sheets[$item["id"]]["name"] = $item["name"];
    foreach ($sheets as $iteme) {
        unset($sheets[$iteme["id"]]["batches"]);
    }
    updateDrugs($sheets);
}

function getpharmachecks()
{
    $Array = json_decode(file_get_contents("model/dataStorage/pharmachecks.json"), true);
    foreach ($Array as $p) {
        $SheetsArray[$p["id"]] = $p;
    }
    return $SheetsArray;
}

function getrestocks()
{
    $Array = json_decode(file_get_contents("model/dataStorage/restocks.json"), true);
    foreach ($Array as $p) {
        $SheetsArray[$p["id"]] = $p;
    }
    return $SheetsArray;
}

function getLogsBySheet($sheetid)
{
    $Array = json_decode(file_get_contents("model/dataStorage/logs.json"), true);
    foreach ($Array as $p) {
        $SheetsArray[$p["id"]] = $p;
    }
    foreach ($SheetsArray as $sheet) {
        if ($sheet["item_type"] == 1 && $sheet["item_id"] == $sheetid) {
            $user = readuser($sheet["author_id"]);
            $sheet["author"] = $user["initials"];
            $LogSheets[] = $sheet;
        }
    }
    return $LogSheets;
}

function readuser($id)
{
    $SheetsArray = getUsers();
    foreach ($SheetsArray as $arry) {
        if ($id == $arry["id"]) {
            return $arry;
        }
    }

}

?>

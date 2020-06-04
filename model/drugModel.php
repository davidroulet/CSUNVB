<?php
/**
 * Auteur: David Roulet / Fabien Masson
 * Date: Aril 2020
 **/

require 'model/database.php';

/**
 *  Retours les sheet en fonction de la semaine et de la base
 *
 */

function GetSheetbyWeek($week, $base)
{
    // TODO Coder cette fonction avec PDO
    var_dump($week);
    var_dump($base);
    return selectOne('SELECT * FROM stupsheets inner join bases 
                                on bases.id=base_id 
                                where week =:week 
                                AND base_id=:base', ['week' => $week, 'base' => $base]);
}

/**
 * Retours tout les fichiers des semaines avec les nova qui corresonde et les batch ainsi que les pharma check pour chaqun des batch
 */
/*
function getStupSheetsById() {
    return selectOne(select * from stupsheet)
}
*/

/**
 * Retourne la liste des stupsheets pour une base donnée. On ne retourne que le contenu de la table stupsheets
 */
function getListOStupSheets($base)
{
    // TODO Coder la fonction avec PDO
}

/**
 * Retourne la liste des novas 'utilisées' par cette feuille
 * Les données retournées sont dans un tableau indexé par id (i.e: [ 12 => [ "id" => 12, "value" => ...], 17 => [ "id" => 17, "value" => ...] ]
 * @param $stupSheet_id
 */
function getNovasForSheet($stupSheet_id)
{
    return selectOne("SELECT * FROM novas INNER JOIN stupsheet_use_nova ON nova_id = novas.id WHERE stupsheet_id =:stupsheetid", ["stupsheetid" => $stupSheet_id]);
}

/**
 * Retourne la liste des batches 'utilisés' par cette feuille
 * Les données retournées sont dans un tableau indexé par drug_id
 * [
 *     12 => [
 *         ["id" => 32, "number" => "345543", "drug_id" => 12],
 *         ["id" => 47, "number" => "766543", "drug_id" => 12],
 *         ["id" => 12, "number" => "989966", "drug_id" => 12]
 *     ],
 *     15 => [
 *         ["id" => 2, "number" => "34622", "durg_id" => 15],
 *         ["id" => 6, "number" => "46328", "durg_id" => 15]
 *     ]
 * ]
 *
 * @param $stupSheet_id
 */
function getBatchesForSheet($stupSheet_id)
{
    // TODO Coder la fonction avec PDO
}

function getStupSheets()
{
    $novasheets = getstupnova(); // nova utilisé par sheet
    $Sutupbatchs = getsutpbatch(); // batch utiilisé par les sheet
    $pharmachecks = getpharmachecks(); // donée pharmatice
    $drug = getDrugs();
    $stupsheets = json_decode(file_get_contents("model/dataStorage/stupsheets.json"), true);

    foreach ($stupsheets as $stupsheet) {  //prend une page de stupsheet
        $SheetsArray[$stupsheet["id"]] = $stupsheet;
        foreach ($novasheets as $novasheet) {
            if ($novasheet["stupsheet_id"] == $stupsheet["id"]) {
                $nova = readnova($novasheet["nova_id"]);
                $SheetsArray[$stupsheet["id"]]["nova"][] = $nova;
            }
        }
        foreach ($Sutupbatchs as $Sutupbatch) //met dans $sheetsArray les batchs en fonction de la semaine et de la drogue
        {
            if ($Sutupbatch["stupsheet_id"] == $stupsheet["id"]) {
                $batch = readbatche($Sutupbatch["batch_id"]);
                if ($batch["drug_id"] != null) {
                    $SheetsArray[$stupsheet["id"]]["Drug"][$batch["drug_id"]]["batch_number"]["number"]["number2"][] = $batch;
                    $SheetsArray[$stupsheet["id"]]["Drug"][$batch["drug_id"]]["Drug_id"] = $batch["drug_id"];
                    foreach ($pharmachecks as $pharma) {
                        if ($pharma["batch_id"]==$batch["id"]&&$pharma["stupsheet_id"]==$stupsheet["id"])
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
 * Obient un restock en fonction de la batch et de la nova
 */

function getRestocksbyBatchandNovas($batch_id,$nova_id)
{
    $restocks = getrestocks();
    foreach ($restocks as $restock)
    {
        if($batch_id == $restock["batch_id"] && $nova_id == $restock["nova_id"])
        {
            return $restock;
        }
    }
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
 * et enleve les elements en trop
 */
function updateSheets($items)
{
    foreach ($items as $item) {
        unset($items[$item["id"]]["Drug"]);
        unset($items[$item["id"]]["nova"]);
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
    $newid = max(array_keys($items))+1;
    $item["id"] = $newid ;
    $items[] = $item;
    updateSheets($items);
    return $item;
}

/**
 * Retours la liste de tout les items
 */
function getBatches()
{
    try {
        $dbh = getPDO();
        $query = 'SELECT * FROM csu.batches';
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetchAll(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}
/**
 * Retourne un item précis, identifié par son id
 * ...
 */
function readbatche($id)
{
    try {
        $dbh = getPDO();
        $query = "SELECT * FROM csu.batches WHERE batches.id ='$id'";
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetch(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}
/**
 * Sauve l'ensemble des items dans le fichier json
 * ...
 */
function updateBatches($items)
{
    file_put_contents("model/dataStorage/batches.json", json_encode($items));
}

/**
 * met un jours un item precis
 */
function updateBatche($item)
{
    $sheets = getBatches();
    $sheets[$item["id"]] = $item;
    updateBatches($sheets);
}

/**
 * Crée un item et l ajoute au fichier
 */
function createbatch($item)
{
    $items = getBatches();
    $newid = max(array_keys($items))+1;
    $item["id"] = $newid;
    $items[] = $item;
    updateBatches($items);
    return $item;
}

/**
 *Retours une batches avec son numero
 *
 */
function FindBatchewhitNumber($number)
{
    $batches = getBatches();
    foreach ($batches as $batch) {
        if ($batch["number"] == $number) {
            return $batch;
        }
    }
}

/**
 * Suprime un item en fonction de son id
 */
function destroybatch($id)
{
    $items = getBatches();

    unset($items[$id]);
    updateBatches($items);

}
/**
 * Retours la liste de tout les items
 */
function getnovas()
{
    try {
        $dbh = getPDO();
        $query = 'SELECT * FROM csu.novas';
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetchAll(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }


}
/**
 * Retourne un item précis, identifié par son id
 * ...
 */
function readnova($id)
{
    try {
        $dbh = getPDO();
        $query = "SELECT * FROM csu.novas WHERE novas.id ='$id'";
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetch(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

/**
 * Sauve l'ensemble des items dans le fichier json
 * ...
 */
function updatenovas($items)
{
    file_put_contents("model/dataStorage/novas.json", json_encode($items));
}

/**
 * Met un jours un item précis
 */
function updateNova($item)
{
    $sheets = getnovas();
    $sheets[$item["id"]] = $item;
    updatenovas($sheets);

}
/**
 * Crée un item et l ajoute au fichier
 */
function createnova($item)
{
    $items = getnovas();
    $newid = max(array_keys($items))+1;
    $item["id"] = $newid;
    $items[] = $item;
    updatenovas($items);
    return $item;
}

/**
 * supprime un item en fonction de son id
 *
 */
function destroyNova($id)
{
    $items = getnovas();
    unset($items[$id]);
    updatenovas($items);

}
/**
 * Retourne la liste des médicaments connus (table 'drugs')
 */
function getDrugs()
{
    require ".const.php";
    $dbh = getPDO();
    try {
        $query = 'SELECT * FROM drugs';
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetchAll(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        if ($debug) var_dump($queryResult);
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
    // TODO Coder cette fonction avec PDO
}

/**
 * Retourne un item précis, identifié par son id
 * ...
 */
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

/**
 * Sauve l'ensemble des items dans le fichier json
 * ...
 */
function updateDrugs($items)
{
    unset($items["id"]["batches"]);
    file_put_contents("model/dataStorage/Drugs.json", json_encode($items));
}

/**
 * Met un jours un item precis en fonction de l'id
 */
function updateDrug($item)
{

    $sheets = getDrugs();
    $sheets[$item["id"]]["name"] = $item["name"];
    foreach ($sheets as $iteme) {
        unset($sheets[$iteme["id"]]["batches"]);
    }
    updateDrugs($sheets);
}

/**
 * Crée un nouvelle items et l ajoute au fichier
 */
function createDrug($item)
{
    $items = getDrugs();
    $newid = max(array_keys($items))+1;
    $item["id"] = $newid ;
    $items[] = $item;
    updateDrugs($items);
    return $item;
}

/**
 * supprmier un item précis en fonction de son id
 */
function destroyDrug($id)
{
    $items = getDrugs();
    unset($items[$id]);
    updateDrugs($items);

}

/**
 * obients tout la liste des items
 */
function getsutpbatch()
{
    try {
        $dbh = getPDO();
        $query = 'SELECT * FROM csu.stupsheet_use_batch';
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetchAll(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }

}
/**
 * obients tout la liste des items
 */
function getstupnova()
{
    try {
        $dbh = getPDO();
        $query = 'SELECT * FROM csu.stupsheet_use_nova';
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetchAll(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}
/**
 * obients un items precis en fonction de son batch,date,stupsheet_id
 */
function getpharmacheckbydateandbybatch($date,$batch,$stupsheet_id){
    $Array = getpharmachecks();
    foreach ($Array as $check) {
        if ($check["date"] == $date && $check["batch_id"] == $batch&&$check["stupsheet_id"]==$stupsheet_id) {
            return $check;
        }
    }
    return false;
}
/**
 * Retourne un item précis, identifié par son id
 * ...
 */
function readpharmacheck($id)
{
    $SheetsArray = getpharmachecks();
    if(isset( $SheetsArray[$id])){
    $base = $SheetsArray[$id];
    return $base;
    }else{
        return false;
    }
}
/**
 * Crée un enrgistrement d un item precis
 * ...
 */
function createpharmacheck($item)
{
    $items = getpharmachecks();
    $newid = max(array_keys($items))+1;
    $item["id"] = $newid;
    $items[] = $item;
    updatepharmachecks($items);
    return $item;
}
/**
 * Sauve l'ensemble des items dans le fichier json
 * ...
 */
function updatepharmachecks($items)
{
    file_put_contents("model/dataStorage/pharmachecks.json", json_encode($items));
}
/**
 * Savuase un item precis
 */
function updatepharmacheck($item)
{

    $sheets = getpharmachecks();
    $sheets[$item["id"]]["id"] = $item["id"];
    $sheets[$item["id"]]["date"] = $item["date"];
    $sheets[$item["id"]]["start"] = $item["start"];
    $sheets[$item["id"]]["end"] = $item["end"];
    $sheets[$item["id"]]["batch_id"] = $item["batch_id"];
    $sheets[$item["id"]]["user_id"] = $item["user_id"];
    $sheets[$item["id"]]["stupsheet_id"] = $item["stupsheet_id"];
    updatepharmachecks($sheets);
}
/**
 * obients tout la liste des items
 */
function getpharmachecks()
{
    try {
        $dbh = getPDO();
        $query = 'SELECT * FROM csu.pharmachecks';
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetchAll(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}
/**
 * obients tout la liste des items
 */
function getrestocks()
{
    try {
        $dbh = getPDO();
        $query = 'SELECT * FROM csu.restocks';
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetchAll(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}
/**
 * obients tout la liste des items en fonction de l'id de la stupsheet
 */
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
/**
 * Retourne un item précis, identifié par son id
 * ...
 */
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

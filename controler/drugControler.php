<?php
/**
 * Auteur: David Roulet / Fabien Masson
 * Date: Aril 2020
 **/

require_once 'model/drugModel.php';

function drugHomePage() //Affiche la page de selection de la semaine
{
    $bases = getbases();
    $liste = getStupSheets();
    require_once 'view/Drug/drugHome.php';
}

function drugSiteTable($semaine)
{ // Affichage de la page finale

    $jourDebutSemaine = getdate2($semaine); // récupère les jours de la semaine en fonction de la date sélectionnée
    $stupSheet = GetSheetbyWeek($semaine, $_SESSION["Selectsite"]); // la feuille de stupéfiants à afficher
    $novas = getNovasForSheet($stupSheet["id"]); // Obtient la liste des ambulances utilisées par cette feuille
    $drugs = getDrugs(); // Obtient la liste des drugs
    $BatchesForSheet = getBatchesForSheet($stupSheet["id"]); // Obtient la liste des batches utilisées par cette feuille

    foreach ($BatchesForSheet as $p) {
        $batches[$p["drug_id"]] = $p;
    }

    /*$Array = json_decode(file_get_contents("model/dataStorage/batches.json"), true);
    foreach ($Array as $p) {
        $SheetsArray[$p["id"]] = $p;
    }*/


    $listofbaseid = getListOfStupSheets($_SESSION["Selectsite"]);


    $date = strtotime($jourDebutSemaine);
    $site = getbasebyid($_SESSION["Selectsite"])["name"];
    $jours = array("Lundi", "Mardi", "Mercredi", "Jeudi", "vendredi", "samedi", "dimanche");
    require_once 'view/Drug/drugSiteTable.php';
}

function getdate2($semaine) //Donne les jours de la semaine Selectionée
{
    $anneeChoix = 2000 + substr($semaine, 0, 2);

    $semChoix = substr($semaine, 2, 2);

    $timeStampPremierJanvier = strtotime($anneeChoix . '-01-01');
    $jourPremierJanvier = date('w', $timeStampPremierJanvier);

//-- recherche du N° de semaine du 1er janvier -------------------
    $numSemainePremierJanvier = date('W', $timeStampPremierJanvier);

//-- nombre à ajouter en fonction du numéro précédent ------------
    $decallage = ($numSemainePremierJanvier == 1) ? $semChoix - 1 : $semChoix;
//-- timestamp du jour dans la semaine recherchée ----------------
    $timeStampDate = strtotime('+' . $decallage . ' weeks', $timeStampPremierJanvier);
//-- recherche du lundi de la semaine en fonction de la ligne précédente ---------
    $jourDebutSemaine = ($jourPremierJanvier == 1) ? date('d-m-Y', $timeStampDate) : date('d-m-Y', strtotime('last monday', $timeStampDate));
    return $jourDebutSemaine;
}

function LogStup($stupsheet)
{ // affiche la page des logs avec les bonnes données
    $LogSheets = getLogsBySheet($stupsheet);
    require_once 'view/Drug/LogStup.php';
}
function reopenStup($id)
{

    reopenStupPage($id);
    require_once 'view/home.php';
}function closedStup($id)
{
    closeStup($id);
    require_once 'view/home.php';
}

function pharmacheck($sheet, $date, $batch)
{ // Affiche le formulaire des pharmacheck et donne tout les ^donnée nessaiare
    $batch = readbatche($batch);
    $sheet = readSheet($sheet);
    $druguse = readDrug($batch["drug_id"]);
    $base = getbasebyid($sheet["base_id"]);
    $user = $_SESSION["username"];
    $pharmacheck = getpharmacheckbydateandbybatch($date, $batch["id"], $sheet["id"]);
    $date = strtotime("$date");
    $datefrom = date("Y-m-d", $date);
    $date = date("j F Y", $date);
    require_once 'view/Drug/pharmacheck.php';
}

function PharmaUpdate($batchtoupdate, $PharmaUpdateuser, $Pharmastart, $Pharmaend, $sheetid, $date)
{ // Met a jours é'enrigstrem des pharmacheck et vas sois mettre a jours sois crée un nouvelle enrgstment
    $pharmacheck = getpharmacheckbydateandbybatch($date, $batchtoupdate, $sheetid);

    if ($pharmacheck == false) {
        $itemnew["date"] = $date;
        $itemnew["start"] = $Pharmastart;
        $itemnew["end"] = $Pharmaend;
        $itemnew["stupsheet_id"] = $sheetid;
        $itemnew["user_id"] = $PharmaUpdateuser;
        $itemnew["batch_id"] = $batchtoupdate;
        createpharmacheck($itemnew);
    } else {
        $itemtoupdate = readpharmacheck($pharmacheck["id"]);
        $itemtoupdate["date"] = $date;
        $itemtoupdate["start"] = $Pharmastart;
        $itemtoupdate["end"] = $Pharmaend;
        $itemtoupdate["stupsheet_id"] = $sheetid;
        $itemtoupdate["user_id"] = $PharmaUpdateuser;
        $itemtoupdate["batch_id"] = $batchtoupdate;
        updatepharmacheck($itemtoupdate);
    }
    $sheet = readSheet($sheetid);
    drugSiteTable($sheet["week"]);
}

function closedStupFromTable($baseId, $week)
{
    closeStupFromTable($baseId, $week);
    require_once 'view/home.php';
}

function createSheetStup($base_id) {
    // récupérer la valeur de $item puis transférer les valeurs

    $lastWeek = readLastWeekStup($base_id);
    createStupsheet($base_id, $lastWeek['last_week']);
    unset($_POST['site']);
    unset($_POST['base']);
    require_once 'view/home.php';
}

function activateStup($id)
{
    activateStupPage($id);
    require_once 'view/home.php';
}
?>

<?php
// David Roulet - Fabien Masson
// Projet CSU-NVB A1
// Drugs Section
require_once 'model/drugModel.php';

function drugHomePage() //Affiche la page de selection de la semaine
{
    $year = 20;
    $bases=getbases();
    $liste = getStupSheets();
    require_once 'view/Drug/drugHome.php';
}
function drugSiteTable($semaine){ // Affiage de la page Finale

    $jourDebutSemaine = getdate2($semaine); // recupere les jours de la semiane en fonction de la date selectioné
    $novas = getnovas(); // Obient la liste des ambulance
    $drugs = getDrugs(); // Obient la list des Drugs
//$stupSheet=readSheet(2);
    $stupSheet = GetSheetbyWeek($semaine, $_SESSION["Selectsite"]);
    $date = strtotime($jourDebutSemaine);
    $site = getbasebyid($_SESSION["Selectsite"])["name"];
    $jours = array("Lundi", "Mardi", "Mercredi", "Jeudi", "vendredi", "samedi", "dimanche");
    require_once 'view/Drug/drugSiteTable.php';
}
function getdate2($semaine) //Donne les jours de la semaine Selectionée
{
    $anneeChoix=2000+substr ($semaine,0,2);

    $semChoix=substr ($semaine,2,2);

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
function LogStup($stupsheet){
    $LogSheets=getLogsBySheet($stupsheet);
    require_once 'view/Drug/LogStup.php';
}
function pharmacheck($sheet,$date,$batch){
$batch=readbatche($batch);
$sheet=readSheet($sheet);
$druguse=readDrug($batch["drug_id"]);
$base=getbasebyid($sheet["base_id"]);
$user=$_SESSION["username"];
    $pharmacheck=getpharmacheckbydateandbybatch($date,$batch["id"]);
    require_once 'view/Drug/pharmacheck.php';
}
function PharmaUpdate($batchtoupdate,$PharmaUpdateuser,$Pharmastart,$Pharmaend,$sheetid,$date){
$pharmacheck=getpharmacheckbydateandbybatch($date,$batchtoupdate);
if ($pharmacheck==false){
    $itemnew["date"]=$date;
    $itemnew["start"]=$Pharmastart;
    $itemnew["end"]=$Pharmaend;
    $itemnew["stupsheet_id"]=$sheetid;
    $itemnew["user_id"]=$PharmaUpdateuser;
    $itemnew["batch_id"]=$batchtoupdate;
    createpharmacheck($itemnew);
}else{
    $itemtoupdate=readpharmacheck($pharmacheck["id"]);
    $itemtoupdate["date"]=$date;
    $itemtoupdate["start"]=$Pharmastart;
    $itemtoupdate["end"]=$Pharmaend;
    $itemtoupdate["stupsheet_id"]=$sheetid;
    $itemtoupdate["user_id"]=$PharmaUpdateuser;
    $itemtoupdate["batch_id"]=$batchtoupdate;
    updatepharmacheck($itemtoupdate);
}
$Site=$_SESSION["Site"];
    drugHomePage($Site);
}
?>

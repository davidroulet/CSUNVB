<?php
// David Roulet - Fabien Masson
// Projet CSU-NVB A1
// Drugs Section
require_once 'model/drugModel.php';

function drugHomePage($Site) //Affiche la page de selection de la semaine
{
    require_once 'view/Drug/drugHome.php';
}
function drugSiteTable($semaine,$Site){ // Affiage de la page Finale
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
    require_once 'view/Drug/pharmacheck.php';
}
function PharmaUpdate($batchtoupdate,$PharmaUpdateuser,$Pharmastart,$Pharmaend,$sheetid){
var_dump($batchtoupdate);
var_dump($Pharmaend);
var_dump($Pharmastart);
var_dump($PharmaUpdateuser);
var_dump($sheetid);
die();
}
?>

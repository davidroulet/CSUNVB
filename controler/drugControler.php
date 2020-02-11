<?php
require_once 'model/drugModel.php';
Echo "Teste----------------------------------------------------------------------------";
$durgs=readDrugItem(12); //Item Precis
var_dump($durgs["morphinesamples"]);

var_dump(getDrugItems());// Tout

//Cahgne valeur
$durgs=readDrugItem(12);
var_dump($durgs["vehicles"]);
$durgs["vehicles"][2]=23;
updateDrugItem($durgs);
echo "Change After";

$durgs=readDrugItem(12);
var_dump($durgs["vehicles"]);

//restor Orgini valeur
$durgs=readDrugItem(12);
$durgs["vehicles"][2]=36;
updateDrugItem($durgs);

//new
echo "New-----------------";
var_dump(getDrugItems());// Tout
$dataC=["info"=>"Bidon","info2"=> "Bidon2"];
createDrugItem($dataC);
var_dump(getDrugItems());// Tout
echo "del---------------------------";
var_dump(getDrugItems());// Tout

destroyDrugItem(0);

var_dump(getDrugItems());// Tout

Echo "Teste---------------------------------------------------------------------";
function drugHomePage()
{
    require_once 'view/Drug/drugHome.php';
}
function drugSiteTable(){
    require_once 'view/Drug/drugSiteTable.php';
}
?>

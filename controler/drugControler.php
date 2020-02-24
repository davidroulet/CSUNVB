<?php
require_once 'model/drugModel.php';

function drugHomePage()
{
    require_once 'view/Drug/drugHome.php';
}
function drugSiteTable($Site){
    require_once 'view/Drug/drugSiteTable.php';
}
function Teste(){
    Echo "Teste----------------------------------------------------------------------------";
    var_dump(getStupSheets());// Tout
    echo "ITEM PRECI-----------------";
    var_dump(readSheet(2));//PRecis
    echo "Update Sheet---------------------------";

    $item = readSheet(2);
    echo "Before";
    var_dump(readSheet(2));
    $item["state"]="open";

updateSheet($item); // Update
    echo "After";
    var_dump(readSheet(2));

    $item["state"]="closed"; // restor
    updateSheet($item);//restor

   echo "New-----------------";
    var_dump(getStupSheets());// Tout
    $dataC=["week"=>"3002","state"=> "open","base_id"=>3];
    createSheet($dataC);
    var_dump(getStupSheets());// Tout



    //echo "del Sheet---------------------------";
    //echo "Before";
    //$item2 = readSheet(2);
    //var_dump(readSheet(2));
    //destroySheet(2);
    //echo "After";
    //var_dump(readSheet(2));


}
?>

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
    Echo "Teste----------------------------------------------------------------------------<br>";
    echo "ALL Info?     ";
    if (getStupSheets()!=null){
        echo "OK<br>";
    }else{
        echo "No";
    }

        $data=readSheet(2);
            echo "PRECI Info?     ";
    if ($data["week"]==2009){
        echo "OK<br>";
    }else{
        echo "No";
    }


    echo "Update Info?     ";
    $data["state"]="open";
    updateSheet($data);
    $data2=readSheet("2");
    if ($data2["state"]=="open"){
        echo "OK<br>";
    }else{
        echo "No";
    }
    $data["state"]="closed";
    updateSheet($data);



    echo "New Info?     ";
    $dataC=["week"=>"3002","state"=> "open","base_id"=>3];
    $idit=createSheet($dataC);
    $data3=readSheet($idit["id"]);
    if ($data3["week"]=="3002"){
        echo "OK<br>";
    }else{
        echo "No";
    }


    echo "DEL Info?     ";
    $delitem=readSheet($idit["id"]);
    destroySheet($delitem["id"]);
    if (readSheet($idit["id"])==null){
        echo "OK<br>";
    }else{
        echo "No";
    }

}
?>

<?php
require_once 'model/drugModel.php';

function drugHomePage($Site)
{
    require_once 'view/Drug/drugHome.php';
}
function drugSiteTable($semaine,$Site){
    require_once 'view/Drug/drugSiteTable.php';
}
function drugbase(){
    require_once 'view/Drug/base.php';
}
?>

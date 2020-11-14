<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Mars 2020
 **/

require_once 'model/guardSheetModel.php';
require_once 'model/adminModel.php';


function reopenShift($id)
{
    reopenShiftPage($id);
    require_once 'view/home.php';
}
function closeShift($id)
{
    closeShiftPage($id);
    require_once 'view/home.php';
}

function listShiftEnd($base_id)
{
    $site = getbasebyid($_SESSION["Selectsite"])["name"];
    $TitlesLines = getGuardLines();
    $Titles = getSectionsTitles();
    //$guardsheets = getGuardsheets();
    $admin = getUserAdmin($_SESSION["username"]["admin"]);
    $Bases = getbases();
    $list = Guardsheet();
    $guardsheets = getGuardsheetForBase($base_id);

    require_once 'view/viewsShiftEnd/shiftEndHome.php';
}
?>

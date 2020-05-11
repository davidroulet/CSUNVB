<?php
/**
 * File : json2db.php
 * Author : X. Carrel
 * Created : 2020-04-30
 * Modified last :
 **/

function getPDO()
{
    require ".const.php";
//  return new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $user, $pass);
    $dsn = "mysql:host=localhost:3306;dbname=csu" ;
    $pass='Pa$$w0rd';
    return new PDO($dsn, CSU, $pass);
}

/**
 * Insère toutes les données contenues dans le tableau $batch dans la db au moyen de la requête $query
 * @param $query
 * @param $batch
 */
function insertBatch($query, $batch)
{
    require ".const.php";
    $statement = getPDO()->prepare($query);//prepare query once
    foreach ($batch as $val) // execute it many times
    {
        $statement->execute($val);
    }
}

$basesData = json_decode(file_get_contents('model/dataStorage/bases.json'), 1);
$batchesData = json_decode(file_get_contents('model/dataStorage\batches.json'), 1);
$crewsData = json_decode(file_get_contents('model/dataStorage\crews.json'), 1);
$drugsData = json_decode(file_get_contents('model/dataStorage\drugs.json'), 1);
$guard_use_novaData = json_decode(file_get_contents('model/dataStorage\guard_use_nova.json'), 1);
$guardcontentsData = json_decode(file_get_contents('model/dataStorage\guardcontents.json'), 1);
$guardlinesData = json_decode(file_get_contents('model/dataStorage\guardlines.json'), 1);
$guardsectionsData = json_decode(file_get_contents('model/dataStorage\guardsections.json'), 1);
$guardsheetsData = json_decode(file_get_contents('model/dataStorage\guardsheets.json'), 1);
//$logsData = json_decode(file_get_contents('model/dataStorage\logs.json'), 1);
$novachecksData = json_decode(file_get_contents('model/dataStorage\novachecks.json'), 1);
$novasData = json_decode(file_get_contents('model/dataStorage\novas.json'), 1);
$pharmachecksData = json_decode(file_get_contents('model/dataStorage\pharmachecks.json'), 1);
$restocksData = json_decode(file_get_contents('model/dataStorage\restocks.json'), 1);
$stupsheet_use_batchData = json_decode(file_get_contents('model/dataStorage\stupsheet_use_batch.json'), 1);
$stupsheet_use_novaData = json_decode(file_get_contents('model/dataStorage\stupsheet_use_nova.json'), 1);
$stupsheetsData = json_decode(file_get_contents('model/dataStorage\stupsheets.json'), 1);
$todosheetsData = json_decode(file_get_contents('model/dataStorage\todosheets.json'), 1);
$todothingsData = json_decode(file_get_contents('model/dataStorage\todothings.json'), 1);
$usersData = json_decode(file_get_contents('model/dataStorage\users.json'), 1);

// Insérer les données dans la db
/*foreach ($logsData as $key => $val) {unset ($logsData[$key]['id']);}
insertBatch("INSERT INTO logs (timestamp, author_id, item_type, item_id, text) VALUES (:timestamp, :author_id, :item_type, :item_id, :text);", $logsData);
*/
foreach ($basesData as $key => $val) {unset ($basesData[$key]['id']);}
insertBatch("INSERT INTO bases (name) VALUES (:name);", $basesData);
foreach ($usersData as $key => $val) {unset ($usersData[$key]['id']); unset($usersData[$key]['base_id']);}
insertBatch("INSERT INTO users (initials, lastname, password, firstname, admin, firstconnect) VALUES (:initials, :lastname, :password, :firstname, :admin, :firstconnect);", $usersData);
foreach ($drugsData as $key => $val) {unset ($drugsData[$key]['id']);}
insertBatch("INSERT INTO drugs (name) VALUES (:name);", $drugsData);
foreach ($novasData as $key => $val) {unset ($novasData[$key]['id']);}
insertBatch("INSERT INTO novas (number) VALUES (:number);", $novasData);
foreach ($batchesData as $key => $val) {unset ($batchesData[$key]['id']);}
insertBatch("INSERT INTO batches (state, number, drug_id) VALUES (:state, :number, :drug_id);", $batchesData);
foreach ($stupsheetsData as $key => $val) {unset ($stupsheetsData[$key]['id']);}
insertBatch("INSERT INTO stupsheets (week, state, base_id) VALUES (:week, :state, :base_id);", $stupsheetsData);
foreach ($stupsheet_use_novaData as $key => $val) {unset ($stupsheet_use_novaData[$key]['id']);}
insertBatch("INSERT INTO stupsheet_use_nova (nova_id, stupsheet_id) VALUES (:nova_id, :stupsheet_id);", $stupsheet_use_novaData);
foreach ($restocksData as $key => $val) {unset ($restocksData[$key]['id']);}
insertBatch("INSERT INTO restocks (date, quantity, user_id, nova_id, batch_id) VALUES (:timestamp, :quantity, :user_id, :nova_id, :batch_id);", $restocksData);
foreach ($stupsheet_use_batchData as $key => $val) {unset ($stupsheet_use_batchData[$key]['id']);}
insertBatch("INSERT INTO stupsheet_use_batch (batch_id, stupsheet_id) VALUES (:batch_id, :stupsheet_id);", $stupsheet_use_batchData);
foreach ($novachecksData as $key => $val) {unset ($novachecksData[$key]['id']);}
insertBatch("INSERT INTO novachecks (date, start, end, nova_id, drug_id, user_id, stupsheet_id) VALUES (:date, :start, :end, :nova_id, :drug_id, :user_id, :stupsheet_id);", $novachecksData);
foreach ($pharmachecksData as $key => $val) {unset ($pharmachecksData[$key]['id']);}
insertBatch("INSERT INTO pharmachecks (date, start, end, batch_id, user_id, stupsheet_id) VALUES (:date, :start, :end, :batch_id, :user_id, :stupsheet_id);", $pharmachecksData);
foreach ($todothingsData as $key => $val) {unset ($todothingsData[$key]['id']); unset($todothingsData[$key]['days']);}
insertBatch("INSERT INTO todothings (type, daything, description, display_order) VALUES (:type, :daything, :description, :display_order);", $todothingsData);
foreach ($todosheetsData as $key => $val) {unset ($todosheetsData[$key]['id']);}
insertBatch("INSERT INTO todosheets (week, state, base_id) VALUES (:week, :state, :base_id);", $todosheetsData);
foreach ($guardsheetsData as $key => $val) {unset ($guardsheetsData[$key]['id']);}
insertBatch("INSERT INTO guardsheets (date, state, base_id) VALUES (:date, :state, :base_id);", $guardsheetsData);
foreach ($guard_use_novaData as $key => $val) {unset ($guard_use_novaData[$key]['id']);}
insertBatch("INSERT INTO guard_use_nova (day, nova_id, guardsheet_id) VALUES (:day, :nova_id, :guardsheet_id);", $guard_use_novaData);
foreach ($crewsData as $key => $val) {unset ($crewsData[$key]['id']);}
insertBatch("INSERT INTO crews (day, boss, user_id, guardsheet_id) VALUES (:day, :boss, :user_id, :guardsheet_id);", $crewsData);
foreach ($guardsectionsData as $key => $val) {unset ($guardsectionsData[$key]['id']);}
insertBatch("INSERT INTO guardsections (title) VALUES (:title);", $guardsectionsData);
foreach ($guardlinesData as $key => $val) {unset ($guardlinesData[$key]['id']);}
insertBatch("INSERT INTO guardlines (text, guard_sections_id) VALUES (:text, :guard_sections_id);", $guardlinesData);
foreach ($guardcontentsData as $key => $val) {unset ($guardcontentsData[$key]['id']);}
insertBatch("INSERT INTO guardcontents (comment, guard_line_id, guardsheet_id, day_check, day_check_user_id, night_check, night_check_user_id) VALUES (:comment, :guard_line_id, :guardsheet_id, :day_check, :day_check_user_id, :night_check, :night_check_user_id);", $guardcontentsData);
?>
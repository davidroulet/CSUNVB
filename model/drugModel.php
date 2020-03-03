<?php
/**
 * Ce cartouche vaudra quelques points en plus au groupe qui osera le laisser là tel quel ...
 * Auteur: D . Roulet
 * Date: A quoi bon la noté ca change tout les jours
 **/

/**
 * Retourne tous les items dans un tableau indexé de tableaux associatifs
 * Des points seront également retirés au groupe qui osera laisser une des fonctions de ce fichier telle quelle
 * sans l'adapter au niveau de son nom et de son code pour qu'elle dise plus précisément de quelles données elle traite
 */
function getStupSheets()
{
    $Array= json_decode(file_get_contents("model/dataStorage/stupsheets.json"),true);
    foreach ($Array as $p){
        $SheetsArray[$p["id"]]=$p;
}
    return $SheetsArray;
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
 * ...
 */
function updateSheets($items)
{
    file_put_contents("model/dataStorage/stupsheets.json",json_encode($items));
}

/**
 * Modifie un item précis
 * Le paramètre $item est un item complet (donc un tableau associatif)
 * ...
 */
function updateSheet($item)
{
    $sheets=getStupSheets();
    foreach ($sheets as $sheet) {
        if($sheet["id"]==$item["id"]){
            $id=$sheet["id"];
            $sheets[$id]=$item;
            updateSheets($sheets);
        }
    }

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
    $idliste[]=0;
    foreach ($items as $p){
        $idliste[]=$p["id"];
    }
    foreach ($idliste as $id){
        if ($id!=$idliste){
            $newid=$id;
        }
    }
    $item["id"]=$newid+1;
    $items[]=$item;
    updateSheets($items);
    return $item;
}

function getBatches()
{
    $Array= json_decode(file_get_contents("model/dataStorage/batches.json"),true);
    foreach ($Array as $p){
        $SheetsArray[$p["id"]]=$p;
    }
    return $SheetsArray;
}
function readbatche($id)
{
    $SheetsArray = getBatches();
    $Sheet = $SheetsArray[$id];
    return $Sheet;
}

function updateBatches($items)
{
    file_put_contents("model/dataStorage/batches.json",json_encode($items));
}
function updateBatche($item)
{
    $batchs=getBatches();
    foreach ($batchs as $batch) {
        if($batch["id"]==$item["id"]){
            $id=$batch["id"];
            $batchs[$id]=$item;
            updateBatches($batchs);
        }
    }

}
function createbatch($item)
{
    $items = getBatches();
    $idliste[]=0;
    foreach ($items as $p){
        $idliste[]=$p["id"];
    }
    foreach ($idliste as $id){
        if ($id!=$idliste){
            $newid=$id;
        }
    }
    $item["id"]=$newid+1;
    $items[]=$item;
    updateBatches($items);
    return $item;
}


function destroybatch($id)
{
    $items = getBatches();

    unset($items[$id]);
    updateBatches($items);

}
function getnovas()
{
    $Array= json_decode(file_get_contents("model/dataStorage/novas.json"),true);
    foreach ($Array as $p){
        $SheetsArray[$p["id"]]=$p;
    }
    return $SheetsArray;
}
function readnova($id)
{
    $SheetsArray = getnovas();
    $Sheet = $SheetsArray[$id];
    return $Sheet;
}


function updatenovas($items)
{
    file_put_contents("model/dataStorage/novas.json",json_encode($items));
}



function updateNova($item)
{
    $batchs=getnovas();
    foreach ($batchs as $batch) {
        if($batch["id"]==$item["id"]){
            $id=$batch["id"];
            $batchs[$id]=$item;
            updatenovas($batchs);
        }
    }

}

function createnova($item)
{
    $items = getnovas();
    $idliste[]=0;
    foreach ($items as $p){
        $idliste[]=$p["id"];
    }
    foreach ($idliste as $id){
        if ($id!=$idliste){
            $newid=$id;
        }
    }
    $item["id"]=$newid+1;
    $items[]=$item;
    updatenovas($items);
    return $item;
}
function destroyNova($id)
{
    $items = getnovas();
    unset($items[$id]);
    updatenovas($items);

}
function getDrugs()
{
    $Array= json_decode(file_get_contents("model/dataStorage/Drugs.json"),true);
    foreach ($Array as $p){
        $SheetsArray[$p["id"]]=$p;
    }
    
    return $SheetsArray;
}
function readDrug($id)
{
    $SheetsArray = getDrugs();
    $Sheet = $SheetsArray[$id];
    return $Sheet;
}


function updateDrugs($items)
{
    file_put_contents("model/dataStorage/Drugs.json",json_encode($items));
}



function updateDrug($item)
{
    $batchs=getDrugs();
    foreach ($batchs as $batch) {
        if($batch["id"]==$item["id"]){
            $id=$batch["id"];
            $batchs[$id]=$item;
            updateDrugs($batchs);
        }
    }

}
function createDrug($item)
{
    $items = getDrugs();
    $idliste[]=0;
    foreach ($items as $p){
       $idliste[]=$p["id"];
   }
  foreach ($idliste as $id){
      if ($id!=$idliste){
           $newid=$id;
      }
   }
  $item["id"]=$newid+1;
  $items[]=$item;
    updateDrugs($items);
   return $item;
}
function destroyDrug($id)
{
    $items = getDrugs();
   unset($items[$id]);
    updateDrugs($items);

}
?>

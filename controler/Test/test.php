<?php
/**
 * Cartouch
 * Nom du fichier test.php
 * Createur David.ROULET
 * Date 02.03.2020
 * IDE PhpStorm
 * Nom du Projet CSUNVB
 */

var_dump(getDrugs());
    Echo "Sheet Teste----------------------------------------------------------------------------<br>";
    echo "ALL Info?     ";
    if (getStupSheets() != null) {
        echo "OK<br>";
    } else {
        echo "No";
    }
    $data = readSheet(2);
    echo "PRECI Info?     ";
    if ($data["week"] == 2009) {
        echo "OK<br>";
    } else {
        echo "No";
    }

    echo "Update Info?     ";
    $data["state"] = "open";
    updateSheet($data);
    $data2 = readSheet("2");
    if ($data2["state"] == "open") {
        echo "OK<br>";
    } else {
        echo "No";
    }
    $data["state"] = "closed";
    updateSheet($data);


    echo "New Info?     ";
    $dataC = ["week" => "3002", "state" => "open", "base_id" => 3];
    $idit = createSheet($dataC);
    $data3 = readSheet($idit["id"]);
    if ($data3["week"] == "3002") {
        echo "OK<br>";
    } else {
        echo "No";
    }


    echo "DEL Info?     ";
    $delitem = readSheet($idit["id"]);
    destroySheet($delitem["id"]);
    if (readSheet($idit["id"]) == null) {
        echo "OK<br>";
    } else {
        echo "No";
    }
    Echo "Barche Teste----------------------------------------------------------------------------<br>";
    echo "ALL Info?     ";
    if (getBatches() != null) {
        echo "OK<br>";
    } else {
        echo "No";
    }
    $data = readbatche(2);
    echo "PRECI Info?     ";
    if ($data["number"] == 123123) {
        echo "OK<br>";
    } else {
        echo "No";
    }


    echo "Update Info?     ";
    $data = readbatche(2);
    $data["state"] = "new";
    updateBatche($data);
    $data2 = readbatche("2");
    if ($data2["state"] == "new") {
        echo "OK<br>";
    } else {
        echo "No";
    }
    $data["state"] = "used";
    updateBatche($data);

    echo "New Info?     ";
    $dataC = ["number" => "123090", "state" => "used", "base_id" => 3];
    $idit = createbatch($dataC);
    $data3 = readbatche($idit["id"]);
    if ($data3["number"] == "123090") {
        echo "OK<br>";
    } else {
        echo "No";
    }

    echo "DEL Info?     ";
    $delitem = readbatche($idit["id"]);
    destroybatch($delitem["id"]);
    if (readbatche($idit["id"]) == null) {
        echo "OK<br>";
    } else {
        echo "No";
    }


    Echo "Nova Teste----------------------------------------------------------------------------<br>";

    echo "ALL Info?     ";
    if (getnovas() != null) {
        echo "OK<br>";
    } else {
        echo "No";
    }
    $data = readnova(2);
    echo "PRECI Info?     ";

    if ($data["number"] == 32) {
        echo "OK<br>";
    } else {
        echo "No";
    }


    echo "Update Info?     ";
    $data = readnova(2);
    $data["number"] = 4;
    updateNova($data);
    $data2 = readnova("2");
    if ($data2["number"] == "4") {
        echo "OK<br>";
    } else {
        echo "No";
    }
    $data["number"] = "32";
    updateNova($data);

echo "New Info?     ";
$dataC = ["number" => "43"];
$idit = createnova($dataC);
$data3 = readnova($idit["id"]);
if ($data3["number"] == "43") {
    echo "OK<br>";
} else {
    echo "No";
}

echo "DEL Info?     ";
$delitem = readnova($idit["id"]);
destroyNova($delitem["id"]);
if (readnova($idit["id"]) == null) {
    echo "OK<br>";
} else {
    echo "No";
}


Echo "Drugs Teste----------------------------------------------------------------------------<br>";

echo "ALL Info?     ";
if (getDrugs() != null) {
    echo "OK<br>";
} else {
    echo "No";
}
$data = readDrug(2);
echo "PRECI Info?     ";

if ($data["name"] == "Fentanyl") {
    echo "OK<br>";
} else {
    echo "No";
}


echo "Update Info?     ";
$data = readDrug(2);
$data["name"] = "TesteDrug";
updateDrug($data);
$data2 = readDrug("2");
if ($data2["name"] == "TesteDrug") {
    echo "OK<br>";
} else {
    echo "No";
}
$data["name"] = "Fentanyl";
updateDrug($data);

echo "New Info?     ";
$dataC = ["name" => "Sucre"];
$idit = createDrug($dataC);
$data3 = readDrug($idit["id"]);
if ($data3["name"] == "Sucre") {
    echo "OK<br>";
} else {
    echo "No";
}

echo "DEL Info?     ";
$delitem = readDrug($idit["id"]);
destroyDrug($delitem["id"]);
if (readDrug($idit["id"]) == null) {
    echo "OK<br>";
} else {
    echo "No";
}
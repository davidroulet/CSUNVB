/**
 * Le fichier shiftEnd.js contient les fonctionnalités javascript qui ne sont utilisées que pour la remise de garde
 *
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Mars 2020
 **/
document.addEventListener("DOMContentLoaded", evenement);

function fn_Chk_Rad_J() {
    chk_Rad_J.checked = 1 - chk_Rad_J.checked
    if (chk_Rad_J.checked == true) {//vérifie l'état de la case pouis change la couleur de la case en vert
        td_Rad_J.classList.remove("no")
        td_Rad_J.classList.add("ok")
    } else {//change la couleur de la case en rouge
        td_Rad_J.classList.remove("ok")
        td_Rad_J.classList.add("no")

    }
    if ((chk_Rad_J.checked == true) && (chk_Rad_N.checked == true)) {//check si l'état des deux case sont à 1 puis change le symbole a O
        span_Rad_Val_NO.classList.remove("hidden")
        span_Rad_Val_NO.classList.remove("visible")
        span_Rad_Val_OK.classList.remove("visible")
        span_Rad_Val_OK.classList.add("visible")

    } else { //change le symbole a X
        span_Rad_Val_OK.classList.remove("hidden")
        span_Rad_Val_OK.classList.remove("visible")
        span_Rad_Val_NO.classList.remove("visible")
        span_Rad_Val_NO.classList.add("visible")
    }
}

function fn_Chk_Rad_N() {
    chk_Rad_N.checked = 1 - chk_Rad_N.checked
    if (chk_Rad_N.checked == true) {//vérifie l'état de la case pouis change la couleur de la case en vert
        td_Rad_N.classList.add("ok")
        td_Rad_N.classList.remove("no")
    } else {//change la couleur de la case en rouge
        td_Rad_N.classList.add("no")
        td_Rad_N.classList.remove("ok")
    }
    if ((chk_Rad_J.checked == true) && (chk_Rad_N.checked == true)) {//check si l'état des deux case sont à 1 puis change le symbole a O
        span_Rad_Val_NO.classList.remove("hidden")
        span_Rad_Val_NO.classList.remove("visible")
        span_Rad_Val_OK.classList.remove("visible")
        span_Rad_Val_OK.classList.add("visible")

    } else {//change le symbole a X
        span_Rad_Val_OK.classList.remove("hidden")
        span_Rad_Val_OK.classList.remove("visible")
        span_Rad_Val_NO.classList.remove("visible")
        span_Rad_Val_NO.classList.add("visible")
    }
}

function fn_Chk_Det_CO_J() {
    document.getElementById("chk_Det_CO_J").checked = 1 - document.getElementById("chk_Det_CO_J").checked;
    if (document.getElementById("chk_Det_CO_J").checked == 1) {
        document.getElementById("td_Det_CO_J").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_Det_CO_J").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_Det_CO_J").checked == 1) && (document.getElementById("chk_Det_CO_N").checked == 1)) {
        document.getElementById("span_Det_CO_Val_OK").style.visibility = 'visible';
        document.getElementById("span_Det_CO_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_Det_CO_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_Det_CO_Val_NO").style.visibility = 'visible';
    }
}

function fn_Chk_Det_CO_N() {
    document.getElementById("chk_Det_CO_N").checked = 1 - document.getElementById("chk_Det_CO_N").checked;
    if (document.getElementById("chk_Det_CO_N").checked == 1) {
        document.getElementById("td_Det_CO_N").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_Det_CO_N").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_Det_CO_J").checked == 1) && (document.getElementById("chk_Det_CO_N").checked == 1)) {
        document.getElementById("span_Det_CO_Val_OK").style.visibility = 'visible';
        document.getElementById("span_Det_CO_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_Det_CO_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_Det_CO_Val_NO").style.visibility = 'visible';
    }
}

function fn_Chk_Tel_J() {
    document.getElementById("chk_Tel_J").checked = 1 - document.getElementById("chk_Tel_J").checked;
    if (document.getElementById("chk_Tel_J").checked == 1) {
        document.getElementById("td_Tel_J").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_Tel_J").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_Tel_J").checked == 1) && (document.getElementById("chk_Tel_N").checked == 1)) {
        document.getElementById("span_Tel_Val_OK").style.visibility = 'visible';
        document.getElementById("span_Tel_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_Tel_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_Tel_Val_NO").style.visibility = 'visible';
    }
}

function fn_Chk_Tel_N() {
    document.getElementById("chk_Tel_N").checked = 1 - document.getElementById("chk_Tel_N").checked;
    if (document.getElementById("chk_Tel_N").checked == 1) {
        document.getElementById("td_Tel_N").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_Tel_N").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_Tel_J").checked == 1) && (document.getElementById("chk_Tel_N").checked == 1)) {
        document.getElementById("span_Tel_Val_OK").style.visibility = 'visible';
        document.getElementById("span_Tel_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_Tel_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_Tel_Val_NO").style.visibility = 'visible';
    }
}

function fn_Chk_GT_Info_J() {
    document.getElementById("chk_GT_Info_J").checked = 1 - document.getElementById("chk_GT_Info_J").checked;
    if (document.getElementById("chk_GT_Info_J").checked == 1) {
        document.getElementById("td_GT_Info_J").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_GT_Info_J").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_GT_Info_J").checked == 1) && (document.getElementById("chk_GT_Info_N").checked == 1)) {
        document.getElementById("span_GT_Info_Val_OK").style.visibility = 'visible';
        document.getElementById("span_GT_Info_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_GT_Info_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_GT_Info_Val_NO").style.visibility = 'visible';
    }
}

function fn_Chk_GT_Info_N() {
    document.getElementById("chk_GT_Info_N").checked = 1 - document.getElementById("chk_GT_Info_N").checked;
    if (document.getElementById("chk_GT_Info_N").checked == 1) {
        document.getElementById("td_GT_Info_N").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_GT_Info_N").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_GT_Info_J").checked == 1) && (document.getElementById("chk_GT_Info_N").checked == 1)) {
        document.getElementById("span_GT_Info_Val_OK").style.visibility = 'visible';
        document.getElementById("span_GT_Info_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_GT_Info_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_GT_Info_Val_NO").style.visibility = 'visible';
    }
}

function fn_Chk_Ann_J() {
    document.getElementById("chk_Ann_J").checked = 1 - document.getElementById("chk_Ann_J").checked;
    if (document.getElementById("chk_Ann_J").checked == 1) {
        document.getElementById("td_Ann_J").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_Ann_J").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_Ann_J").checked == 1) && (document.getElementById("chk_Ann_N").checked == 1)) {
        document.getElementById("span_Ann_Val_OK").style.visibility = 'visible';
        document.getElementById("span_Ann_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_Ann_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_Ann_Val_NO").style.visibility = 'visible';
    }
}

function fn_Chk_Ann_N() {
    document.getElementById("chk_Ann_N").checked = 1 - document.getElementById("chk_Ann_N").checked;
    if (document.getElementById("chk_Ann_N").checked == 1) {
        document.getElementById("td_Ann_N").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_Ann_N").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_Ann_J").checked == 1) && (document.getElementById("chk_Ann_N").checked == 1)) {
        document.getElementById("span_Ann_Val_OK").style.visibility = 'visible';
        document.getElementById("span_Ann_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_Ann_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_Ann_Val_NO").style.visibility = 'visible';
    }
}
function fn_Chk_Ess_J() {
    document.getElementById("chk_Ess_J").checked = 1 - document.getElementById("chk_Ess_J").checked;
    if (document.getElementById("chk_Ess_J").checked == 1) {
        document.getElementById("td_Ess_J").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_Ess_J").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_Ess_J").checked == 1) && (document.getElementById("chk_Ess_N").checked == 1)) {
        document.getElementById("span_Ess_Val_OK").style.visibility = 'visible';
        document.getElementById("span_Ess_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_Ess_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_Ess_Val_NO").style.visibility = 'visible';
    }
}

function fn_Chk_Ess_N() {
    document.getElementById("chk_Ess_N").checked = 1 - document.getElementById("chk_Ess_N").checked;
    if (document.getElementById("chk_Ess_N").checked == 1) {
        document.getElementById("td_Ess_N").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_Ess_N").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_Ess_J").checked == 1) && (document.getElementById("chk_Ess_N").checked == 1)) {
        document.getElementById("span_Ess_Val_OK").style.visibility = 'visible';
        document.getElementById("span_Ess_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_Ess_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_Ess_Val_NO").style.visibility = 'visible';
    }
}

function fn_Chk_Operation_CO_J() {
    document.getElementById("chk_Operation_CO_J").checked = 1 - document.getElementById("chk_Operation_CO_J").checked;
    if (document.getElementById("chk_Operation_CO_J").checked == 1) {
        document.getElementById("td_Operation_CO_J").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_Operation_CO_J").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_Operation_CO_J").checked == 1) && (document.getElementById("chk_Operation_CO_N").checked == 1)) {
        document.getElementById("span_Operation_CO_Val_OK").style.visibility = 'visible';
        document.getElementById("span_Operation_CO_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_Operation_CO_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_Operation_CO_Val_NO").style.visibility = 'visible';
    }
}

function fn_Chk_Operation_CO_N() {
    document.getElementById("chk_Operation_CO_N").checked = 1 - document.getElementById("chk_Operation_CO_N").checked;
    if (document.getElementById("chk_Operation_CO_N").checked == 1) {
        document.getElementById("td_Operation_CO_N").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_Operation_CO_N").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_Operation_CO_J").checked == 1) && (document.getElementById("chk_Operation_CO_N").checked == 1)) {
        document.getElementById("span_Operation_CO_Val_OK").style.visibility = 'visible';
        document.getElementById("span_Operation_CO_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_Operation_CO_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_Operation_CO_Val_NO").style.visibility = 'visible';
    }
}

function fn_Chk_Rdv_G_J() {
    document.getElementById("chk_Rdv_G_J").checked = 1 - document.getElementById("chk_Rdv_G_J").checked;
    if (document.getElementById("chk_Rdv_G_J").checked == 1) {
        document.getElementById("td_Rdv_G_J").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_Rdv_G_J").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_Rdv_G_J").checked == 1) && (document.getElementById("chk_Rdv_G_N").checked == 1)) {
        document.getElementById("span_Rdv_G_Val_OK").style.visibility = 'visible';
        document.getElementById("span_Rdv_G_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_Rdv_G_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_Rdv_G_Val_NO").style.visibility = 'visible';
    }
}

function fn_Chk_Rdv_G_N() {
    document.getElementById("chk_Rdv_G_N").checked = 1 - document.getElementById("chk_Rdv_G_N").checked;
    if (document.getElementById("chk_Rdv_G_N").checked == 1) {
        document.getElementById("td_Rdv_G_N").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_Rdv_G_N").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_Rdv_G_J").checked == 1) && (document.getElementById("chk_Rdv_G_N").checked == 1)) {
        document.getElementById("span_Rdv_G_Val_OK").style.visibility = 'visible';
        document.getElementById("span_Rdv_G_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_Rdv_G_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_Rdv_G_Val_NO").style.visibility = 'visible';
    }
}

function fn_Chk_GT_Vhc_J() {
    document.getElementById("chk_GT_Vhc_J").checked = 1 - document.getElementById("chk_GT_Vhc_J").checked;
    if (document.getElementById("chk_GT_Vhc_J").checked == 1) {
        document.getElementById("td_GT_Vhc_J").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_GT_Vhc_J").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_GT_Vhc_J").checked == 1) && (document.getElementById("chk_GT_Vhc_N").checked == 1)) {
        document.getElementById("span_GT_Vhc_Val_OK").style.visibility = 'visible';
        document.getElementById("span_GT_Vhc_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_GT_Vhc_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_GT_Vhc_Val_NO").style.visibility = 'visible';
    }
}

function fn_Chk_GT_Vhc_N() {
    document.getElementById("chk_GT_Vhc_N").checked = 1 - document.getElementById("chk_GT_Vhc_N").checked;
    if (document.getElementById("chk_GT_Vhc_N").checked == 1) {
        document.getElementById("td_GT_Vhc_N").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_GT_Vhc_N").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_GT_Vhc_J").checked == 1) && (document.getElementById("chk_GT_Vhc_N").checked == 1)) {
        document.getElementById("span_GT_Vhc_Val_OK").style.visibility = 'visible';
        document.getElementById("span_GT_Vhc_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_GT_Vhc_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_GT_Vhc_Val_NO").style.visibility = 'visible';
    }
}

function fn_Chk_50chf_J() {
    document.getElementById("chk_50chf_J").checked = 1 - document.getElementById("chk_50chf_J").checked;
    if (document.getElementById("chk_50chf_J").checked == 1) {
        document.getElementById("td_50chf_J").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_50chf_J").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_50chf_J").checked == 1) && (document.getElementById("chk_50chf_N").checked == 1)) {
        document.getElementById("span_50chf_Val_OK").style.visibility = 'visible';
        document.getElementById("span_50chf_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_50chf_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_50chf_Val_NO").style.visibility = 'visible';
    }
}

function fn_Chk_50chf_N() {
    document.getElementById("chk_50chf_N").checked = 1 - document.getElementById("chk_50chf_N").checked;
    if (document.getElementById("chk_50chf_N").checked == 1) {
        document.getElementById("td_50chf_N").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_50chf_N").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_50chf_J").checked == 1) && (document.getElementById("chk_50chf_N").checked == 1)) {
        document.getElementById("span_50chf_Val_OK").style.visibility = 'visible';
        document.getElementById("span_50chf_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_50chf_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_50chf_Val_NO").style.visibility = 'visible';
    }
}
function fn_Chk_PIHV_J() {
    document.getElementById("chk_PIHV_J").checked = 1 - document.getElementById("chk_PIHV_J").checked;
    if (document.getElementById("chk_PIHV_J").checked == 1) {
        document.getElementById("td_PIHV_J").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_PIHV_J").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_PIHV_J").checked == 1) && (document.getElementById("chk_PIHV_N").checked == 1)) {
        document.getElementById("span_PIHV_Val_OK").style.visibility = 'visible';
        document.getElementById("span_PIHV_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_PIHV_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_PIHV_Val_NO").style.visibility = 'visible';
    }
}

function fn_Chk_PIHV_N() {
    document.getElementById("chk_PIHV_N").checked = 1 - document.getElementById("chk_PIHV_N").checked;
    if (document.getElementById("chk_PIHV_N").checked == 1) {
        document.getElementById("td_PIHV_N").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_PIHV_N").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_PIHV_J").checked == 1) && (document.getElementById("chk_PIHV_N").checked == 1)) {
        document.getElementById("span_PIHV_Val_OK").style.visibility = 'visible';
        document.getElementById("span_PIHV_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_PIHV_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_PIHV_Val_NO").style.visibility = 'visible';
    }
}
function fn_Chk_Info_Traf_J() {
    document.getElementById("chk_Info_Traf_J").checked = 1 - document.getElementById("chk_Info_Traf_J").checked;
    if (document.getElementById("chk_Info_Traf_J").checked == 1) {
        document.getElementById("td_Info_Traf_J").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_Info_Traf_J").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_Info_Traf_J").checked == 1) && (document.getElementById("chk_Info_Traf_N").checked == 1)) {
        document.getElementById("span_Info_Traf_Val_OK").style.visibility = 'visible';
        document.getElementById("span_Info_Traf_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_Info_Traf_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_Info_Traf_Val_NO").style.visibility = 'visible';
    }
}

function fn_Chk_Info_Traf_N() {
    document.getElementById("chk_Info_Traf_N").checked = 1 - document.getElementById("chk_Info_Traf_N").checked;
    if (document.getElementById("chk_Info_Traf_N").checked == 1) {
        document.getElementById("td_Info_Traf_N").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_Info_Traf_N").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_Info_Traf_J").checked == 1) && (document.getElementById("chk_Info_Traf_N").checked == 1)) {
        document.getElementById("span_Info_Traf_Val_OK").style.visibility = 'visible';
        document.getElementById("span_Info_Traf_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_Info_Traf_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_Info_Traf_Val_NO").style.visibility = 'visible';
    }
}

function fn_Chk_Report_Info_Traf_J() {
    document.getElementById("chk_Report_Info_Traf_J").checked = 1 - document.getElementById("chk_Report_Info_Traf_J").checked;
    if (document.getElementById("chk_Report_Info_Traf_J").checked == 1) {
        document.getElementById("td_Report_Info_Traf_J").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_Report_Info_Traf_J").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_Report_Info_Traf_J").checked == 1) && (document.getElementById("chk_Report_Info_Traf_N").checked == 1)) {
        document.getElementById("span_Report_Info_Traf_Val_OK").style.visibility = 'visible';
        document.getElementById("span_Report_Info_Traf_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_Report_Info_Traf_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_Report_Info_Traf_Val_NO").style.visibility = 'visible';
    }
}

function fn_Chk_Report_Info_Traf_N() {
    document.getElementById("chk_Report_Info_Traf_N").checked = 1 - document.getElementById("chk_Report_Info_Traf_N").checked;
    if (document.getElementById("chk_Report_Info_Traf_N").checked == 1) {
        document.getElementById("td_Report_Info_Traf_N").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_Report_Info_Traf_N").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_Report_Info_Traf_J").checked == 1) && (document.getElementById("chk_Report_Info_Traf_N").checked == 1)) {
        document.getElementById("span_Report_Info_Traf_Val_OK").style.visibility = 'visible';
        document.getElementById("span_Report_Info_Traf_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_Report_Info_Traf_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_Report_Info_Traf_Val_NO").style.visibility = 'visible';
    }
}

function fn_Chk_Acc_Stage_J() {
    document.getElementById("chk_Acc_Stage_J").checked = 1 - document.getElementById("chk_Acc_Stage_J").checked;
    if (document.getElementById("chk_Acc_Stage_J").checked == 1) {
        document.getElementById("td_Acc_Stage_J").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_Acc_Stage_J").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_Acc_Stage_J").checked == 1) && (document.getElementById("chk_Acc_Stage_N").checked == 1)) {
        document.getElementById("span_Acc_Stage_Val_OK").style.visibility = 'visible';
        document.getElementById("span_Acc_Stage_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_Acc_Stage_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_Acc_Stage_Val_NO").style.visibility = 'visible';
    }
}

function fn_Chk_Acc_Stage_N() {
    document.getElementById("chk_Acc_Stage_N").checked = 1 - document.getElementById("chk_Acc_Stage_N").checked;
    if (document.getElementById("chk_Acc_Stage_N").checked == 1) {
        document.getElementById("td_Acc_Stage_N").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_Acc_Stage_N").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_Acc_Stage_J").checked == 1) && (document.getElementById("chk_Acc_Stage_N").checked == 1)) {
        document.getElementById("span_Acc_Stage_Val_OK").style.visibility = 'visible';
        document.getElementById("span_Acc_Stage_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_Acc_Stage_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_Acc_Stage_Val_NO").style.visibility = 'visible';
    }
}

function fn_Chk_Lect_Journal_J() {
    document.getElementById("chk_Lect_Journal_J").checked = 1 - document.getElementById("chk_Lect_Journal_J").checked;
    if (document.getElementById("chk_Lect_Journal_J").checked == 1) {
        document.getElementById("td_Lect_Journal_J").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_Lect_Journal_J").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_Lect_Journal_J").checked == 1) && (document.getElementById("chk_Lect_Journal_N").checked == 1)) {
        document.getElementById("span_Lect_Journal_Val_OK").style.visibility = 'visible';
        document.getElementById("span_Lect_Journal_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_Lect_Journal_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_Lect_Journal_Val_NO").style.visibility = 'visible';
    }
}

function fn_Chk_Lect_Journal_N() {
    document.getElementById("chk_Lect_Journal_N").checked = 1 - document.getElementById("chk_Lect_Journal_N").checked;
    if (document.getElementById("chk_Lect_Journal_N").checked == 1) {
        document.getElementById("td_Lect_Journal_N").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_Lect_Journal_N").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_Lect_Journal_J").checked == 1) && (document.getElementById("chk_Lect_Journal_N").checked == 1)) {
        document.getElementById("span_Lect_Journal_Val_OK").style.visibility = 'visible';
        document.getElementById("span_Lect_Journal_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_Lect_Journal_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_Lect_Journal_Val_NO").style.visibility = 'visible';
    }
}

function fn_Chk_Pb_Resp_GT_J() {
    document.getElementById("chk_Pb_Resp_GT_J").checked = 1 - document.getElementById("chk_Pb_Resp_GT_J").checked;
    if (document.getElementById("chk_Pb_Resp_GT_J").checked == 1) {
        document.getElementById("td_Pb_Resp_GT_J").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_Pb_Resp_GT_J").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_Pb_Resp_GT_J").checked == 1) && (document.getElementById("chk_Pb_Resp_GT_N").checked == 1)) {
        document.getElementById("span_Pb_Resp_GT_Val_OK").style.visibility = 'visible';
        document.getElementById("span_Pb_Resp_GT_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_Pb_Resp_GT_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_Pb_Resp_GT_Val_NO").style.visibility = 'visible';
    }
}

function fn_Chk_Pb_Resp_GT_N() {
    document.getElementById("chk_Pb_Resp_GT_N").checked = 1 - document.getElementById("chk_Pb_Resp_GT_N").checked;
    if (document.getElementById("chk_Pb_Resp_GT_N").checked == 1) {
        document.getElementById("td_Pb_Resp_GT_N").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_Pb_Resp_GT_N").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_Pb_Resp_GT_J").checked == 1) && (document.getElementById("chk_Pb_Resp_GT_N").checked == 1)) {
        document.getElementById("span_Pb_Resp_GT_Val_OK").style.visibility = 'visible';
        document.getElementById("span_Pb_Resp_GT_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_Pb_Resp_GT_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_Pb_Resp_GT_Val_NO").style.visibility = 'visible';
    }
}
function fn_Chk_Central_Propre_J() {
    document.getElementById("chk_Central_Propre_J").checked = 1 - document.getElementById("chk_Central_Propre_J").checked;
    if (document.getElementById("chk_Central_Propre_J").checked == 1) {
        document.getElementById("td_Central_Propre_J").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_Central_Propre_J").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_Central_Propre_J").checked == 1) && (document.getElementById("chk_Central_Propre_N").checked == 1)) {
        document.getElementById("span_Central_Propre_Val_OK").style.visibility = 'visible';
        document.getElementById("span_Central_Propre_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_Central_Propre_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_Central_Propre_Val_NO").style.visibility = 'visible';
    }
}

function fn_Chk_Central_Propre_N() {
    document.getElementById("chk_Central_Propre_N").checked = 1 - document.getElementById("chk_Central_Propre_N").checked;
    if (document.getElementById("chk_Central_Propre_N").checked == 1) {
        document.getElementById("td_Central_Propre_N").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_Central_Propre_N").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_Central_Propre_J").checked == 1) && (document.getElementById("chk_Central_Propre_N").checked == 1)) {
        document.getElementById("span_Central_Propre_Val_OK").style.visibility = 'visible';
        document.getElementById("span_Central_Propre_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_Central_Propre_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_Central_Propre_Val_NO").style.visibility = 'visible';
    }
}

function fn_Chk_Tache_J_Eff_J() {
    document.getElementById("chk_Tache_J_Eff_J").checked = 1 - document.getElementById("chk_Tache_J_Eff_J").checked;
    if (document.getElementById("chk_Tache_J_Eff_J").checked == 1) {
        document.getElementById("td_Tache_J_Eff_J").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_Tache_J_Eff_J").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_Tache_J_Eff_J").checked == 1) && (document.getElementById("chk_Tache_J_Eff_N").checked == 1)) {
        document.getElementById("span_Tache_J_Eff_Val_OK").style.visibility = 'visible';
        document.getElementById("span_Tache_J_Eff_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_Tache_J_Eff_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_Tache_J_Eff_Val_NO").style.visibility = 'visible';
    }
}

function fn_Chk_Tache_J_Eff_N() {
    document.getElementById("chk_Tache_J_Eff_N").checked = 1 - document.getElementById("chk_Tache_J_Eff_N").checked;
    if (document.getElementById("chk_Tache_J_Eff_N").checked == 1) {
        document.getElementById("td_Tache_J_Eff_N").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_Tache_J_Eff_N").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_Tache_J_Eff_J").checked == 1) && (document.getElementById("chk_Tache_J_Eff_N").checked == 1)) {
        document.getElementById("span_Tache_J_Eff_Val_OK").style.visibility = 'visible';
        document.getElementById("span_Tache_J_Eff_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_Tache_J_Eff_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_Tache_J_Eff_Val_NO").style.visibility = 'visible';
    }
}

function fn_Chk_Dim_Fiche_Stups_J() {
    document.getElementById("chk_Dim_Fiche_Stups_J").checked = 1 - document.getElementById("chk_Dim_Fiche_Stups_J").checked;
    if (document.getElementById("chk_Dim_Fiche_Stups_J").checked == 1) {
        document.getElementById("td_Dim_Fiche_Stups_J").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_Dim_Fiche_Stups_J").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_Dim_Fiche_Stups_J").checked == 1) && (document.getElementById("chk_Dim_Fiche_Stups_N").checked == 1)) {
        document.getElementById("span_Dim_Fiche_Stups_Val_OK").style.visibility = 'visible';
        document.getElementById("span_Dim_Fiche_Stups_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_Dim_Fiche_Stups_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_Dim_Fiche_Stups_Val_NO").style.visibility = 'visible';
    }
}

function fn_Chk_Dim_Fiche_Stups_N() {
    document.getElementById("chk_Dim_Fiche_Stups_N").checked = 1 - document.getElementById("chk_Dim_Fiche_Stups_N").checked;
    if (document.getElementById("chk_Dim_Fiche_Stups_N").checked == 1) {
        document.getElementById("td_Dim_Fiche_Stups_N").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("td_Dim_Fiche_Stups_N").style.backgroundColor = "#ff8080";
    }
    if ((document.getElementById("chk_Dim_Fiche_Stups_J").checked == 1) && (document.getElementById("chk_Dim_Fiche_Stups_N").checked == 1)) {
        document.getElementById("span_Dim_Fiche_Stups_Val_OK").style.visibility = 'visible';
        document.getElementById("span_Dim_Fiche_Stups_Val_NO").style.visibility = 'hidden';
    } else {
        document.getElementById("span_Dim_Fiche_Stups_Val_OK").style.visibility = 'hidden';
        document.getElementById("span_Dim_Fiche_Stups_Val_NO").style.visibility = 'visible';
    }
}




function evenement() {
    var els = document.getElementsByTagName("td");

    Array.prototype.forEach.call(els, function(el) {
        el.addEventListener('click', function (evt) {
            console.log (evt.target.getAttribute('data-line')+evt.target.getAttribute('data-type'))
        })
    });
}

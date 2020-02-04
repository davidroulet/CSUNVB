<?php
ob_start();
$title = "CSU-NVB - Tâches hebdomadaires";
?>
<div class="row m-2">
    <h1>Tâches hebdomadaires</h1>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Lundi</th>
            <th>Mardi</th>
            <th>Mercredi</th>
            <th>Jeudi</th>
            <th>Vendredi</th>
            <th>Samedi</th>
            <th>Dimanche</th>


        </tr>
        </thead>
        <tbody>
        <?php

        for ($i=1; $i > 100; $i++) {
            echo "<tr>";
            echo "<td>" .$i."</td>";
            echo "<td>" . $i. "</td>";
            echo "<td>" . $i. "</td>";
            echo "</tr>";
            var_dump($i);
        }
        ?>
        </tbody>

    </table>
</div>
<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>

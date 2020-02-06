<?php
ob_start();
$title = "CSU-NVB - Tâches hebdomadaires";
?>
<div class="row m-2">
    <h1>Tâches hebdomadaires</h1>
    <table class="table table-bordered">
        <thead class="thead-light">
        <tr>
            <th rowspan="2"></th>
            <th>Lundi</th>
            <th>Mardi</th>
            <th>Mercredi</th>
            <th>Jeudi</th>
            <th>Vendredi</th>
            <th>Samedi</th>
            <th>Dimanche</th>

        </tr>
        <tr>

            <th>date</th>
            <th>...</th>
            <th>...</th>
            <th>...</th>
            <th>...</th>
            <th>...</th>
            <th>...</th>

        </tr>
        </thead>
        <tbody>


        <tr >
            <td rowspan="6"><span class="horizontal"> jour</span></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>


        </tbody>
    </table>


        <?php
        /*
        for ($i=1; $i <10; $i++) {
            echo "<tr>";
            echo "<td>" .$i." : Do something"."</td>";

            echo "<td>" . $i." : Do something". "</td>";
            echo "<td>" . $i." : Do something" ."</td>";
            echo "<td>" . $i. " : Do something"."</td>";
            echo "<td>" . $i." : Do something" ."</td>";
            echo "<td>" . $i." : Do something" ."</td>";
            echo "<td>" . $i." : Do something" ."</td>";
            echo "</tr>";

        }
        */
        ?>



</div>
<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>

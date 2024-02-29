<!DOCTYPE html>
<html>
<head>
    <title>Tableau multidimensionnel</title>
</head>
<body>
    <table border=1>
        <tr>
            <th>nom matiere</th>
            <th>note1</th>
            <th>note2</th>
            <th>note3</th>
            <th>Moyenne</th>
        </tr>
        <?php
        $tab6 = ["java" => [14, 15, 8], "html" => [12.5, 15, 11], "js" => [19.25, 13, 17], "css" => [12, 17, 15], "angular" => [8, 14, 13], "nodejs" => [12, 10, 12]];

        // Use the foreach loop to iterate over the $tab6 array
     foreach ($tab6 as $key => $value) {
echo "<tr>
<td>$key</td>";
$moy=0;
foreach($value as $note){
$moy+=$note;
echo "<td>$note</td>";
}
echo "<td>".round($moy/count($value),2)."</td>";

echo "</tr>";
}
        ?>
    </table>
</body>
</html>
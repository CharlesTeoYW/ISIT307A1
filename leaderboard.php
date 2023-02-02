<html>
<style>
table {
    border:1px solid;
    border-collapse: collapse;
    padding: 10px;
}

td, th {
    border: 1px solid;
    border-collapse: collapse;
    text-align: left;
    padding: 10px;
}

</style>
<body>
<script>

</script>
<?php

$count = 0;
$col = 2;

echo "<table id='myTable2'>";
echo "<tr>";
echo "<th onclick=sortTable()> Nickname </th>";
echo "<th> Overall Score </th>";
echo "</tr>";

$row = 1;
if (($handle = fopen ("points.txt", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        echo "<tr>";
        for ($c = 0; $c < $num; $c++) {
            if ($row == 1) {
                echo "<th>" . $data[$c] . "</td>\n";
            } else {
                echo "<td>" . $data[$c] . "</td>\n";
            }
        }

        echo "</tr>\n";
        $row++;
    }
    fclose ($handle);
}
echo "</table>";


echo "<form action='a1.php'>";
echo "<br>If you would like to exit the quiz: <br>";
echo "<input type='submit' formaction='a1.php' name='Exit' value='Exit'>";
echo "</form>";

?>
</body>
</html>
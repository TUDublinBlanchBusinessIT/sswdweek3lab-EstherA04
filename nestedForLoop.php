<?php
echo "<table border='1'>"; // Start the table

for ($i = 1; $i <= 15; $i++) {
    echo "<tr>"; // Start a new row
    for ($j = 1; $j <= 20; $j++) {
        echo "<td>$i,$j</td>"; // Create a cell with $i and $j
    }
    echo "</tr>"; // End the row
}

echo "</table>"; // End the table
?>

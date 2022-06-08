<?php
/*
echo "<table>";
echo "<tr><th>Imię</th></tr>";
echo "<tr><th>Janusz</th></tr>";
echo "<tr><th>Anna</th></tr>";
echo "</table>";
*/
/*
// heredoc
$name1="Janusz";
$name2="Anna";
echo <<< TABLE
<table>
"<tr><th>Imię</th></tr>";
"<tr><th>Janusz</th></tr>"
"<tr><th>Anna</th></tr>"
</table>
table;
*/

echo <<< TABLE
  <table>
    <tr>
      <th>Imię</th>
      <th>Nazwisko</th>
        </tr>
TABLE;
    for ($i=1; $i <=5;$i++){
      echo <<< ROW
      <tr>
        <td>Imię$i</td>
        <td>Nazwisko$i</td>
      </tr>
ROW;
    }
echo "</table>";

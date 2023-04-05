<?php
include "connectdb.php";


$result = $connection->query("SELECT DISTINCT first_name, last_name, ID FROM employee");
echo "<form class=form action=\"employee.php\" method=\"post\">";
echo "<label for=\"employee\">Choose an Employee:</label>";
echo "<select name=\"ID\" id=\"employee\" action=\"employee.php\" type=\"post\">";
while ($row = $result->fetch()) {
            echo "<option value=".$row["ID"].">".$row["first_name"] ." ". $row["last_name"]."</option>";
}


echo "</select>";
echo "<button type=\"submit\">Search Employees</button>";
echo "</form>";
?>
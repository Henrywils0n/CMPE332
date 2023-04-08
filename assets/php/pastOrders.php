<?php
include "connectdb.php";

$result = $connection->query("SELECT order_date, COUNT(order_id) as order_num
                                FROM orders
                                GROUP BY order_date");
echo "<table id=table>";
echo "<tr>";
    echo"<th>Date</th>";
    echo"<th># of Orders</th>";
echo"</tr>";
while ($row = $result->fetch()) {

      echo "<tr>";
            echo"<td>";
            echo $row["order_date"]."</td>";
            echo"<td>";
            echo $row["order_num"]."</td>";
    echo"</tr>";
}
echo "</table>";


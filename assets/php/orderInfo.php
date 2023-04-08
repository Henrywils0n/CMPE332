<?php
include "connectdb.php";

if(!empty($_GET["date"])) {
    echo "<div class=wrapper>";
    $result = $connection->query("SELECT C.first_name, C.last_name, O.price, O.restaurant_id, O.tip, E.first_name as eFName, E.last_name as eLName
                                    FROM orders O
                                    JOIN employee E ON O.delivered_by = E.ID
                                    JOIN customer C ON C.email = O.customer_id
                                    WHERE '".$_GET["date"]."'=O.order_date"
                                    );
    if($result->rowCount()==0){
        echo "<h3>No orders were made on this date</h3>";
    }
    else {
        echo "<table id=table>";
        echo "<tr>";
            echo"<th colspan=7 text-align=center>".$_GET["date"]."</th>";
        echo"</tr>";
        echo "<tr>";
            echo"<th>First Name</th>";
            echo"<th>Last Name</th>";
            echo"<th>Order Amount</th>";
            echo"<th>Items</th>";
            echo"<th>Tip</th>";
            echo"<th>Driver First Name</th>";
            echo"<th>Driver Last Name</th>";
        echo"</tr>";
        while ($row = $result->fetch()) {

              echo "<tr>";
                    echo"<td>";
                    echo $row["first_name"]."</td>";
                    echo"<td>";
                    echo $row["last_name"]."</td>";
                    echo"<td>";
                    echo $row["price"]."</td>";
                    echo"<td>";
                    echo $row["restaurant_id"]."</td>";
                    echo"<td>";
                    echo $row["tip"]."</td>";
                    echo"<td>";
                    echo $row["eFName"]."</td>";
                    echo"<td>";
                    echo $row["eLName"]."</td>";
            echo"</tr>";
        }
        echo "</table>";
        echo "</div>";
    }
}
?>
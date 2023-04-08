<?php
include "connectdb.php";
if(!empty($_REQUEST["ID"])) {
    $result = $connection->query("SELECT day, start_time, end_time
    FROM employee E JOIN schedules S ON E.ID = S.employee_id
    WHERE E.ID =".$_REQUEST["ID"]."");
        echo "<div class=wrapper>";
        if($result->rowCount()==0){
            echo "<h3> No Shifts </h3>";
        }
        else {
            echo "<table id=table>";
            echo "<tr>";
                echo"<th colspan=3 text-align=center>".$_REQUEST["ID"]."</th>";
            echo"</tr>";
            echo "<tr>";
                echo"<th>Day</th>";
                echo"<th>Start Time</th>";
                echo"<th>End Time</th>";
            echo"</tr>";
            while ($row = $result->fetch()) {

                  echo "<tr>";
                        echo"<td>";
                        echo $row["day"]."</td>";
                        echo"<td>";
                        echo $row["start_time"]."</td>";
                        echo"<td>";
                        echo $row["end_time"]."</td>";
                echo"</tr>";
            }
            echo "</table>";
        }
        echo "</div>";
}

<?php
include "connectdb.php";
if (!empty($_REQUEST["email"])) {
    echo "<div class=wrapper>";
    $statement = $connection->prepare("INSERT INTO customer
                                 (email, first_name, last_name, street, city, postal_code, phone_number)
                                 VALUES (:email, :first_name, :last_name, :street, :city, :postal_code, :phone_number)"
                                 );

    $statement->bindParam(":first_name", $_REQUEST["first_name"]);
    $statement->bindParam(":last_name", $_REQUEST["last_name"]);
    $statement->bindParam(":email", $_REQUEST["email"]);
    $statement->bindParam(":street", $_REQUEST["street"]);
    $statement->bindParam(":city", $_REQUEST["city"]);
    $statement->bindParam(":postal_code",$_REQUEST["postal_code"]);
    $statement->bindParam(":phone_number", $_REQUEST["phone_number"]);

    try {
      $statement->execute();
    } catch(Exception $e) {
      echo "<h3 style=\"color: red\">Unable to create customer. Check values</h3>";
    }

    $statement = $connection->prepare("INSERT INTO account
                                    VALUES ('".$_REQUEST["email"]."', '5.00', '".date("Y-m-d")."')"
                                 );

    try {
      $statement->execute();
    } catch(Exception $e) {
      echo "<h3 style=\"color: red\">Unable to create account</h3>";
    }

    echo "</div>";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Restaurant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
<header class="header">
    <h1><strong> Wilson's Restaurant INC. </strong></h1>

    <div class="nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="pastOrders.php">Past Orders</a></li>
            <li><a href="orderInfo.php">Order Information</a></li>
            <li><a href="customer.php">Customers</a></li>
            <li><a class="active" href="employee.php">Employee</a></li>
        </ul>
    </div>
</header>

<div class=underHeader>
    <?php
        include "assets/php/dropdown.php";
    ?>
</div>
<div class=wrapper>
    <?php
        include "assets/php/employee.php";
    ?>
</div>
</body>
</html>